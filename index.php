<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/src/css/style.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <script src="https://d3js.org/d3.v6.min.js"></script>

</head>
<body>
    <?php require_once("./config/sql/config.php"); ?>
    <?php 
     session_start();
     $id = $_SESSION['id'];
     if ($id == "") {
        echo "<script>window.location.href='/login'</script>";
     } 
    ?>
<?php require_once("./components/nav.php") ?>
   <!--  add menu box system  -->
     <section style="display: flex;">
     <?php require_once("./components/menu.html") ?>
     <div class="ux"><br><br><br>
     <div id="openphp"><?php require_once("./components/status.php") ?></div>
     </div>
    </section>
     <!-- end menu box system -->
    <!-- all script -->
    <script src="/src/js/api.js"></script>
    <script src="/src/js/components.js"></script>
     <script src="/src/js/app.js"></script>
     <script src="/src/js/login.js"></script>
     <script src="/src/js/status.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>