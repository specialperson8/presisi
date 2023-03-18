<!-- Start Page Title Area -->
<div class="page-title-area bg-19">
    <div class="container">
        <div class="page-title-content">
            <h2>Hasil Produk Presisi Printing</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>

                <li class="active">Portfolio</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Portfolio Area -->
<section class="portfolio-area ptb-100">
    <div class="container">
        <div class="portfolio-wraps">
            <div class="shorting-menu">
                <button class="filter" data-filter="all">
                    All
                </button>

            </div>

            <div class="shorting">
                <div class="row">
                    <?php foreach($produk as $p) : ?>
                    <div class="col-3">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-primary"><?= $p['judul'] ?></h6>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseCardExample">
                                <div class="card-body">
                                    <img src="<?= base_url('front-end/assets/img/produk/') . $p ['image']; ?>"
                                        class="img-thumbnail" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <!-- /.container-fluid -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Area -->