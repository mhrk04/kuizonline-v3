<?php
// sambung ke database
$conn = mysqli_connect("localhost", "root", "", "kuizonlinev3");
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


// fungsi register
function register($data)
{
  global $conn;
  $idpengguna = htmlspecialchars($data['idpengguna']);
  $pass = mysqli_real_escape_string($conn, $data['password']);
  $nama = htmlspecialchars($data['nama']);
  $jantina = htmlspecialchars($data['jantina']);
  //cek kau value kosong
  if (empty($idpengguna || $pass || $nama || $jantina)) {
    return [
      'error' => true,
      'pesan' => 'Pastikan semua ruangan diisi!'
    ];
    exit;
  }
  // cek ID dah ade blum sudah ada atau belum
  $result = mysqli_query($conn, "SELECT idpengguna FROM pengguna WHERE idpengguna = '$idpengguna' ");
  if (mysqli_fetch_assoc($result)) {
    return [
      'error' => true,
      'pesan' => 'ID telah digunakan!'
    ];
    exit;
  }
  //masukkan user ke database jika ok
  $que = "INSERT INTO pengguna VALUES('$idpengguna','$pass','$nama','$jantina','PELAJAR')";
  mysqli_query($conn, $que);
  if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
   alert('Tahniah! Anda telah terdaftar.');
   </script>";
  }
}
