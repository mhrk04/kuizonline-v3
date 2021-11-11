<?php
session_start();
if ($_SESSION['level'] != "ADMIN") {
  header("Location: login.php");
  exit;
}
require "include/functions.php";
sec();
$pelajar = query("SELECT * FROM pengguna WHERE aras = 'PELAJAR' ORDER BY nama ASC");
if (isset($_POST['buttonDelete'])) {
  if (isset($_POST['username'])) {
    foreach ($_POST['username'] as $pel) {
      mysqli_query($conn, "DELETE FROM pengguna WHERE idpengguna = '$pel'");
    }
  }
  echo "<script>
          document.location.href = 'senarai_pelajar.php';
          </script>";
}
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
      <form action="" method="POST">
        <center>
          <input type="submit" name="buttonDelete" value="Delete" onclick="return confirm('Are you sure?')" />
        </center>
        <table align="center">
          <tr>
            <th width="1%"></th>
            <th width="5%">Bil.</th>
            <th width="10%">ID Pelajar</th>
            <th width="5%">Password</th>
            <th width="50%">Nama Pelajar</th>
            <th width="5%">Jantina</th>
          </tr>
          <?php $j = 1; ?>
          <?php foreach ($pelajar as $pel) : ?>
            <tr class="list">
              <td><input type="checkbox" value="<?= $pel['idpengguna']; ?>" name="username[]" id="padam"></td>
              <td><?= $j; ?></td>
              <td><?= $pel["idpengguna"]; ?></td>
              <td><?= $pel["password"]; ?></td>
              <td><?= $pel["nama"]; ?></td>
              <td><?= $pel["jantina"]; ?></td>

            </tr>
            <?php $j++; ?>
          <?php endforeach; ?>
        </table>
      </form>
    </main>
    <center>
      <font style="font-size: 14px;">*Senarai Tamat* <br>Jumlah Rekod : <?= $j - 1; ?></font>
    </center>
  </div>
</body>

</html>