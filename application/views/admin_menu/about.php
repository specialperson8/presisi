<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>


  <a href="" class="btn btn-dark btn-sm mb-3 " data-toggle="modal" data-target="#tambahaboutModal">Tambah About</a>
  <?= $this->session->flashdata('pesan'); ?>
  <!-- Collapsable Card Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data About</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Gambar</th>
              <th>Header Bio</th>
              <th>Motto</th>
              <th>Detail Bio</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <p hidden><?= $nomor = 1; ?></p>
            <?php foreach ($about as $a) :  ?>
              <tr>
                <td><img class="img-thumbnail" src="<?= base_url('front-end/assets/img/about-grid/') . $a['image']; ?>" width="300" alt="">
                </td>

                <td><?= $a['hb']; ?></td>
                <td><?= $a['motto']; ?></td>
                <td><?= $a['detail_bio']; ?></td>


                <td>
                  <a href="<?= base_url('admin_menu/edit_about/') . $a['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                  <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data');" href="<?= base_url('admin_menu/hapus_about/') . $a['id']; ?>">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<div class="modal fade" id="tambahaboutModal" tabindex="-1" role="dialog" aria-labelledby="tambahaboutModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahaboutModal">Tambah About</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?= base_url('admin_menu/about'); ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group mb-3">
            <input type="text" class="form-control" id="hb" name="hb" placeholder="Header Bio">
          </div>

          <div class="form-group mb-3">
            <input type="text" class="form-control" id="motto" name="motto" placeholder="Motto">
          </div>

          <div class="form-group mb-3">
            <input type="text" class="form-control" id="detail_bio" name="detail_bio" placeholder="Detail Bio">
          </div>

          <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image" placeholder="Image">
            <label for="image" class="custom-file-label"></label>
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