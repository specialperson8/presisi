<!-- Start Page Title Area -->
<div class="page-title-area bg-5">
    <div class="container">
        <div class="page-title-content">
            <h2>Blog Details</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>

                <li class="active">Blog Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<div class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-wrap text-justify">
                    <div class="blog-top-content-wrap">
                        <img src="<?= base_url('front-end/assets/img/blog/') . $blog['image'] ?> " alt="Image">

                        <ul class="post-details">
                            <li>
                                <i class="bx bx-user"></i>
                                <?= $blog['created_by'] ?>
                            </li>
                            <li>
                                <i class="bx bx-calendar"></i>
                                <?= date('d F Y', $blog['created_at']); ?>
                            </li>
                            <li>
                                <i class="bx bx-comment"></i>
                                No Comments
                            </li>
                        </ul>

                        <h3><?= $blog['judul'] ?></h3>

                        <p><?= $blog['isi_blog'] ?></p>
                    </div>

                    <div class="tags-and-shear-wrap">
                        <div class="row">
                            <div class="col-lg-6 col-md-7">
                                <ul class="tag-list">
                                    <li>
                                        <span>Tags:</span>
                                    </li>
                                    <li>
                                        <a href="#">Actir</a>
                                    </li>
                                    <li>
                                        <a href="#">Cinema</a>
                                    </li>
                                    <li>
                                        <a href="#">Director</a>
                                    </li>
                                    <li>
                                        <a href="#">Production</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Details Area -->