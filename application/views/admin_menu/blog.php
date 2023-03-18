<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>


    <a href="" class="btn btn-dark btn-sm mb-3 " data-toggle="modal" data-target="#tambahblogModal">Tambah Blog</a>
    <?= $this->session->flashdata('pesan'); ?>
    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Blog</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Judul</th>
                            <th>Slug</th>
                            <th>Isi Blog</th>
                            <th>Created By</th>
                            <th>Created At</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <p hidden><?= $nomor = 1; ?></p>
                        <?php foreach ($blog as $bl) :  ?>
                            <tr>
                                <td><img class="img-thumbnail" src="<?= base_url('front-end/assets/img/blog/') . $bl['image']; ?>" width="300" alt="">
                                </td>
                                <td><?= $bl['judul']; ?></td>
                                <td><?= $bl['slug']; ?> </td>
                                <td><?= $bl['isi_blog']; ?></td>
                                <td><?= $bl['created_by']; ?> </td>
                                <td><?= $bl['created_at']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin_menu/edit_blog/') . $bl['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data');" href="<?= base_url('admin_menu/hapus_blog/') . $bl['id']; ?>">Hapus</a>
                                    <a href="<?= base_url('admin_menu/detail_blog/') . $bl['id'];  ?>" class="btn btn-sm btn-info">Detail</a>
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

<!--blog modal-->
<div class="modal fade" id="tambahblogModal" tabindex="-1" role="dialog" aria-labelledby="tambahblogModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahblogModal">Tambah Blog</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/blog'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Created By">
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="isi_blog" id="editor" class="form-control" cols="30" rows="10"></textarea>
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" placeholder="Image">
                        <label for="image" class="custom-file-label">Gambar</label>
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