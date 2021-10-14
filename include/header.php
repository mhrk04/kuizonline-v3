<?php
require "../include/functions.php";
?>

<html>

<head>
  <title><?php echo $nama_sistem ?></title>
  <style>
    .tajuk {
      color: red;
      font-size: 3.5em;
    }

    .subjek {
      color: blue;
      font-size: 2.5em;
    }
  </style>
</head>

<body>
  <center>
    <center>
      <h1 class="tajuk">
        <?= $nama_sistem; ?>
      </h1><br>
      <h2 class="subjek">
        <?= $subjek; ?>
      </h2>
    </center>
    <input type="button" value="++" onclick="zoomIn()">
    <input type="button" value="--" onclick="zoomOut()">
    <!-- <button id="color">warna</button> -->
  </center>
  <script src="../js/utility.js"></script>
</body>

</html>