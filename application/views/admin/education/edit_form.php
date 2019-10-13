<!DOCTYPE html>
<html lang="en">

<?php
$this->load->view("admin/partials/head.php")
?>

<body id="page-top">

<?php
$this->load->view("admin/partials/navbar.php")
?>

  <div id="wrapper">

    <!-- Sidebar -->
<?php
$this->load->view("admin/partials/sidebar.php")
?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
<?php
$this->load->view("admin/partials/breadcrumbs.php")
?>

<section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pendidikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/education/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $pendidikan->id ?>" />

                <div class="form-group">
                    <label for="pendidikan">Nama Pendiidkan</label>
                    <input type="text" value="<?php echo $pendidikan->nama_pend ?>" class="form-control <?php echo form_error('pendidikan') ? 'is-invalid':'' ?>" id="pendidikan" placeholder="Pendidikan" name="pendiidkan">
                    <div class="invalid-feedback">
                        <?php echo form_error('pendidikan') ?>
                    </div>
                  </div>
                  
                <div class="form-group">
                    <label for="waktu_pendidikan">Wkatu Pendidikan</label>
                    <input value="<?php echo $pendidikan->waktu_pend ?>" type="text" class="form-control <?php echo form_error('waktu_pendidikan') ? 'is-invalid':'' ?>" id="waktu_pendidikan" placeholder="Wakti Pendidikan" name="waktu_pendidikan">
                    <div class="invalid-feedback">
                        <?php echo form_error('waktu_pendidikan') ?>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>


      <!-- Sticky Footer -->
<?php
$this->load->view("admin/partials/footer.php")
?>


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
<?php
$this->load->view("admin/partials/scrolltop.php")
?>

  <!-- Logout Modal-->
<?php
$this->load->view("admin/partials/modal.php")
?>

  <!-- Bootstrap core JavaScript-->
<?php
$this->load->view("admin/partials/js.php")
?>

</body>

</html>
