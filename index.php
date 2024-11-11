<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="/src/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
</head>
<body>
    <?php require_once("./config/sql/config.php"); ?>
<?php require_once("./components/nav.php") ?>
   <!--  add menu box system  -->
     <section style="display: flex;">
     <?php require_once("./components/menu.html") ?>
   
    </section>
     <!-- end menu box system -->
    <!-- all script -->
     <script src="/src/js/app.js"></script>
     <script src="/src/js/login.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>