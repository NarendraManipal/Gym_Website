<?php
    $allMembersSQL = "SELECT m.id, m.member, m.email, u.firstname, u.lastname, m.start, m.end FROM membership m, users u WHERE m.id=u.id AND m.member=1";
    $stmt = $conn->prepare($allMembersSQL);
    $stmt->execute();
    $allMember_result = $stmt->get_result();
    $stmt->close();    


    /*Delete member*/
    if(isset($_POST['member-delete']))
    {
        $key = $_POST['memberToDelete'];
        $checkQuery = "SELECT * FROM membership WHERE id='$key' ";
        $stmt = $conn->prepare($checkQuery);
        $stmt->execute();
        $resultCheckQuery = $stmt->get_result();
        $countCheckQuery = $resultCheckQuery->num_rows;
        $stmt->close();

        if($countCheckQuery > 0)
        {
            $queryDelete = "DELETE FROM membership WHERE id='$key'";
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

    
    if(isset($_SESSION['id']) && isset($_SESSION['email']))
    {
        $username = $_SESSION['email'];
        $member = "0";

        $priceSQL = "SELECT * FROM membership WHERE email=? LIMIT 1 ";
        $stmt = $conn->prepare($priceSQL);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $memberresult = $stmt->get_result();
        $memberValues = $memberresult->fetch_assoc();
        $stmt->close();
    
        $membershipCheckSQL = "SELECT * FROM users WHERE email=? LIMIT 1 ";
        $stmt = $conn->prepare($membershipCheckSQL);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $membershipCheckResult = $stmt->get_result();
        $membershipCheckValues = $membershipCheckResult->fetch_assoc();
        $stmt->close();

        if($memberValues['member'] === 0)
        {
            $member = "0";

             if(isset($_POST['day-membership-btn']))
             {
                $subSQL = "UPDATE membership SET member=1, start=now(), end=DATE_ADD(now() , INTERVAL 1 DAY) WHERE email=?";
                $stmt = $conn->prepare($subSQL);
                $stmt->bind_param('s', $username);
                $stmt->execute();
                
                header("Location: pricing.php");
             }
             if(isset($_POST['month-membership-btn']))
             {
                $subSQL = "UPDATE membership SET member=1, start=now(), end=DATE_ADD(now() , INTERVAL 30 DAY) WHERE email=?";
                $stmt = $conn->prepare($subSQL);
                $stmt->bind_param('s', $username);
                $stmt->execute();
                
                header("Location: pricing.php");
             }
             if(isset($_POST['year-membership-btn']))
             {
                $subSQL = "UPDATE membership SET member=1, start=now(), end=DATE_ADD(now() , INTERVAL 365 DAY) WHERE email=?";
                $stmt = $conn->prepare($subSQL);
                $stmt->bind_param('s', $username);
                $stmt->execute();
                
                header("Location: pricing.php");
             }
        }
        else
        {
            $member = "1";

            $expire_content = $allMember_result->fetch_assoc();

            $date1 = date('Y-m-d');
            $date2 = $expire_content['end'];

            $diff = abs(strtotime($date2) - strtotime($date1));

            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

            if($expire_content['member'] == 1 && $years == 0 && $months == 0 && $days == 0)
            {
                $expireSQL = "UPDATE membership SET member=1, start=0, end=0 WHERE email=?";
                $stmt = $conn->prepare($expireSQL);
                $stmt->bind_param('s', $username);
                $stmt->execute();
                $stmt->close();
            }
        }
    }
?>