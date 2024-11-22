  
<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as total_rows FROM members";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

} 
$conn->close();
?>
<blockquote>
    <div class="form">
        <div class="flex grap">
            <div class="card card1">
                <br>
                <span class="mytitle">Total Member</span><br>
                <span class="number"><i class="fa-solid fa-user"></i>&nbsp;<?php echo $row['total_rows'] ?> </span>
            </div>
        </div>
    </div>



