<?php
require_once("../../config/sql/config.php");
function uploadFile($file, $folder) {
    $targetDir = "photo/" . $folder . "/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $uniqueID = uniqid(); 
    $uniqueName = $uniqueID . ".png";
    $targetFile = $targetDir . $uniqueName;
    
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        return $uniqueName; 
    } else {
        error_log("File upload failed for: " . $file["name"]); 
        return null;
    }
}
$uniqueID = uniqid(); 
$mid = $uniqueID; 
$name = $_POST['member_name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$spouse_name = $_POST['spouse_name'];
$nid_number = $_POST['nid_number'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$profession = $_POST['occupation'];
$phone_number = $_POST['mobile_number'];
$birth_date = $_POST['birth_date'];
$religion = $_POST['religion'];
$nominee_id_number = $_POST['nominee_id'];
$nominee_name = $_POST['nominee_name'];
$nominee_father_name = $_POST['nominee_father_name'];
$nominee_mother_name = $_POST['nominee_mother_name'];
$nominee_phone_number = $_POST['nominee_mobile'];
$relationship = $_POST['relationship'];

// The Photo upload system
$user_img = uploadFile($_FILES['user_img'], 'userimg');
$signature_img = uploadFile($_FILES['signature_img'], 'signature');
$nid_front_img = uploadFile($_FILES['nid_front_img'], 'nidfont');
$nid_back_img = uploadFile($_FILES['nid_back_img'], 'nidback');
$nominee_img = uploadFile($_FILES['nominee_img'], 'userimg');
$nominee_signature = uploadFile($_FILES['nominee_signature'], 'signature');

// Check if any image is null and handle accordingly
if ($user_img === null || $signature_img === null || $nid_front_img === null || $nid_back_img === null || $nominee_img === null || $nominee_signature === null) {
    error_log(print_r($_FILES, true));  
    echo "Error uploading one or more files.";
    exit; 
}

// Insert data into members table
$sql = "INSERT INTO members (
    mid, name, father_name, mother_name, spouse_name, nid_number, address, gender, nationality, profession,
    phone_number, birth_date, religion, user_img, signature_img, nid_front_img, nid_back_img,
    nominee_id_number, nominee_name, nominee_father_name, nominee_mother_name, nominee_phone_number,
    relationship, nominee_img, nominee_signature
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssssssssssssssssssss",
    $mid, $name, $father_name, $mother_name, $spouse_name, $nid_number, $address, $gender, $nationality,
    $profession, $phone_number, $birth_date, $religion, $user_img, $signature_img, $nid_front_img,
    $nid_back_img, $nominee_id_number, $nominee_name, $nominee_father_name, $nominee_mother_name,
    $nominee_phone_number, $relationship, $nominee_img, $nominee_signature
);


if ($stmt->execute()) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
    error_log("MySQL Insert Error: " . $stmt->error); // Log MySQL error for debugging
}

$stmt->close();
$conn->close();
?>
