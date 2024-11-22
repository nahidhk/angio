<?php 
require_once("../config.php");

// POST ডেটা নেওয়া
$userid = $_POST['userid'];
$officecode = $_POST['officeid'];
$acccode = $_POST['acccode'];
$detels = $_POST['detels'];
$refer  = $_POST['refear'];
$deposit = $_POST['deposit'];
$cost = $_POST['cost'];
$admin = $_POST['admin'];

// ডেটা ইনসার্ট করার SQL স্টেটমেন্ট
$sql = "INSERT INTO cashbook (userid, officecode, acccode , detels , refer , deposit , cost , admin) VALUES ('$userid','$officecode', '$acccode' , '$detels', '$refer', '$deposit', '$cost' , '$admin')";

// ইনসার্ট করার চেষ্টা
if ($conn->query($sql) === TRUE) {
    echo "Office code OK";
} else {
    echo "Error: " . $conn->error;
}

// কানেকশন বন্ধ
$conn->close();
?>
