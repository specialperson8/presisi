<!--<section class="banner-area jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-video">
                            <a href="https://www.youtube.com/watch?v=dkTYpP6eec0" class="popup-youtube">
                                <i class="flaticon-play"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-text">
                            <h1>Be The Hero Of Your Own Story</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-img">
        <img src="assets/img/banner/2.jpg" alt="Image">
    </div>
</section>-->

<!-- Start Newsletter Modal -->
<!--<div class="modal-newsletter-area">
    <div class="modal fade" id="exampleModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="bx bx-x"></i>
                </button>

                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-sm-5 p-0">
                            <div class="newsletter-img">
                                <img src="<?= base_url('front-end/'); ?>assets/img/newsletter-img.jpg" alt="Image">
                            </div>
                        </div>

                        <div class="col-lg-7 col-sm-7 pl-0">
                            <div class="modal-newsletter-wrap">
                                <h3>Subscribe Youtube Presisi Printing</h3>
                                <a href="https://youtu.be/hdTHofZh6zc" class="youtube"><i
                                        class="bx bxl-youtube"></i></a>

                                <form class="newsletter-form" data-toggle="validator">
                                    <input type="email" class="form-control" placeholder="Enter email address"
                                        name="EMAIL" required autocomplete="off">

                                    

                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Do Not Show This Popup Again
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- End Newsletter Modal -->

<!-- Start Banner Area -->
<?php foreach ($banner_img as $bi) : ?>
    <section class="banner-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-6">
                            <div class="banner-text">
                                <h1><?= $bi['text']; ?></h1>
                                <h3 style="color: white;">Solusi Kebutuhan Printing Tekstil Anda</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" banner-img">
            <img src="<?= base_url('front-end/assets/img/banner/') . $bi['image']; ?>" alt="Image">
        </div>
    </section>
<?php endforeach; ?>
<!-- End Banner Area -->

<!-- Start About Area Two -->
<section class="about-area-two three bg-color-two ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <?php foreach ($about as $a) : ?>
                <div class="col-lg-6">
                    <div class="about-content">
                        <span><?= $a['hb']  ?></span>
                        <h2><?= $a['motto']  ?></h2>
                        <p><?= $a['detail_bio']  ?></p>

                        <a href="<?= base_url('home/about'); ?>" class="default-btn three">
                            Learn More
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 p-0">
                        <div class="about-grid-img">
                            <img src="<?= base_url('front-end/assets/img/about-grid/') . $a['image']; ?>" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 p-0">
                        <div class="about-grid-img">
                            <img src="<?= base_url('front-end/'); ?>assets/img/about-grid/gallery6.jpeg" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 p-0">
                        <div class="about-grid-img m-rs mb-0">
                            <img src="<?= base_url('front-end/'); ?>assets/img/about-grid/9.jpg" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 p-0">
                        <div class="about-grid-img mb-0">
                            <img src="<?= base_url('front-end/'); ?>assets/img/about-grid/gallery2.jpeg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area Two -->

<!-- Start Video Created Area -->
<div class="video-created-area-three bg-color-two pb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3 p-0">
                <div class="video-img">
                    <img src="<?= base_url('front-end/'); ?>assets/img/video-created/gallery6.jpeg" alt="Image">

                    <h3>Video Created By Presisi Printing</h3>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 p-0">
                <div class="video-wrap">
                    <img src="<?= base_url('front-end/'); ?>assets/img/video-created/hero-presisi.jpg" alt="Image">

                    <a href="https://youtu.be/hdTHofZh6zc" class="glightbox play-btn mb-4">
                        <i class="flaticon-play"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 p-0">
                <div class="video-img">
                    <img src="<?= base_url('front-end/'); ?>assets/img/video-created/houseing.jpg" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Video Created Area -->




<!-- Start Latest Trailer Area Two -->
<section class="latest-trailer-three ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="section-title white-title">
            <h3 style="color: white;">Gallery Produk Presisi Printing</h3>
        </div>

        <div class="latest-trailer-wrap-two owl-theme owl-carousel">
            <?php foreach ($produk as $p) : ?>
                <div class="latest-trailer-item">
                    <img src="<?= base_url('front-end/assets/img/produk/') . $p['image']; ?>" alt="Image">

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Latest Trailer Area Two -->

<!-- Start What We Do Area -->
<section class="what-we-do-area three bg-color-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <h2>Alasan Mengapa Harus Order Di Presisi Printing?</h2>

                    <div class="brand-wrap">
                        <div class="row">


                            <div class="col-lg-4 col-sm-6">
                                <div class="brand">
                                    <a href="#">
                                        <img src="<?= base_url('front-end/'); ?>assets/img/brand/2.png" alt="Image">

                                        <div class="white-logo">
                                            <img src="<?= base_url('front-end/'); ?>assets/img/brand/5.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="brand">
                                    <a href="#">
                                        <img src="<?= base_url('front-end/'); ?>assets/img/brand/3.png" alt="Image">

                                        <div class="white-logo">
                                            <img src="<?= base_url('front-end/'); ?>assets/img/brand/6.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="what-we-do-item mt-30">
                            <i class="bx bx-building-house"></i>
                            <h3>In-House Production</h3>
                            <p>Semua produksi yang kami kerjakan menggunakan mesin yang kami miliki sendiri, sehingga
                                tidak ada keterkaitan dengan pihak ketiga dan dapat menyelesaikan order anda dengan
                                cepat, efisien dan terkontrol.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
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

                    <div class="col-lg-6 col-sm-6">
                        <div class="what-we-do-item">
                            <i class="flaticon-advertising"></i>
                            <h3>Alat Produksi Berkualitas</h3>
                            <p>Dengan alat produksi yang berkualitas bisa menjamin kualitas produksi dan kecepatan
                                produksi pesanan anda..</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="what-we-do-item mt-mince-30">
                            <i class="flaticon-edit-tools"></i>
                            <h3>Conversion</h3>
                            <p>Dengan Menggunakan Mesin Roll To Roll Press dengan lebar max 1.8 m menjadikan hasil press
                                yang stabil dan merata. Jika anda membutuhkan waktu pengerjaan yang cepat untuk jasa
                                sublim, anda bisa memilih jasa print saja, atau jasa print dan print sublim saja bahkan
                                jasa press sublim saja..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End What We Do Area -->

<!-- Start Team Area Two -->
<section class="team-area-three pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="section-title white-title">
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

<!-- Start Production Process Area Two -->

<!-- Start Blog Area -->
<section class="blog-area-three bg-color-two pt-100 pb-70">
    <div class="container">
        <div class="section-title white-title">
            <span class="top-title">News Feeds</span>
            <h2>Blog Media Dan Berita</h2>
        </div>

        <div class="row">
            <?php foreach ($blog as $bl) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <a href="<?= base_url('home/blog_detail'); ?>">
                            <img src="<?= base_url('front-end/assets/img/blog/') . $bl['image']; ?>" alt="Image">
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <i class="flaticon-user"></i>
                                    <a href="#"><?= $bl['created_by'] ?></a>
                                </li>
                                <li>
                                    <i class="flaticon-calendar"></i>
                                    <?= date('d F Y', $bl['created_at']); ?>
                                </li>
                            </ul>

                            <a href="<?= base_url('home/blog_detail/') . $bl['slug'] ?>">
                                <h3><?= $bl['judul'] ?></h3>
                            </a>

                            <p><?= substr(strip_tags($bl['isi_blog']), 0, 200); ?></p>

                            <a href="<?= base_url('home/blog_detail/') . $bl['slug'] ?>" class="read-more">
                                Baca Selanjutnya
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- End Blog Area -->