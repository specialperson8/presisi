<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a href="<?= base_url('admin_menu/blog'); ?>" class="btn btn-sm btn-warning">Kembali</a>
    <br>

    <?= $this->session->flashdata('pesan'); ?>
    <!-- Collapsable Card Example -->
    <br>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
            aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary"><?= $blog['judul']; ?></h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
                <img src="<?= base_url('front-end/assets/img/blog/') . $blog['image']; ?>" class="img-thumbnail" alt=""
                    width="300">
                <br>
                <h4><?= $blog['slug']; ?></h4>
                <h4><?= $blog['isi_blog']; ?></h4>
                <h4><?= $blog['created_by']; ?></h4>
                <h4><?= $blog['created_at']; ?></h4>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->