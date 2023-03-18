<!-- Start Page Title Area -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>About Us</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>

                <li class="active">About</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start About Area Two -->
<section class="about-area-two bio-data ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <?php foreach ($about as $a) : ?>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2><?= $a['hb']; ?></h2>
                    <h3><?= $a['motto']; ?></h3>

                    <p><?= $a['detail_bio']; ?></p>
                </div>
            </div>
            <?php endforeach ?>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 p-0">
                        <div class="about-grid-img">
                            <img src="<?= base_url('front-end/'); ?>assets/img/about-grid/1.jpg" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 p-0">
                        <div class="about-grid-img">
                            <img src="<?= base_url('front-end/'); ?>assets/img/about-grid/2.jpg" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 p-0">
                        <div class="about-grid-img r-sm mb-0">
                            <img src="<?= base_url('front-end/'); ?>assets/img/about-grid/3.jpg" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 p-0">
                        <div class="about-grid-img mb-0">
                            <img src="<?= base_url('front-end/'); ?>assets/img/about-grid/4.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area Two -->


<!-- Start What We Do Area -->
<section class="our-production-area bg-color pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Alasan Mengapa Harus Order Di Presisi Printing?</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="what-we-do-item">
                    <i class="bx bx-building-house"></i>
                    <h3>In-House Production</h3>
                    <p>Semua produksi yang kami kerjakan menggunakan mesin yang kami miliki sendiri, sehingga
                        tidak ada keterkaitan dengan pihak ketiga dan dapat menyelesaikan order anda dengan
                        cepat, efisien dan terkontrol.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="what-we-do-item">
                    <i class="bx bx-box"></i>
                    <h3>Full Order Ready</h3>
                    <p>Jika Anda membutuhkan produk siap pakai?
                        <br>
                        Serahkan kepada kami. Kami kerjakan dengan tenaga profesional agar produk siap pakai
                        tanpa ribet atur produksi. Kecepatan, Ketepatan dan Kerapihan sudah pasti teruji dari
                        produksi kami..
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="what-we-do-item">
                    <i class="flaticon-advertising"></i>
                    <h3>Alat Produksi Berkualitas</h3>
                    <p>Dengan alat produksi yang berkualitas bisa menjamin kualitas produksi dan kecepatan
                        produksi pesanan anda..</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="what-we-do-item">
                    <i class="flaticon-talk-show"></i>
                    <h3>Tv Shows</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipiscing elit, sed do eiusmod tempor incididunt labore
                        dolore magna.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="what-we-do-item">
                    <i class="flaticon-edit-tools"></i>
                    <h3>Conversion</h3>
                    <p>Dengan Menggunakan Mesin Roll To Roll Press dengan lebar max 1.8 m menjadikan hasil press
                        yang stabil dan merata. Jika anda membutuhkan waktu pengerjaan yang cepat untuk jasa
                        sublim, anda bisa memilih jasa print saja, atau jasa print dan print sublim saja bahkan
                        jasa press sublim saja..</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="what-we-do-item">
                    <i class="flaticon-music"></i>
                    <h3>Music Videos</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipiscing elit, sed do eiusmod tempor incididunt labore
                        dolore magna.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End What We Do Area -->

<!-- Start Team Area Two -->
<section class="team-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Data Karyawan</h2>
        </div>

        <div class="row">
            <?php foreach ($karyawan as $kry) : ?>
            <div class="col-lg-4 col-sm-6">
                <div class="ingle-team">
                    <div class="team-img">
                        <img src="<?= base_url('front-end/assets/img/karyawan/') . $kry['image'] ?>" alt="Image">

                        <ul class="social">
                            <li>
                                <a href="<?= $kry['wa'] ?>" target="_blank">
                                    <i class="bx bxl-whatsapp"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $kry['ig'] ?>" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $kry['fb'] ?>" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3><?= $kry['nm_kry']  ?></h3>
                        <span><?= $kry['jbt']  ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Team Area Two -->


<!-- Start Partner Area -->
<div class="partner-area-two bg-color ptb-100">
    <div class="container">
        <div class="partner-wrap owl-theme owl-carousel">
            <div class="partner-item">
                <a href="#">
                    <img src="<?= base_url('front-end/'); ?>assets/img/partner-logo/ALAIKA.png" alt="Image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="<?= base_url('front-end/'); ?>assets/img/partner-logo/logo-bps.png" alt="Image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="<?= base_url('front-end/'); ?>assets/img/partner-logo/logohalina.png" alt="Image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="<?= base_url('front-end/'); ?>assets/img/partner-logo/permata.png" alt="Image">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->