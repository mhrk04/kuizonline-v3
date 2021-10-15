<?php
require "./include/functions.php";
include "./include/header.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pengguna</title>

  <style>
    table {
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body>
  <header><?php require "./include/menu1.php" ?></header>
  <center>
    <h2>Pendaftaran pengguna Baru</h2>
  </center>
  <table>
    <tr>
      <td>
        <!-- borang daftar -->
        <form action="" method="POST">
          <label for="IC">No. Kad Pengenalan</label><br>
          <input autocomplete="off" type="text" id="IC" name="idpengguna" placeholder="No. Kad Pengenalan" maxlength="12" onkeypress='return event.charCode >= 8 && event.charCode <= 57' required autofocus>
          <br>
          <label for="pass">Katalaluan</label><br>
          <input type="password" id="pass" name="password" placeholder="Max 4 Digit" maxlength="4" required onkeypress='return event.charCode >= 8 && event.charCode <= 57'>
          <br>
          <label for="nama">Nama Pelajar</label><br>
          <input id="nama" size="50" type="text" name="nama" placeholder="Nama Penuh" required>
          <br>
          <label for="jantina">jantina</label><br>
          <select name="jantina" id="jantina">
            <option hidden value="">--pilih--</option>
            <option value="LELAKI">LELAKI</option>
            <option value="PEREMPUAN">PEREMPUAN</option>
          </select><br>
          <br>
          <button type="reset">Reset</button><button type="submit">Daftar</button><br><br>
        </form>
      </td>
    </tr>
  </table>
  <?php include "./include/footer.php" ?>
</body>

</html>