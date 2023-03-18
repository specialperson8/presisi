
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

       
            <a href="" class="btn btn-dark btn-sm mb-3 " data-toggle="modal" data-target="#tambahprodukModal">Tambah Produk</a>
            <?=  $this->session->flashdata('pesan'); ?> 
         <!-- Collapsable Card Example -->
         <div class="row">
         <?php foreach($produk as $p) : ?>
            <div class="col-3">
         <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $p['judul'] ?></h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                  <img src="<?= base_url('front-end/assets/img/produk/') . $p ['image']; ?>" class="img-thumbnail" alt="">
                </div>
              </div>
        </div>
        </div> 
        <?php endforeach ?>
        <!-- /.container-fluid -->
        </div>

      </div>
      <!-- End of Main Content -->


      <div class="modal fade" id="tambahprodukModal" tabindex="-1" role="dialog" aria-labelledby="tambahprodukModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahprodukModal">Tambah Produk</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?= base_url('admin_menu/produk'); ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group mb-3">
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
        </div>

        <div class="custom-file">
          <input type="file" class="custom-file-input" id="image" name="image" placeholder="Image">
          <label for="image" class="custom-file-label">Foto Produk</label>
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
