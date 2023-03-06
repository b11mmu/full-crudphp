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

// btasi halaman sesuai user login
if ($_SESSION["level"] != 1 and $_SESSION["level"] != 3 ) {
  echo "<script>
        alert('Perhatian! anda tidak punya hak akses');
        document.location.href = 'crud-modal.php';
        </script>";
  exit;
}

$title = 'Daftar Pegawai';

include 'layout/header.php';


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="fas fa-users"></i> Data Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        
          <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Data Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example2" class="table table-bordered table-hover">
                <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Alamat</th>
      </tr>
    </thead>

    <tbody>
        
    </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
    </div><!-- /.container-fluid -->
  </section>
    <!-- /.content -->
</div>

  <?php include 'layout/footer.php';?> 

