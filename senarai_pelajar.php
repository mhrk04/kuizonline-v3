<?php
session_start();
require "include/functions.php";
sec();
$pelajar = query("SELECT * FROM pengguna WHERE aras = 'PELAJAR' ORDER BY nama ASC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Senarai Pelajar</title>
  <style>
    table {
      width: 70%;
      border: 0;
      text-align: center;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <div>
    <?php
    require "include/header.php";
    require "./include/menu.php";
    ?>
  </div>
  <div>
    <center>
      <h2>Senarai Pelajar Berdaftar</h2>
    </center>
    <main>
      <table align="center">
        <tr>
          <td width="5%">Bil.</td>
          <td width="10%">ID Pelajar</td>
          <td width="5%">Password</td>
          <td width="50%">Nama Pelajar</td>
          <td width="5%">Jantina</td>
          <td width="5%">Tindakan</td>
        </tr>
        <?php $j = 1; ?>
        <?php foreach ($pelajar as $pel) : ?>
          <tr class="list">
            <td><?= $j; ?></td>
            <td><?= $pel["idpengguna"]; ?></td>
            <td><?= $pel["password"]; ?></td>
            <td><?= $pel["nama"]; ?></td>
            <td><?= $pel["jantina"]; ?></td>
            <td>
              <!-- <a class="update" href="pelajar_update.php?id=">Ubah</a> -->
              <a class="padam" href="hapus.php?id=<?= $pel['idpengguna']; ?>&table=pelajar&fill=IDPelajar" onclick="return confirm('Yakin hendak dipadam');">Padam</a>
            </td>
          </tr>
          <?php $j++; ?>
        <?php endforeach; ?>
      </table>
    </main>
    <center>
      <font style="font-size: 14px;">*Senarai Tamat* <br>Jumlah Rekod : <?= $j - 1; ?></font>
    </center>
  </div>
</body>

</html>