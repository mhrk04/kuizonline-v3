<?php
session_start();
if ($_SESSION['level'] != "ADMIN") {
    header("Location: login.php");
    exit;
}
require "include/functions.php";
sec();
include "include/header.php";
$topik = query("SELECT * FROM topik");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuiz</title>
</head>

<body>
    <header>
        <?php include "./include/menu.php" ?>
    </header>
    <center>
        <h2>
            SENARAI TOPIK
        </h2>
    </center>
    <table width="70%" border="0%" align="center" style="font-size:16px">
        <tr>
            <td>
                <b>
                    <a href="tambah_topik.php">
                        <button>TOPIK BARU</button>
                    </a>
                </b>
            </td>
        </tr>
        <tr>
            <td width="2%"><b>Bil.</b></td>
            <td width="41%"><b>Topik</b></td>
            <td width="11%"><b>Urus Topiks</b></td>
            <td width="16%"><b>Urus Soalan</b></td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($topik as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["topik"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>