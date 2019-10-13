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
                <h3 class="card-title">Edit Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $biodata->id ?>" />

                <div class="form-group">
                    <label for="resume">Resume</label>
                    <input type="text" value="<?php echo $biodata->resume ?>" class="form-control <?php echo form_error('resume') ? 'is-invalid':'' ?>" id="resume" placeholder="Resume" name="resume">
                    <div class="invalid-feedback">
                        <?php echo form_error('resume') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" value="<?php echo $biodata->nama ?>" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="nama" placeholder="Nama" name="nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <input type="text" value="<?php echo $biodata->jk ?>" class="form-control <?php echo form_error('jk') ? 'is-invalid':'' ?>" id="resume" placeholder="Jenis Kelamin" name="jk">
                    <div class="invalid-feedback">
                        <?php echo form_error('jk') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <input type="text" value="<?php echo $biodata->resume ?>" class="form-control <?php echo form_error('ttl') ? 'is-invalid':'' ?>" id="ttl" placeholder="Tempat Tanggal Lahir" name="ttl">
                    <div class="invalid-feedback">
                        <?php echo form_error('ttl') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" value="<?php echo $biodata->agama ?>" class="form-control <?php echo form_error('agama') ? 'is-invalid':'' ?>" id="agama" placeholder="Agama" name="agama">
                    <div class="invalid-feedback">
                        <?php echo form_error('agama') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" value="<?php echo $biodata->alamat ?>" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" placeholder="Alamat" name="alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" value="<?php echo $biodata->email ?>" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="Email" name="email">
                    <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="wa">Whatsapp</label>
                    <input value="<?php echo $biodata->wa ?>" type="text" class="form-control <?php echo form_error('wa') ? 'is-invalid':'' ?>" id="wa" placeholder="Whatsapp" name="wa">
                    <div class="invalid-feedback">
                        <?php echo form_error('wa') ?>
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
