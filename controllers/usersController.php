<?php

    $userQuery = "SELECT * FROM users";
    $stmt = $conn->prepare($userQuery);
    $stmt->execute();
    $user_result = $stmt->get_result();
    $stmt->close();
?>