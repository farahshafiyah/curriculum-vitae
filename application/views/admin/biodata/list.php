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

<section class ="content">
          <div class="container-fluid">
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Data Biodata </h3>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Tambah Biodata
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Biodata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?= base_url('admin/biodata/add')?>" method="post">
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
                          <label>Resume</label>
                          <input type="text" name="resume" class="form-control" placeholder="Resume . ." value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-grup">
                          <label>Nama</label>
                          <input type="text" name="nama" class="form-control" placeholder="Nama . ." value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-grup">
                          <label>Jenis Kelamin</label>
                          <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin . ." value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-grup">
                          <label>Tempat Tanggal Lahir</label>
                          <input type="text" name="ttl" class="form-control" placeholder="Tempat Tanggal Lahir . ." value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-grup">
                          <label>Agama</label>
                          <input type="text" name="agama" class="form-control" placeholder="Agama . ." value="">
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
                          <label>Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Email . ." value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-grup">
                          <label>WhatsApp</label>
                          <input type="text" name="wa" class="form-control" placeholder="Whatsapp . ." value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-grup">
                          <label>Foto</label>
                          <input type="text" name="foto" class="form-control" placeholder="Foto . ." value="">
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
            <!-- /.card-header -->
            <div class="card-body">
            <table id="exemple1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th style="width: 10%;">No</th>
                    <th style="width: 30%;">Resume</th>
                    <th style="width: 20%;">Nama</th>
                    <th style="width: 10%;">Jenis Kelamin</th>
                    <th style="width: 20%;">TTL</th>
                    <th style="width: 20%;">Alamat</th>
                    <th style="width: 10%;">Agama</th>
                    <th style="width: 10%;">E-mail</th>
                    <th style="width: 10%;">WhatsApp</th>
                    <th style="width: 10%;">Foto</th>
                    <th style="width: 12%;">Action</th>
                  </tr>
              </thead>
            <tbody>
            <?php foreach ($biodata as $data){ ?>
                  <tr>
                    <td><?php echo $data->id?></td>
                    <td><?php echo $data->resume?></td>
                    <td><?php echo $data->nama?></td>
                    <td><?php echo $data->jk?></td>
                    <td><?php echo $data->ttl?></td>
                    <td><?php echo $data->alamat?></td>
                    <td><?php echo $data->agama?></td>
                    <td><?php echo $data->email?></td>
                    <td><?php echo $data->wa?></td>
                    <td><?php echo $data->foto?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo site_url('admin/biodata/edit/'.$data->id)?>">
                          <i class="fa fa-edit"></i>
                        </a>

                        </a>
              <a type="button" rel="tooltip" title="Hapus" class="btn btn-danger" onclick="deleteConfirm('<?php echo site_url('admin/biodata/delete/'.$data->id)?>')">
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
            <?php
            }
            ?>
            </tfoot>
          </table>
          </div>
          <!-- /.card-body -->
          </div>
        </div>  <!-- /.container-fluid -->
      </section>
        <!-- /.content -->
  <!-- MODAL -->
        
        </div>    
      <!-- Sticky Footer -->
<?php
// $this->load->view("admin/partials/footer.php")
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
// $this->load->view("admin/partials/modal.php")
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
