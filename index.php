<?php
require "include/functions.php";
include "./include/header.php";
?>

<!-- mula html -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
    <?php include "./include/menu1.php"; ?>
    <center>
      <h2>
        <?= $motto_sistem; ?>
      </h2>
      <font size="5" color="green" face="Verdana">Subjek : <?= $subjek; ?></font>
    </center>
  </header>
  <table width="70%" align="center">
    <tr>
      <td width="10%">
        <img src="<?= $logo; ?>" alt="" width="100%">
      </td>
      <td width="60%">
        <h3>Soalan Terkini :</h3>
        <?php
        include "./include/soalan_terkini.php"
        ?>
      </td>
    </tr>
  </table>
  <?php
  include "include/footer.php"
  ?>
</body>

</html>