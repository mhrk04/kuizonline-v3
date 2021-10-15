<?php
// sambung ke database
$conn = mysqli_connect("localhost", "root", "12345678", "kuizonlinev3");
// penetapan sistem
$lencana = "../img/logo.png";
$subjek = "Sejarah Tingkatan 3";
$nama_sekolah = "SMK Cheras";
$nama_sistem = "Sistem penilaian kendiri";
$motto_sistem = "SOALAN : MCQ/TRUE|FALSE/FILL IN THE BLANK";
$footer = "Mhaziqrk";
$logo = "img/logo.png";
//function mengquery database
function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
//fungsi keselamatan
function sec()
{
  if (!isset($_SESSION['idpengguna'])) {
    // return [
    //   'error' => true,
    //   'pesan' => 'Sila Log Masuk terlebih dahulu sebelum menjawab kuiz!'
    // ];
    header("Location: login.php");

    exit();
  }
}

//funsi Log in
function login($data)
{
  global $conn;
  $user = htmlspecialchars($data['idpengguna']);
  $pass = htmlentities($data['password']);
  $query = mysqli_query($conn, "SELECT * FROM pengguna WHERE idpengguna = '$user' AND password = '$pass'");
  $row = mysqli_fetch_assoc($query);
  if (mysqli_num_rows($query) == 0 || $row['password'] != $pass) {
    return [
      'error' => true,
      'pesan' => 'IDPengguna / Password Salah!'
    ];
    exit;
  } else {
    $_SESSION['idpengguna'] = $row['idpengguna'];
    $_SESSION['level'] = $row['aras'];
    header("Location: index2.php");
  }
}
