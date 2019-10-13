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
                <h3 class="card-title">Edit Contact</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/contact/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $contact->id ?>" />

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" value="<?php echo $contact->alamat ?>" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" placeholder="Alamat" name="alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                  </div>
                  
                <div class="form-group">
                    <label for="telp">Telepon</label>
                    <input value="<?php echo $contact->telp ?>" type="text" class="form-control <?php echo form_error('telepon') ? 'is-invalid':'' ?>" id="telepon" placeholder="Telepon" name="telepon">
                    <div class="invalid-feedback">
                        <?php echo form_error('telepon') ?>
                    </div>
                  </div>
                  
                  <div class="form-group">
                      <label for="hp">Hp</label>
                      <input value="<?php echo $contact->hp ?>" type="text" class="form-control <?php echo form_error('hp') ? 'is-invalid':'' ?>" id="hp" placeholder="Hp" name="hp">
                      <div class="invalid-feedback">
                          <?php echo form_error('hp') ?>
                      </div>
                    </div>
                  
                  <div class="form-group">
                      <label for="emial">Email</label>
                      <input value="<?php echo $contact->email ?>" type="text" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="Email" name="email">
                      <div class="invalid-feedback">
                          <?php echo form_error('email') ?>
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
