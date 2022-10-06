<?php

// informations connection

$servername = "localhost";
$username = "admin";
$password = "111111";
$dbname = "rewity";


// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo $_SESSION['id'];
}


