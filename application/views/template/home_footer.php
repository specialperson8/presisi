<!-- Start Footer Area -->
<footer class="footer-top-area-three pt-100 pb-70">
    <div class="container">
        <?php foreach ($contact as $ct) : ?>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <img src="<?= base_url('front-end/assets/img/contact/') . $ct['image']; ?>" alt="Image">

                        <ul class="social-wrap">

                            <li>
                                <a href="<?= $ct['ig'] ?>" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $ct['fb'] ?>" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $ct['yt'] ?>" target="_blank">
                                    <i class="bx bxl-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Contact Us</h3>

                        <ul class="address">
                            <li>
                                <i class="flaticon-pin"></i>
                                <?= $ct['alamat'] ?>
                            </li>

                            <li>
                                <i class="flaticon-email-1"></i>
                                <a href="mailto:<?= $ct['email'] ?>">
                                    <?= $ct['email'] ?>
                                </a>
                            </li>

                            <li>
                                <i class="flaticon-phone-call"></i>
                                <a href="<?= $ct['wa'] ?>">
                                    082142470106
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Additional Links</h3>

                        <ul class="additional-link">
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Latest Videos</a>
                            </li>
                            <li>
                                <a href="#">Team</a>
                            </li>
                            <li>
                                <a href="#">Help (FAQ)</a>
                            </li>
                            <li>
                                <a href="#">Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.6629293303013!2d112.69996341474678!3d-7.502413694588516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e1d35dcbb81f%3A0xde50eb07ca06857c!2sPresisi%20Printing!5e0!3m2!1sid!2sid!4v1679046131233!5m2!1sid!2sid" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        <?php endforeach ?>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Footer Bottom Area -->
<footer class="footer-bottom-area three">
    <div class="container">
        <div class="copyright-wrap">
            <p>Copyright @2023 PRESISIPRINTING. Designed By <a href="https://github.com/specialperson8?tab=repositories" target="blank">KAFTAPUS
                    SERIGALA ASIA</a></p>
        </div>
    </div>
</footer>
<!-- End Footer Bottom Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-chevrons-up'></i>
    <i class='bx bx-chevrons-up'></i>
</div>
<!-- End Go Top Area -->


<!-- Jquery-3.5.1.Slim.Min.JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery-3.5.1.slim.min.js"></script>
<!-- Popper JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/bootstrap.min.js"></script>
<!-- Meanmenu JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.meanmenu.js"></script>
<!-- Wow JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/wow.min.js"></script>
<!-- Owl Carousel JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/owl.carousel.js"></script>
<!-- Carousel Thumbs JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/carousel-thumbs.js"></script>
<!-- Owl Magnific JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Select JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.nice-select.min.js"></script>
<!-- Parallax JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/parallax.min.js"></script>
<!-- Mixitup JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.mixitup.min.js"></script>
<!-- Appear JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.appear.js"></script>
<!-- Odometer JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/odometer.min.js"></script>
<!-- Form Validator JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/contact-form-script.js"></script>
<!-- Ajaxchimp JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Custom JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/custom.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
</body>

<!-- Mirrored from templates.envytheme.com/vidnext/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2020 14:59:55 GMT -->

</html>