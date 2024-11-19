<?php
require_once('../config.php');

$id = $_GET['id'];
$sql = "SELECT * FROM members WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    exit("No records found");
}
?>


<br /><br />
<blockquote>
  <h1> সদস্য এডিট করুন !</h1>
  <div>
    <form action="/src/php/addmember.php" method="post" enctype="multipart/form-data">
      <div class="form">
        <blockquote>
          <h3> সদস্য আইডি :
            <?php echo $row['id']?><br>Account Id :
            <?php echo $row['mid']?><br>NID:
            <?php echo $row['nid_number']?>
          </h3>
        </blockquote>
        <hr>
        <center>
          <h3>সদস্যের তথ্য</h3>
        </center>
        <hr>
        <div class="inputbox">

          <div class="myinput">
            <label for="">জাতীয় পরিচয় পত্র নম্বর <n>*</n></label><br />
            <input disabled value="<?php echo $row['nid_number']?>" name="nid_number" id="nid_number" type="number" pattern="[0-9]*" class="input"
              placeholder="এখানে লেখুন" required />
          </div>

          <div class="myinput">
            <label for="">সদস্যের নাম <n>*</n></label><br />
            <input value="<?php echo $row['name']?>" name="member_name" id="member_name" type="text" class="input" placeholder="এখানে লেখুন" required />
          </div>

          <div class="myinput">
            <label for="">সদস্যের পিতার নাম <n>*</n></label><br />
            <input value="<?php echo $row['father_name']?>" name="father_name" id="father_name" type="text" class="input" placeholder="এখানে লেখুন" required />
          </div>

          <div class="myinput">
            <label for="">সদস্যের মাতার নাম <n>*</n></label><br />
            <input value="<?php echo $row['mother_name']?>" name="mother_name" id="mother_name" type="text" class="input" placeholder="এখানে লেখুন" required />
          </div>

        </div>
        <div class="inputbox">

          <div class="myinput">
            <label for="">স্বামী বা স্ত্রীর নাম <n>*</n></label><br />
            <input value="<?php echo $row['spouse_name']?>" name="spouse_name" id="spouse_name" type="text" class="input" placeholder="এখানে লেখুন" required />
          </div>

          <div class="myinput">
            <label for="">পেশা <n>*</n></label><br />
            <input  value="<?php echo $row['profession']?>" name="occupation" id="occupation" type="text" class="input" placeholder="এখানে লেখুন" required />
          </div>

          <div class="myinput">
            <label for="">সদস্যের মোবাইল নম্বর <n>*</n></label><br />
            <input  value="<?php echo $row['phone_number']?>" name="mobile_number" id="mobile_number" type="text" class="input" placeholder="এখানে লেখুন"
              required />
          </div>

          <div class="myinput">
            <label for="">ঠিকানা <n>*</n></label><br />
            <input value="<?php echo $row['address']?>" name="address" id="address" type="text" class="input" placeholder="এখানে লেখুন" required />
          </div>
        </div>
        <div class="inputbox">
          <div class="myinput">
            <label for="">জন্ম তারিখ <n>*</n></label><br />
            <input value="<?php echo $row['birth_date']?>" name="birth_date" id="birth_date" type="date" class="input" placeholder="এখানে লেখুন" required />
          </div>


          <div class="myinput">
            <label for="">লিঙ্গ <n>*</n></label><br />
            <input value="<?php echo $row['gender']?>" name="gender" id="gender" type="text" class="input" placeholder="এখানে লেখুন" required />
          </div>

          <div class="myinput">
            <label for="">জাতীয়তা <n>*</n></label><br />
            <select name="nationality" id="nationality" required>
              <option selected>বাংলাদেশ</option>
            </select>
          </div>

          <div class="myinput">
            <label for="">ধর্ম <n>*</n></label><br />
            <input value="<?php echo $row['religion']?>" name="religion" id="religion" type="text" class="input" placeholder="এখানে লেখুন" required />
          </div>

        </div>

        <br><br>
        <hr>
        <center>
          <button type="submit" class="btn log">এডিট করুন </button>
        </center>
        <hr>
        <br><br>
      </div>

    </form>
  </div>
</blockquote>