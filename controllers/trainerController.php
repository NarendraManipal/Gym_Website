<?php
    if(isset($_POST['upload-image']))
    {
        $target = "upload_images/".basename($_FILES['image']['name']);
        $msg = "";

        $tfname = $_POST['trainer-fname'];
        $tlname = $_POST['trainer-lname'];
        $designation = $_POST['designation'];
        $image = $_FILES['image']['name'];
        $discription = $_POST['discription'];

        $file_ext = explode('.', $image);
        $file_ext = strtolower(end($file_ext));
        
        //check for file extention
        $ext_allowed = array('jpg', 'jpeg', 'png', 'svg');
        if(in_array($file_ext, $ext_allowed))
        {
            //check for existing trainer
            $trainer_check = "SELECT * FROM trainers WHERE fname = ? and lname = ? LIMIT 1";
            $stmt = $conn->prepare($trainer_check);
            $stmt->bind_param('ss', $tfname, $tlname);
            $stmt->execute();
            $trainer_check_result = $stmt->get_result();
            $trainerCount = $trainer_check_result->num_rows;
            $stmt->close();
            if($trainerCount > 0)
            {
                $trainerQuery = "UPDATE trainers SET designation = ?, discription = ?, image = ? WHERE fname = ? and lname = ?";
                $stmt = $conn->prepare($trainerQuery);
                $stmt->bind_param('sssss', $designation, $discription, $image, $tfname, $tlname);
                $stmt->execute();
                $trainer_result = $stmt->get_result();
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
                {
                    $msg = "Successfull";
                }
                else
                {
                    $msg = "Failure";
                }
                $stmt->close();
            }
            else
            {
                $trainerQuery = "INSERT INTO trainers(fname, lname, image, designation, discription) VALUES(?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($trainerQuery);
                $stmt->bind_param('sssss', $tfname, $tlname, $image, $designation, $discription);
                $stmt->execute();
                $trainer_result = $stmt->get_result();
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
                {
                    $msg = "Successfull";
                }
                else
                {
                    $msg = "Failure";
                }
                $stmt->close();
            }    
        }
    }

    $trainer_fetch_query = "SELECT * FROM trainers";
    $stmt = $conn->prepare($trainer_fetch_query);
    $stmt->execute();
    $trainer_fetch_result = $stmt->get_result();
    $stmt->close();

    if(isset($_POST['trainer-delete']))
    {
        $key = $_POST['trainerToDelete'];
        $checkQuery = "SELECT * FROM trainers WHERE id='$key' ";
        $stmt = $conn->prepare($checkQuery);
        $stmt->execute();
        $resultCheckQuery = $stmt->get_result();
        $countCheckQuery = $resultCheckQuery->num_rows;
        $stmt->close();

        if($countCheckQuery > 0)
        {
            $queryDelete = "DELETE FROM trainers WHERE id='$key'";
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