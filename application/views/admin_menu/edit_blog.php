<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row">
        <div class="col-8">
            <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('admin_menu/edit_blog/') . $blog['id']; ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?= $blog['id']; ?>">
                <div class="modal-body">


                    <div class="form-group row mb-3">
                        <div class="col-sm-2">Picture</div>
                        <div class="row">
                            <div class="col-sm-10">
                                <img src="<?= base_url('front-end/assets/img/blog/') . $blog['image']; ?>" class="img-thumbnail" width="150">
                                <!--   <input type="file" class="img-thumbnail" id="image" name="image"
                            value="">-->
                            </div>

                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                    <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $blog['judul']; ?>">
                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="slug" name="slug" value="<?= $blog['slug']; ?>">
                        <?= form_error('slug', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="isi_blog" name="isi_blog" value="<?= $blog['isi_blog']; ?>">
                        <?= form_error('isi_blog', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="created_by" name="created_by" value="<?= $blog['created_by']; ?>">
                        <?= form_error('created_by', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="created_at" name="created_at" value="<?= $blog['created_at']; ?>">
                        <?= form_error('created_at', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->