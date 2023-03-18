<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>


    <a href="" class="btn btn-dark btn-sm mb-3 " data-toggle="modal" data-target="#tambahcontactModal">Tambah
        Contact</a>
    <?= $this->session->flashdata('pesan'); ?>
    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Contact</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Whatsapp</th>
                            <th>Instagram</th>
                            <th>Youtube</th>
                            <th>Facebook</th>
                            <th>Maps</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <p hidden><?= $nomor = 1; ?></p>
                        <?php foreach ($contact as $ct) :  ?>
                            <tr>
                                <td><img class="img-thumbnail" src="<?= base_url('front-end/assets/img/contact/') . $ct['image']; ?>" width="150" alt="">
                                </td>
                                <td><?= $ct['alamat']; ?></td>
                                <td><a href="<?= $ct['email']; ?>" class="btn btn-sm btn-danger" target="_blank">Gmail</a>
                                </td>
                                <td>
                                    <a href="<?= $ct['wa']; ?>" class="btn btn-sm btn-success" target="_blank">Whatsapp</a>
                                </td>
                                <td><a href="<?= $ct['ig']; ?>" class="btn btn-sm btn-warning" target="_blank">Instagram</a>
                                </td>
                                <td><a href="<?= $ct['yt']; ?>" class="btn btn-sm btn-danger" target="_blank">Youtube</a>
                                </td>
                                <td><a href="<?= $ct['fb']; ?>" class="btn btn-sm btn-primary" target="_blank">Facebook</a>
                                </td>
                                <td><?= $ct['maps']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin_menu/edit_contact/') . $ct['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data');" href="<?= base_url('admin_menu/hapus_blog/') . $ct['id']; ?>">Hapus</a>
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
<div class="modal fade" id="tambahcontactModal" tabindex="-1" role="dialog" aria-labelledby="tambahcontactModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahcontactModal">Tambah Contact</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= base_url('admin_menu/contact'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="wa" name="wa" placeholder="Whatsapp">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="ig" name="ig" placeholder="Instagram">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="yt" name="yt" placeholder="Youtube">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="fb" name="fb" placeholder="Facebook">
                    </div>

                    <div class="form-group mb-3">
                        <textarea name="maps" class="form-control" id="maps" cols="30" rows="10" placeholder="Maps"></textarea>
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