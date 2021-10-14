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
