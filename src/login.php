<?php
  session_start();
  include('./include/php/session.php');
  if($logged_in == true) {
    header("Location: index.php?page=home");
  }
  else {
    include('./include/php/login_processing.php');
  }
?>

<!DOCTYPE html>
<html>

<head>
  <?php
    include('./include/php/head.php');
  ?>
</head>

<body>
  <?php
    include('./include/php/header.php');
  ?>
  <?php
    include('./include/php/login-body.php')
  ?>
  <?php
    include('./include/html/footer.html');
  ?>
</body>

<script src="./js/header.js"></script>
</html>