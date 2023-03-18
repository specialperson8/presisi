
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Menu Management</h1>
<?= $this->session->flashdata('pesan'); ?>

        <a href="" class="btn btn-dark btn-sm mb-3" data-toggle="modal" data-target="#tambahmenuModal">Tambah Menu</a>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Menu</th>
      <th scope="col">Icon</th>
      <th scope="col">URL</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   <p hidden> <?= $nomor = 1; ?></p> 
  <?php foreach ($admin_menu as $am) : ?>
    <tr>
      <th scope="row"><?= $nomor++; ?></th>
      <td><?= $am['nama']; ?></td>
      <td><?= $am['icon']; ?></td>
      <td><?= $am['url']; ?></td>
      <td>
        <a class="btn btn-warning btn-sm" href="<?= base_url('admin_menu/edit/') . $am['id']; ?>">Edit</a>
        <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data');"  href="<?= base_url('admin_menu/hapus/') . $am['id']; ?>">Hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

       <!--Modal-->
  <div class="modal fade" id="tambahmenuModal" tabindex="-1" role="dialog" aria-labelledby="tambahmenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahmenuModal">Menu Management</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?= base_url('admin_menu/index'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-group mb-3">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Menu">
        </div>

        <div class="form-group mb-3">
          <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon">
        </div>

        <div class="form-group mb-3">
          <input type="text" class="form-control" id="url" name="url" placeholder="URL">
        </div>
      </div>
      

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
        </form>
      </div>
    </div>
  </div>
