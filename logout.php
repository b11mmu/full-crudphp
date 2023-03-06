<?php

session_start();

// btasi halaman sebelum login
if (!isset($_SESSION["login"])) {
  echo "<script>
          alert('Login Dulu Dong');
        document.location.href = 'login.php';
        </script>";
  exit;
}

// kosongkan $_SESSION user login
$_SESSION = [];

session_unset();
session_destroy();
header("location: login.php");


?>