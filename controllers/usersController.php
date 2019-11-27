<?php
    $userQuery = "SELECT * FROM users";
    $stmt = $conn->prepare($userQuery);
    $stmt->execute();
    $user_result = $stmt->get_result();
    $stmt->close();

    if(isset($_POST['user-delete']))
    {
        $key = $_POST['userToDelete'];
        $checkQuery = "SELECT * FROM users WHERE id='$key' ";
        $stmt = $conn->prepare($checkQuery);
        $stmt->execute();
        $resultCheckQuery = $stmt->get_result();
        $countCheckQuery = $resultCheckQuery->num_rows;
        $stmt->close();

        if($countCheckQuery > 0)
        {
            $queryDelete = "DELETE FROM users WHERE id='$key'";
            $stmt = $conn->prepare($queryDelete);
            $stmt->execute();
            $stmt->close();

            header("Location: users.php#tableContent");
        }
        else
        {
            $message = "Failed!!";
			echo "<script type='text/javascript'>
				alert('$message');
			</script>";
        }
    }
?>