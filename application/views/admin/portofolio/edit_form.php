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
                <h3 class="card-title">Edit Portofolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/portofolio/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $portofolio->id ?>" />

                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input value="<?php echo $portofolio->foto ?>" type="text" class="form-control <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" placeholder="Foto" name="foto">
                    <div class="invalid-feedback">
                        <?php echo form_error('foto') ?>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="ket_port">Keterangan Portofolio</label>
                    <input type="text" value="<?php echo $portofolio->ket_port ?>" class="form-control <?php echo form_error('ket_port') ? 'is-invalid':'' ?>" id="ket_port" placeholder="Keterangan Portofolio" name="ket_port">
                    <div class="invalid-feedback">
                        <?php echo form_error('ket_port') ?>
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
