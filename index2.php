<?php
session_start();
require "./include/functions.php";
sec(); //fungsi keselamatan
$nokp = $_SESSION['idpengguna'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>

<body>
  <?php
  include "./include/header.php";
  require "./include/menu.php";
  ?>
  <center><?= $pengguna; ?></center>
  <table align="center" width="70%">
    <tr>
      <td>
        <h2><b>SELAMAT DATANG:</b></h2>
        <?php
        $dataA = mysqli_query($conn, "SELECT * FROM pengguna WHERE idpengguna = '$nokp'");
        $infoA = mysqli_fetch_array($dataA);
        ?>
        <h3>Nama Anda: <?= $infoA['nama']; ?></h3>
        <h3>No. KP: <?= $infoA['idpengguna']; ?></h3>
      </td>
    </tr>
  </table>
  <?php include "./include/footer.php" ?>
</body>

</html>