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

// menampilkan data pegawai

$data_pegawai = select ("SELECT * FROM pegawai ORDER BY id_pegawai DESC");

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pegawai</h1>
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
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
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
                <a href="tambah-pegawai.php" class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus"></i> Tambah</a>
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
        <?php $no = 1;?>
        <?php foreach ($data_pegawai as $pegawai) : ?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $pegawai["nama"];?></td>
                <td><?= $pegawai["jabatan"];?></td>
                <td><?= $pegawai["email"];?></td>
                <td><?= $pegawai["telepon"];?></td>
                <td><?= $pegawai["alamat"];?></td>
                <!-- <td class="text-center" width="25%">
                    <a href="detail-pegawai.php?id_pegawai=<?= $pegawai['id_pegawai']; ?>" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i> Detail</a>
                    <a href="ubah-pegawai.php?id_pegawai=<?= $pegawai['id_pegawai']; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                    <a href="hapus-pegawai.php?id_pegawai=<?= $pegawai["id_pegawai"];?>" onclick="return confirm('Yakin Data Mahasiswa Akan Dihapus.?');" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td> -->
            </tr>
        <?php endforeach; ?>
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

