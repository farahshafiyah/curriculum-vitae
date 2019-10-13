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

        <!-- Modall -->
       <section class="content">
        <div class="container-fluid">
          <div class="card">
          <div class="card-header">

            <h3 class="card-title">Data Contact</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Tambah Contact
            </button>
          </div>

          <!-- card header -->
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th style="width: 20%;">Id</th>
            <th style="width: 20%;">Alamat</th>
            <th style="width: 20%;">Telepon</th>
            <th style="width: 20%;">Hp</th>
            <th style="width: 20%;">Email</th>
            <th style="width: 20%;">Action</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach($contact as $data) {?>
            <tr>
            <td><?php echo $data->id ?></td>
            <td><?php echo $data->alamat ?></td>
            <td><?php echo $data->telp ?></td>
            <td><?php echo $data->hp ?></td>
            <td><?php echo $data->email ?></td>
            <td>
              <a class="btn btn-warning" href="<?php echo site_url('admin/contact/edit/'.$data->id)?>">
                <i class="fa fa-edit"></i>
              </a>

              </a>
              <a type="button" rel="tooltip" title="Hapus" class="btn btn-danger" onclick="deleteConfirm('<?php echo site_url('admin/contact/delete/'.$data->id)?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                    </a>
                   </td>
                    <!-- MODAL DELETE -->
                    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-hidden="true" style="top:-100px|important;">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="hapusLabel">Hapus Info</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p style="text-align: center;">Apakah anda ingin menghapus data ini?</p>
                        <div class="modal-footer">
                          <a id="btn-delete">
                            <button type="submit" class="btn btn-danger btn-fill pull-left" style="margin-left: 40%;">Hapus</button>
                          </a>
                        </div>
                      </div>
                    </div>
                   </td>

            </td>
            </td>
            </tr>
            <?php } ?>
            </tfoot>
          </table>
          </div>

          <!-- card-body -->
          </div>
        <!-- container fluid   -->
        </div> 
      </section>
      <!-- content -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Contact</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?= base_url('admin/contact/add')?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>Id</label>
                    <input type="text" name="id" class="form-control" placeholder="Id . ." value="">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat . ." value="">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>Telepon</label>
                    <input type="text" name="telp" class="form-control" placeholder="Telepon . ." value="">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>Hp</label>
                    <input type="text" name="hp" class="form-control" placeholder="Hp . ." value="">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email . ." value="">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div> 
          </div>
        </div>
      </div>


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

<script>
  function deleteConfirm(url)
    {
      $('#btn-delete').attr('href', url);
      $('#hapus').modal();
    }
</script>

</body>

</html>
