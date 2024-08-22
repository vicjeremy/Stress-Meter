  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Tes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('tes/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Hasil Tes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Diagnosa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive" >
                <table id="example1" class="table table-bordered table-striped">
                  <a href="<?php echo site_url('pdf_create/exportToPdf'); ?>" class="btn btn-primary">Export to PDF</a>
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tingkat Stress</th>
                    <th>Diagnosa</th>
                    <th>Delete</th>
                  </tr>
          </thead>
                 <tbody>
                      <tr>
                      <?php if (!empty($tingkat_stres)): ?>
                        <?php $i = 1; ?>
                          <?php foreach ($tingkat_stres as $tts): ?>
                          <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $tts->nama; ?></td>
                              <td><?php echo $tts->email; ?></td>
                              <td><?php echo $tts->rata_rata_skor; ?> %</td>
                              <td><?php echo $tts->tingkat_stres; ?></td>
                              <td>
                                  <center><?php echo anchor('Tes/delete_diagnosa_user/'.$tts->id,'<div class ="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td></center>
                              </td>
                          </tr>
                          <?php $i++; ?>
                          <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">Tidak ada data tersedia.</td>
                            </tr>
                        <?php endif; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tingkat Stress</th>
                    <th>Diagnosa</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
                <?php if (!empty($tingkat_stres)): ?>
                    <?php 
                        echo "<strong><span style='font-size:20px;'>Saran :</span></strong><br>";
                        $rata_rata_skor = $tts->rata_rata_skor;
                        if($rata_rata_skor > 80){
                            echo "Anda Perlu Banyak Istirahat";
                        } elseif ($rata_rata_skor > 50 && $rata_rata_skor <= 80){
                            echo "Anda perlu istirahat";
                        } elseif ($rata_rata_skor > 0 && $rata_rata_skor <= 50){
                            echo "Anda perlu banyak beraktivitas";
                        } else {
                            echo "Baik";
                        }
                    ?>
                <?php else: ?>
                    <strong><h5>Anda belum mengambil tes</h5></strong>
                <?php endif; ?>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Diagram Stress</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                <div class="form-group">
                    <div class="card-body">
                        <div class="progress-group">
                            <b><?php
                                if (!isset($rata_rata_skor) || $rata_rata_skor === "") {
                                    echo 'Anda belum mengambil tes';
                                } else {
                                    if ($rata_rata_skor == 0) {
                                        echo 'Tidak Stress: ';
                                    } elseif ($rata_rata_skor > 0 && $rata_rata_skor <= 40) {
                                        echo 'Stress Ringan: ';
                                    } elseif ($rata_rata_skor > 40 && $rata_rata_skor <= 80) {
                                        echo 'Stress Sedang: ';
                                    } elseif ($rata_rata_skor > 80 && $rata_rata_skor <= 100) {
                                        echo 'Stress Berat: ';
                                    } else {
                                        echo 'Tidak Diketahui';
                                    }
                                }
                                ?></b>
                            <span class="float-right"><b>
                                <?php 
                                    echo isset($rata_rata_skor) ? $rata_rata_skor : 'Belum diambil';
                                ?>
                            </b>/100</span>
                            <div class="progress progress-sm">
                                <?php if (isset($rata_rata_skor)): ?>
                                    <?php if ($rata_rata_skor > 80): ?>
                                        <div class="progress-bar bg-danger" style="width: <?php echo ($rata_rata_skor / 100) * 100; ?>%">
                                            <b><?php echo ($rata_rata_skor / 100) * 100; ?>%</b>
                                        </div>
                                    <?php elseif ($rata_rata_skor > 40 && $rata_rata_skor <= 80): ?>
                                        <div class="progress-bar bg-warning" style="width: <?php echo ($rata_rata_skor / 100) * 100; ?>%">
                                            <b><?php echo ($rata_rata_skor / 100) * 100; ?>%</b>
                                        </div>
                                    <?php elseif ($rata_rata_skor >= 0 && $rata_rata_skor <= 40): ?>
                                        <div class="progress-bar bg-success" style="width: <?php echo ($rata_rata_skor / 100) * 100; ?>%">
                                            <b><?php echo ($rata_rata_skor / 100) * 100; ?>%</b>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="progress-bar bg-secondary" style="width: 0%">
                                        <b>Belum diambil</b>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <!-- /.card-body -->

              <div class="col-sm-12">
              </div>
            </div>
            <!-- /.card -->
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
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
