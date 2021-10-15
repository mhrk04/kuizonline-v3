<?php
require "include/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    table.login {
      width: 70%;
      align-items: center;
      border: black solid 1px;
      margin-left: auto;
      margin-right: auto;
    }

    td.login {
      text-align: center;
    }

    .cen {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 200px;
      border: 3px solid green;
    }
  </style>
</head>

<body>

  <head>
    <?php
    include "include/header.php";
    include "./include/menu1.php" ?>
  </head>
  <center>
    <h2>Log Masuk Pengguna</h2>
  </center>
  <main>
    <form action="" method="POST">
      <table class="login">
        <tr>
          <td class="login">
            <label for="fname">
              No. Kad Pengenalan
            </label>
          </td>
          <td class="login">
            <input id="fname" placeholder="No. Kad Pengenalan anda" type="text" name="idpengguna" maxlength='12' onkeypress='return event.charCode >= 8 && event.charCode <= 57' required autofocus>
          </td>
        </tr>
        <tr>
          <td class="login">
            <label for="katalaluan">Katalaluan</label>
          </td>
          <td class="login">
            <input " type=" password" id="katalaluan" name="password" placeholder="Letakkan password anda" maxlength='4' onkeypress='return event.charCode >= 8 &&
    event.charCode <= 57' required>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <button type="submit">Log Masuk</button>
              <button type="reset">Reset</button>
              <br>
              <h5>*Jika belum mendaftar, <a href="./daftar_baru.php">Daftar di sini</a></h5>
            </center>
          </td>
        </tr>

      </table>
    </form>
  </main>
  <?php include "./include/footer.php" ?>
</body>

</html>