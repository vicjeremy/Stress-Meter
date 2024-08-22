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
              <li class="breadcrumb-item"><a href="<?= site_url('crud/') ?>">Home</a></li>
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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Interpersonal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url(); ?>index.php/tes/proses" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <div class="card-body">
                        <label for="soal1" id="soal1" data-value= "0.8">1. Saya sering merasa tertekan oleh tuntutan orang tua yang menyuruh saya segera wisuda</label><br>
                        
                        <div class="form-group clearfix">
                            <div class="icheck-primary">
                                <input type="radio" id="jawaban1-sering" name="jawaban1" value="sering" class="form-radio-input">
                                <label for="jawaban1-sering">
                                </label>Sering
                            </div>
                            <div class="icheck-primary">
                                <input type="radio" id="jawaban1-kadang" name="jawaban1" value="kadang" class="form-radio-input">
                                <label for="jawaban1-kadang">
                                </label>Kadang-kadang
                            </div>
                            <div class="icheck-primary">
                                <input type="radio" id="jawaban1-tidak-pernah" name="jawaban1" value="tidak pernah" class="form-radio-input">
                                <label for="jawaban1-tidak-pernah">
                                </label>Tidak Pernah
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
                    
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Interpersonal</h3>
                </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="card-body">
                    <label for="soal2" id="soal2" data-value= "0.4">2. Teman saya sering mengajak saya bermain game online sehingga saysa tidak fokus mengerjakan tugas dan skripsi</label><br>

                    <div class="form-group clearfix">
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban2-sering" name="jawaban2" value="sering" class="form-radio-input">
                                <label for="jawaban2-sering">
                                </label>Sering
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban2-kadang" name="jawaban2" value="kadang" class="form-radio-input">
                                <label for="jawaban2-kadang">
                                </label>Kadang-kadang
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban2-tidak-pernah" name="jawaban2" value="tidak pernah" class="form-radio-input">
                                <label for="jawaban2-tidak-pernah">
                                </label>Tidak Pernah
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Intrapersonal</h3>
                </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="card-body">
                    <label for="soal3" id="soal3" data-value= "0">3. Saya sering mengalami kesulitan tidur dan sering begadang</label><br>
                    
                    <div class="form-group clearfix">
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban3-sering" name="jawaban3" value="sering" class="form-radio-input">
                                <label for="jawaban3-sering">
                                </label>Sering
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban3-kadang" name="jawaban3" value="kadang" class="form-radio-input">
                                <label for="jawaban3-kadang">
                                </label>Kadang-kadang
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban3-tidak-pernah" name="jawaban3" value="tidak pernah" class="form-radio-input">
                                <label for="jawaban3-tidak-pernah">
                                </label>Tidak Pernah
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Intrapersonal</h3>
                </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="card-body">
                    <label for="soal4" id="soal4" data-value= "0.4">4. Saya sering mengalami kesulitan keuangan dan keuangan terbatas</label><br>
                    
                     <div class="form-group clearfix">
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban4-sering" name="jawaban4" value="sering" class="form-radio-input">
                                <label for="jawaban4-sering">
                                </label>Sering
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban4-kadang" name="jawaban4" value="kadang" class="form-radio-input">
                                <label for="jawaban4-kadang">
                                </label>Kadang-kadang
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban4-tidak-pernah" name="jawaban4" value="tidak pernah" class="form-radio-input">
                                <label for="jawaban4-tidak-pernah">
                                </label>Tidak Pernah
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Akademik</h3>
                </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="card-body">
                    <label for="soal5" id="soal5" data-value= "0.8">5. Saya sering kesulitan memahami materi yang disampaikan oleh dosen</label><br>
                    
                   <div class="form-group clearfix">
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban5-sering" name="jawaban5" value="sering" class="form-radio-input">
                                <label for="jawaban5-sering">
                                </label>Sering
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban5-kadang" name="jawaban5" value="kadang" class="form-radio-input">
                                <label for="jawaban5-kadang">
                                </label>Kadang-kadang
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban5-tidak-pernah" name="jawaban5" value="tidak pernah" class="form-radio-input">
                                <label for="jawaban5-tidak-pernah">
                                </label>Tidak Pernah
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Akademik</h3>
                </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="card-body">
                        <label for="soal6" id="soal6" data-value= "0">6. Saya sering merasa kesulitan dalam mencari literatur dan referensi</label><br>

                        <div class="form-group clearfix">
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban6-sering" name="jawaban6" value="sering" class="form-radio-input">
                                <label for="jawaban6-sering">
                                </label>Sering
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban6-kadang" name="jawaban6" value="kadang" class="form-radio-input">
                                <label for="jawaban6-kadang">
                                </label>Kadang-kadang
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban6-tidak-pernah" name="jawaban6" value="tidak pernah" class="form-radio-input">
                                <label for="jawaban6-tidak-pernah">
                                </label>Tidak Pernah
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Lingkungan</h3>
                </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="card-body">
                        <label for="soal7" id="soal7" data-value= "0.4">7. Saya sering tidak bisa bermain dan istirahat dengan leluasa</label><br>

                        <div class="form-group clearfix">
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban7-sering" name="jawaban7" value="sering" class="form-radio-input">
                                <label for="jawaban7-sering">
                                </label>Sering
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban7-kadang" name="jawaban7" value="kadang" class="form-radio-input">
                                <label for="jawaban7-kadang">
                                </label>Kadang-kadang
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban7-tidak-pernah" name="jawaban7" value="tidak pernah" class="form-radio-input">
                                <label for="jawaban7-tidak-pernah">
                                </label>Tidak Pernah
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>


            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Lingkungan</h3>
                </div>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="card-body">
                        <label for="soal8" id="soal8" data-value= "0">8. saya sering merasa tidak nyaman dirumah karena berisik membuat tidak fokus</label><br>

                        <div class="form-group clearfix">
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban8-sering" name="jawaban8" value="sering" class="form-radio-input">
                                <label for="jawaban8-sering">
                                </label>Sering
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban8-kadang" name="jawaban8" value="kadang" class="form-radio-input">
                                <label for="jawaban8-kadang">
                                </label>Kadang-kadang
                            </div>
                            <div class="icheck-primary  ">
                                <input type="radio" id="jawaban8-tidak-pernah" name="jawaban8" value="tidak pernah" class="form-radio-input">
                                <label for="jawaban8-tidak-pernah">
                                </label>Tidak Pernah
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class= "footer">
                  <marquee direction="right" scrollamount="10">Tes diambil dari satupersen.net</marquee>
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
