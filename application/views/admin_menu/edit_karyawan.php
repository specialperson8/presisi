<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row">
        <div class="col-8">
            <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('admin_menu/edit_karyawan/') . $karyawan['id']; ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?= $karyawan['id']; ?>">
                <div class="modal-body">


                    <div class="form-group row mb-3">
                        <div class="col-sm-2">Picture</div>
                        <div class="row">
                            <div class="col-sm-10">
                                <img src="<?= base_url('front-end/assets/img/karyawan/') . $karyawan['image']; ?>" class="img-thumbnail" width="150">
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
                        <input type="text" class="form-control" id="nm_kry" name="nm_kry" value="<?= $karyawan['nm_kry']; ?>">
                        <?= form_error('nm_kry', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="wa" name="wa" value="<?= $karyawan['wa']; ?>">
                        <?= form_error('wa', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="fb" name="fb" value="<?= $karyawan['fb']; ?>">
                        <?= form_error('fb', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="ig" name="ig" value="<?= $karyawan['ig']; ?>">
                        <?= form_error('ig', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="jbt" name="jbt" value="<?= $karyawan['jbt']; ?>">
                        <?= form_error('jbt', '<small class="text-danger pl-3">', '</small>'); ?>
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