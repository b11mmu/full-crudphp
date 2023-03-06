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

$title = 'Ubah Mahasiswa';

include 'layout/header.php';

//check apakah tombol Ubah ditekan
if(isset($_POST["ubah"])) {
    if(update_mahasiswa($_POST) > 0) {
      echo "<script>
            alert('Data Mahasiswa Berhasil Diubah');
            document.location.href = 'mahasiswa.php';
            </script>";
    }else{
      echo "<script>
            alert('Data Mahasiswa Gagal Diubah');
            document.location.href = 'mahasiswa.php';
            </script>";
    }
  }

// ambil id mahasiswa dari url
$id_mahasiswa = (int)$_GET['id_mahasiswa'];
// query ambil data mahasiswa
$mahasiswa = select("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];

?>

<div class="container mt-5">
    <h1>Ubah Mahasiswa</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_mahasiswa" value="<?= $mahasiswa['id_mahasiswa']; ?>">
        <input type="hidden" name="fotoLama" value="<?= $mahasiswa['foto']; ?>">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama mahasiswa ..."required value="<?= $mahasiswa['nama']; ?>">
      </div>

      <div class="row">
        <div class="mb-3 col-6">
            <label for="prodi" class="form-label">Program Studi</label>
            <select name="prodi" id="prodi" class="form-control" required>
                <?php $prodi = $mahasiswa['prodi']; ?>
                <option value="Teknik Informatika" <?= $prodi == 'Teknik Informatika' ? 'selected' : null ?>>Teknik Informatika</option>
                <option value="Teknik Mesin" <?= $prodi == 'Teknik Mesin' ? 'selected' : null ?>>Teknik Mesin</option>
                <option value="Teknik Listrik" <?= $prodi == 'Teknik Listrik' ? 'selected' : null ?>>Teknik Listri</option>
            </select>
        </div>

        <div class="mb-3 col-6">
            <label for="jk" class="form-label">Jenis Klamin</label>
            <select name="jk" id="jk" class="form-control" required>
                <?php $jk = $mahasiswa['jk']; ?>
                <option value="Laki-laki" <?= $jk == 'Laki-laki' ? 'selected' : null ?>>Laki-laki</option>
                <option value="Perempuan" <?= $jk == 'Perempuan' ? 'selected' : null ?>>Perempuan</option>
            </select>
        </div>
      </div>

      <div class="mb-3">
        <label for="telepon" class="form-label">Telepon</label>
        <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Telepon ..."required value="<?= $mahasiswa['telepon']; ?>">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email ..."required value="<?= $mahasiswa['email']; ?>">
      </div>

      <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto ...">
        <p>
            <small>Gambar Sebelumnya</small>
        </p>
        <img src="assets/<?= $mahasiswa['foto']; ?>" alt="foto" width="100px">
      </div>

      <button type="submit" name="ubah" class="btn btn-primary" style="float:right">Ubah</button>
    </form>
</div>

<?php include 'layout/footer.php';?>  