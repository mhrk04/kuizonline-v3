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

  <center>
    <h2>PRESTASI PELAJAR BERDASARKAN TOPIK</h2>
  </center>
  <main>
    <table width="70%" border="0" align="center" style="font-size: 16px;">
      <tr>
        <td width="2%"><b>Bil.</b></td>
        <td width="50%"><b>Topik</b></td>
        <td width="10%"><b>Bil. Menjawab</b></td>
        <td width="8%"><b>Laporan</b></td>
      </tr>
      <?php
      $no = 1;
      $topik = mysqli_query($conn, "SELECT * FROM topik");
      while ($infoTopik = mysqli_fetch_array($topik)) {
        $rekod = mysqli_query($conn, "SELECT idtopik,COUNT(idtopik) as 'bil' FROM perekodan WHERE idtopik='$infoTopik[idtopik]'");
        $infoJawab = mysqli_fetch_assoc($rekod);
      ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $infoTopik['topik']; ?></td>
          <td><?= $infoJawab['bil']; ?></td>
          <td><a href="laporan_guru.php?idtopik=<?= $infoTopik['idtopik']; ?> ">Buka</a></td>
        </tr>
      <?php $no++;
      } ?>
    </table>
  </main>
</body>

</html>