
<?php

$host = 'localhost'; 
$db_name = 'angio';  
$username = 'root'; 
$password = '51614824'; 


$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
