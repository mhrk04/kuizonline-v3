<?php
// require "include/functions.php"; <-- diambil dari page root
?>
<style>
  body {
    margin: 0;
  }

  .tajuk {
    color: red;
    font-size: 2.6em;
    background-color: aqua;
  }

  .subjek {
    color: blue;
    font-size: 1.5em;
  }

  .head {
    border: black 2px solid;
    width: 100%;
    text-align: center;
    margin: auto;
    display: block;
    align-items: center;
    margin: 0;

  }
</style>
<div class="head">
  <center>
    <center>
      <h1 class="tajuk">
        <?= $nama_sistem; ?>
      </h1>
      <h2 class="subjek">
        <?= $subjek; ?>
      </h2>
    </center>
    <input type="button" value="++" onclick="zoomIn()">
    <input type="button" value="--" onclick="zoomOut()">
    <!-- <button id="color">warna</button> -->
  </center>
  <script src="js/utility.js"></script>
</div>