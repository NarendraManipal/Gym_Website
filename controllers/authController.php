<?php

    session_start();
    require 'config/db.php';

    //User Registration
    if(isset($_POST['signup-btn']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneno = $_POST['phoneno'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postal_code = $_POST['postal_code'];

        //register

        $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
        $stmt = $conn->prepare($emailQuery);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $userCount = $result->num_rows;
        $stmt->close();

        if($userCount > 0)
        {
            $message = "User already exists!!";
			echo "<script type='text/javascript'>
				alert('$message');
			</script>";
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));

        $sql = "INSERT INTO users (firstname, lastname, email, password, phoneno, address, city, postal_code, token) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssssssss', $firstname, $lastname, $email, $password, $phoneno, $address, $city, $postal_code, $token);
    
        if($stmt->execute())
        {
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;

            header('location: index.php');
            exit();
        }
        
    }

    //user login
    if(isset($_POST['login-btn']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM users WHERE email=? LIMIT 1 ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if(password_verify($password, $user['password']))
        {
            //login success
            $_SESSION['id'] = $user['id'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['email'] = $user['email'];

            //flash message
            $_SESSION['message'] = "You are now logged in!";
            $_SESSION['alert-class'] = "alert-success";

            header('location: index.php');
            exit();
        }
        else
        {
            $message = "Invalid username or password";
			echo "<script type='text/javascript'>
				alert('$message');
			</script>";
        }

    }

    //logout
    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['firstname']);
        unset($_SESSION['lastname']);
        unset($_SESSION['email']);
        header('location: index.php');
        exit();
    }

?>