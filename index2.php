<?php
session_start();
require "./include/functions.php";
sec();
echo "Tahniah !!" . $_SESSION['idpengguna'];
