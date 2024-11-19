 <?php 
 session_start();
 $id = $_SESSION['id'];
 $sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); 
} else {
  
    exit;
}

 ?>
 <!-- system nav -->
  <div class="nav animate__fadeInDown animate__animated">
    <nav>
        <blockquote>
           <h1>Dashboard</h1>
        </blockquote>
        <div class="navbtnbox">
            <button onclick="account()" class="naviconbtn"><i class="fa-regular fa-user"></i></button>
            <button class="naviconbtn"><i class="fa-solid fa-right-from-bracket"></i></button>
        </div>
        <!-- account -->
         <div class="vcc" id="account">
            <br><br>
            <center>
                <div class="userimg">
                    <div class="usericon">
                        <i class="fa-regular fa-user"></i>
                    </div>
                </div>
            </center>
   <blockquote>
   <details>
    <summary>Account Info</summary>
    <form action="/login/login.php" method="post">
        <label for="username">Username<n>*</n></label><br>
        <input  value="<?php echo $row['username']; ?>" name="username" type="text" class="input" placeholder="Input The Username" required><br>
        <label for="username">Password<n>*</n></label><br>
        <input value="<?php echo $row['password']; ?>"  name="password" id="password" type="password" class="input" placeholder="Input The Password"><br>
        <input type="checkbox" name="ck" id="ck" onclick="showpass()" >Show Password

        <center>
            <button class="btn log">Change</button>
        </center>
    </form>
   </details>
   </blockquote>
         </div>
    </nav>
   </div>
   <!-- system nav -->
