<?php
session_start();
if ($_SESSION['level'] != "ADMIN") {
  header("Location: login.php");
  exit;
}
require "include/functions.php";
sec();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prestasi Pelajar</title>
</head>

<body>
  <header>
    <?php include "./include/header.php" ?>
  </header>
  <nav>
    <?php include "include/menu.php" ?>
  </nav>
</body>

</html>