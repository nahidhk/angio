<?php
require_once("../../config/sql/config.php");
$sql = "ALTER TABLE userlist ADD ";
if ($conn->query($sql) === TRUE) {
    echo "নতুন কলাম সফলভাবে যোগ করা হয়েছে।";
} else {
    echo "কুয়েরি ত্রুটি: " . $conn->error;
}
$conn->close();
?>