<?php
    require 'constants.php';

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if($conn->connect_error)
    {
        die('Database error:'.$conn->connect_error);
    }
?>