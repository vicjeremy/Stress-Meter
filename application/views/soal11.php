<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Tes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('Tes/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Halaman Tes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Perilaku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url(); ?>index.php/Tes/soal11" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <div class="card-body">
                        <label for="soal5">11. Apakah anda tidak dapat melihat hal positif dari suatu kejadian?</label><br>
                    
                    <div class="icheck-primary  ">
                          <input type="radio" id="jawaban_soal11_ya" name="jawaban_soal_11" value="ya" class="form-radio-input" required>
                          <label for="jawaban_soal11_ya">Ya</label>
                      </div>
                      <div class="icheck-primary  ">
                          <input type="radio" id="jawaban_soal11_mungkin" name="jawaban_soal_11" value="mungkin" class="form-radio-input">
                          <label for="jawaban_soal11_mungkin">Mungkin</label>
                      </div>
                      <div class="icheck-primary  ">
                            <input type="radio" id="jawaban_soal11_mungkin_tidak" name="jawaban_soal_11" value="mungkin tidak" class="form-radio-input">
                            <label for="jawaban_soal11_mungkin_tidak">Mungkin Tidak</label>
                        </div>
                      <div class="icheck-primary  ">
                          <input type="radio" id="jawaban_soal11_tidak" name="jawaban_soal_11" value="tidak" class="form-radio-input">
                          <label for="jawaban_soal11_tidak">Tidak</label>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <!-- /.card-body -->

              <div class="col-sm-12">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Next</button>
                </div>
                <!--<div class="card-footer">
                  <marquee direction="right" scrollamount="10">Tes diambil dari satupersen.net</marquee>
                </div>-->
              </div>
              
              </form>
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
