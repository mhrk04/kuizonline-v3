<?php
session_start();
require './include/functions.php';
sec();
if (isset($_POST['import'])) {
  // cek ada isi tak
  $is_uploading = $_FILES["file"]["error"];
  $can_pass = $is_uploading == 0 ? true : false;
  if ($can_pass) {
    $namafail = $_FILES['file']['tmp_name'];
    $fail = fopen($namafail, "r");
    while (!feof($fail)) {
      $medan = explode(",", fgets($fail));
      $idpengguna = $medan[0];
      $pass = $medan[1];
      $nama = $medan[2];
      $jant = $medan[3];
      $sql = "INSERT INTO pengguna VALUES ('$idpengguna','$pass','$nama','$jant','PELAJAR')";
      mysqli_query($conn, $sql);
    }
  }
  if (mysqli_affected_rows($conn) !== 0) {
    echo "
        <script>
        alert('data berjaya ditambah');
        document.location.href = 'senarai_pelajar.php';
        </script>
        
        ";
  } else {
    echo "
        <script>
        alert('data tidak berjaya ditambah');
        document.location.href = 'import_daftar.php';
        </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Import Daftar</title>
</head>

<body>
  <header>
    <?php include "./include/header.php" ?>
  </header>
  <nav>
    <?php
    require "./include/menu.php"
    ?>
  </nav>
  <center>
    <h2>IMPORT NAMA PELAJAR DARI FAIL CSV</h2>
  </center>
  <main>
    <center>
      <table align="center" border="0" width="70%">
        <tr>
          <td>
            <form action="" method="POST" name="upload_excel" enctype="multipart/form-data">
              <center>
                <label for="">Kemudahan untuk daftar nama pelajar secara berkelompok</label><br>
                <label for="file">Pilih lokasi fail CSV/Excel:</label>
                <input type="file" name="file" id="file"><br>
                <button type="submit" id="submit" name="import">Upload</button>
              </center>
    </center>
    </form>
    *Cipta fail dalam MS Excel & save as csv mengikut aturan lajur seperti di bawah:
    <table align="center" width="70%" border="1">
      <tr>
        <td>010101100359</td>
        <td>1234</td>
        <td>Mahmud bin maaiz</td>
        <td>LELAKI</td>
      </tr>
    </table>
    </td>
    </tr>
    </table>
  </main>
  <?php include "./include/footer.php" ?>
</body>

</html>