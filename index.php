<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "flutterphp6a";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connection established to MySql"
?>