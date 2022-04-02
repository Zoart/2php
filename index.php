<?php
  include './db/db.php';
  include './db/use_db.php';
  include './db/viewuser.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
   <script src="https://kit.fontawesome.com/1555de2a22.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
    $users = new ViewUser();
    $users->showAllusers();
  ?>
</body>
</html>