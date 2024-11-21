<?php 
require_once("../config.php");

// POST ডেটা নেওয়া
$officecode = $_POST['officecode'];
$codename = $_POST['officname'];

// ডেটা ইনসার্ট করার SQL স্টেটমেন্ট
$sql = "INSERT INTO acccode (officecode, codename) VALUES ('$officecode', '$codename')";

// ইনসার্ট করার চেষ্টা
if ($conn->query($sql) === TRUE) {
    echo "Office code OK";
} else {
    echo "Error: " . $conn->error;
}

// কানেকশন বন্ধ
$conn->close();
?>
