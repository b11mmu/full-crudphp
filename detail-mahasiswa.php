
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

$title = 'Detail Mahasiswa';

include 'layout/header.php';

// mengambil id mahasiswa dari url
$id_mahasiswa = (int)$_GET["id_mahasiswa"];

// menampilkan data mahasiswa
$mahasiswa = select ("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];

?>

<div class="container mt-5">
    <h1><?= $mahasiswa["nama"]; ?></h1>
    <hr>

  <table class="table table-bordered table-striped mt-3">
    <tr>
        <td>Nama</td>
        <td>: <?= $mahasiswa["nama"]; ?></td>
    </tr>

    <tr>
        <td>Prodi</td>
        <td>: <?= $mahasiswa["prodi"]; ?></td>
    </tr>

    <tr>
        <td>Jenis Kelamin</td>
        <td>: <?= $mahasiswa["jk"]; ?></td>
    </tr>

    <tr>
        <td>Telepon</td>
        <td>: <?= $mahasiswa["telepon"]; ?></td>
        <tr>
        <td>Email</td>
        <td>: <?= $mahasiswa["email"]; ?></td>
    </tr>

    <tr>
        <td width="50%">Foto</td>
        <td><a href="assets/<?= $mahasiswa['foto']; ?>">
                <img src="assets/<?= $mahasiswa['foto'];?>" alt="foto" width="50%">
            </a>
        </td>
    </tr>

    </tr>
    
  </table>
</div>

<?php include  'layout/footer.php'; ?>