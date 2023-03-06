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

include 'config/app.php';

// menerima id akun yang dipilih pengguna
$id_akun = (int)$_GET["id_akun"];

if (delete_akun($id_akun) > 0) {
    echo "<script>
            alert('Data akun Berhasil Dihapus');
            document.location.href = 'crud-modal.php';
        </script>";
}else {
    echo "<script>
            alert('Data akun Berhasil Dihapus');
            document.location.href = 'crud-modal.php';
        </script>";
}