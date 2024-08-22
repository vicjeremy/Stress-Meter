  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url(); ?>index.php/tes/" class="brand-link">
      <img src="<?= base_url('assets/images/logo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

      <span class="brand-text font-weight-light">Stress Meter</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="<?= site_url('Tes/') ?>" class="d-block"><?=ucfirst($this->fungsi->user_login()->nama)?></a>
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
     <?php if($this->session->userdata('level') == 3) : ?>
     <b><li class="nav-header">Menu User</li></b>
         <li class="nav-item ">
            <a href="<?= site_url('tes/') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?= site_url('tes/tts') ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Tes Tingkat Stress
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= site_url('tes/hasil') ?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Diagnosa
              </p>
            </a>
          </li>
      <?php elseif($this->session->userdata('level') == 1) : ?>
      <b><li class="nav-header">Menu Admin</li></b>
       <li class="nav-item ">
            <a href="<?= site_url('tes/') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?= site_url('tes/view_akn') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Tabel hak akses
              </p>
            </a>
        </li>
       <li class="nav-item ">
            <a href="<?= site_url('tes/hasil_admin') ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Gejala
              </p>
            </a>
        </li>
        <li class="nav-item ">
            <a href="<?= site_url('tes/diagram_pie') ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Diagram
              </p>
            </a>
        </li>
      <?php endif; ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>