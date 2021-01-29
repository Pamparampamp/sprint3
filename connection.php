<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'mysql';
$db = 'testtest1';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if ($conn->connect_error){
    die("connection failed" . $conn->connect_error);

    
}



?>