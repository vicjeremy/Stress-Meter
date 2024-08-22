<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/adminlte.min.css'); ?>">
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= site_url('index.php/Overview/') ?>" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/adminlte/dist/img/user2.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= site_url('index.php/Overview/') ?>" class="d-block">Oei Joviano M W</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/OverView/'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-header"><b>Menu Mahasiswa</b></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Status SPP
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/OverView/SPP'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPP</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Form KRS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/OverView/KRS'); ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengisian KRS</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?php echo base_url('index.php/OverView/edKRS'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit KRS</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Table View Perkuliahan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/OverView/vKRS'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View KRS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/OverView/vKHS'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KHS</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Hasil KRS Mahasiswa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/OverView/hKRS'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Revisi & Delete</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-header"><b>Menu Dosen</b></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                KRS Mahasiswa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/OverView/setuju'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Setuju/Tidak Setuju KRS</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?php echo base_url('index.php/OverView/krsDosen'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat KRS Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengisian KRS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('index.php/Overview/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Pengisian KRS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content d-flex justify-content-center">
      <div class="container-fluid align-items-center">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pengisian Matakuliah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Status</th>
                    <th>Agama</th>
                    <th>Hobby</th>
                    <th>Foto</th>
					
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><input type="text" name="nim" required></td>

                    <td><input type="text" name="nama" required></td>

                    <td><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
					<input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
					</td>

                    <td><input type="date" name="tanggal_lahir" required></td>

					<td><select name="id_status" required>
					<?php foreach ($status_kawin as $status): ?>
						<option value="<?php echo $status['id_status']; ?>">
							<?php echo $status['nama_status']; ?>
						</option>
					<?php endforeach; ?>
					</select>
					</td>
					
					<td>
					<select name="id_agama" required>
						<?php foreach ($agama as $agm): ?>
							<option value="<?php echo $agm['id_agama']; ?>">
								<?php echo $agm['nama_agama']; ?>
							</option>
						<?php endforeach; ?>
					</select>
					</td>
					
					<td>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobi[]" value="Olahraga">
							<label class="form-check-label" for="hobi_olahraga">Olahraga</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobi[]" value="Kuliner">
							<label class="form-check-label" for="hobi_kuliner">Kuliner</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobi[]" value="Teknologi">
							<label class="form-check-label" for="hobi_teknologi">Teknologi</label>
						</div>
					</td>
					
					<td><input type="file" id="foto" name="foto" required></td>
                  </tr>

                  </tfoot>
                </table>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url('assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
