<?php

$servername ="localhost";
$username = "root";

$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("connection is failed" . $conn->connect_error);
}

$sql  = "Create database testDB";

if($conn->query($sql) == TRUE){
    echo "database creation succeeded";
}else {

    echo "Error" .$conn->error;
}

?>