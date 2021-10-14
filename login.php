<?php
require "include/functions.php";
include "include/header.php";
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
      border: 1px solid black;
      align-items: center;
      margin-left: auto;
      margin-right: auto;
    }

    td.login {
      text-align: center;
    }
  </style>
</head>

<body>

  <head>
    <?php include "./include/menu1.php" ?>
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
              Nombor Kad Pengenalan :
            </label>
          </td>
          <td class="login">
            <input id="fname" type="text" name="idpengguna">
          </td>
        </tr>
        <tr>
          <td class="login"><label for="katalaluan">Katalalua :</label></td>
          <td class="login"><input type="password" id="katalaluan" name="password"></td>
        </tr>
      </table>
    </form>
  </main>
  <?php include "./include/footer.php" ?>
</body>

</html>