<?php 
    $host = "localhost";
    $dbname = "edusogno";
    $username = "root";
    $password = "root";

    $mysqli = new mysqli($host, 
                         $username, 
                         $password, 
                         $dbname);

    if ($mysqli->connect_errno) {
        die ("Connection error: " . $mysqli->connect_error);
    }

    return $mysqli;
?>

