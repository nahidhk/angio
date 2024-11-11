<?php 
require_once("../config/sql/config.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT id, username, password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($id, $db_username, $hashed_password);
$stmt->fetch();

if ($db_username) {
    
    if (password_verify($password, $hashed_password)) {
       
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $db_username;
        echo "<script>sessionStorage.setItem('login',true);window.location='/'</script>";
    } else {
        echo "Invalid password!";
    }
} else {
    echo "Username not found!";
}

$stmt->close();
$conn->close();
?>

