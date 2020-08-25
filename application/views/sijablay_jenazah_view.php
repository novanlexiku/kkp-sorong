<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Page Title -->
    <title>SIJABLAY</title>

    <!-- Page header -->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('theme/css/style.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('theme/images/' . $icon); ?>">

</head>

<body class="content-animate">

    <!-- PRELOADER
		==================================================-->
    <div class="page-loader">
        <div class="loader-area"></div>
        <div class="loader font-face1">loading...
        </div>
    </div>

    <!-- PAGE
		==================================================-->
    <div id="top" class="page">

        <!-- Navigation panel
			================================================== -->
        <?php echo $header; ?>
        <!-- End Navigation panel -->

        <!-- Main Content
			==================================================-->
        <main class="cd-main-content mt-100">



            <!-- SECTION ABOUT
				================================================== 	-->
            <section class="page-section small-section">
                <div class="container relative">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!-- SECTION BLOG ITEM
								================================================== -->
                            <div class="blog-item clearfix">


                                <!--POST LEAVE COMMENT-->
                                <div class="comments-heading text-center mb-30">
                                    <hgroup>
                                        <h2 class="font-face1 section-heading">Sistem Penilaian Berbasis Layanan di Kantor KKP Kelas III Sorong</h2>
                                    </hgroup>
                                </div>
                                <?php echo $this->session->flashdata('msg'); ?>
                                <form method="post" action="<?php echo site_url('sijablay/send6'); ?>" role="form" class="form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="full_width" placeholder="Name *" maxlength="100" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="full_width" placeholder="Email *" maxlength="100" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="jenis-kelamin" class="full_width" placeholder="Jenis Kelamin *" class="form-control" maxlength="100" required="">
                                                    <option value="">Jenis Kelamin *</option>
                                                    <option value="Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="usia" class="full_width" placeholder="Usia *" maxlength="100" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="alamat" class="full_width" placeholder="Alamat *" maxlength="100" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="nohp" class="full_width" placeholder="No.Handphone *" maxlength="100" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="identitas" class="full_width" placeholder="Identitas Terlapor *" maxlength="100" required="">
                                            </div>
                                        </div>
                                        <div class="comments-heading text-center mb-30">
                                            <hgroup>
                                                <h2 class="font-face1 section-heading">Kuesioner</h2>
                                                <p>Terlapor diwajibkan mengisi kuesioner dibawah ini</p>
                                            </hgroup>
                                        </div>
                                        <!-- Start Kuesioner -->
                                        <div class="accordion" id="accordionExample">


                                            <div class="card">
                                                <div class="card-header" id="headingZero">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                                                            Kuesioner Pelayanan
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner Pilihan-->
                                                        <div class="card">
                                                            <div class="card-header" id="headingEight">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                                        Pelayanan Angkut Jenazah
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <!-- Start Kuesioner 8 -->
                                                                    - Izin angkut jenazah telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner8pertanyaan1" id="exampleRadios94" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner8pertanyaan1" id="exampleRadios95" value="4">
                                                                        <label class="form-check-label" for="exampleRadios95">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner8pertanyaan1" id="exampleRadios96" value="3">
                                                                        <label class="form-check-label" for="exampleRadios96">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner8pertanyaan1" id="exampleRadios97" value="2">
                                                                        <label class="form-check-label" for="exampleRadios97">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner8pertanyaan1" id="exampleRadios98" value="1">
                                                                        <label class="form-check-label" for="exampleRadios98">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <!-- End kuesioner 8 -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- End kuesioner Pilihan -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Kuesioner -->
                                        <br>

                                        <div class="col-md-12 center-xs">
                                            <button type="submit" class="btn bg-black white-color">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!--END POST LEAVE COMMENT-->

                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION SUBSCRIBE
				================================================== -->
            <section class="page-section subscribe-section small-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="form-subscribe mb-50 mb-sm-0">
                                <div class="col-sm-6 mb-sm-40">
                                    <h2 class="heading5 mt-0 font-face1 white-color fw700 mb-0">KANTOR KESEHATAN PELABUHAN KELAS III SORONG</h2>
                                    <br />
                                    <div class="media">
                                        <div class="media-left"><i class="icons fa fa-map-marker"></i></div>
                                        <div class="media-body">
                                            Jalan Jendral Sudirman Lorong Marcopolo No.1 , Kelurahan Malawei, Sorong Manoi, Kota Sorong, Papua Barat. 98412 </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left"><i class="icons fa fa-phone"></i></div>
                                        <div class="media-body">
                                            Phone : (0951) 334412 </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left"><i class="icons fa fa-envelope"></i></div>
                                        <div class="media-body">
                                            Email : kespel.sorong@gmail.com</div>
                                    </div>
                                    <br />
                                </div>
                                <div class="col-sm-6">
                                    <form class="form-inline" action="<?php echo site_url('subscribe'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="url" value="<?php echo site_url('contact'); ?>" required>
                                            <input type="email" name="email" required placeholder="Your Email..." class="form-control">
                                            <button type="submit" class="btn btn-subscribe">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div><?php echo $this->session->flashdata('message'); ?></div>
                        </div>
                    </div>
                </div>
            </section>


            <hr class="nomargin nopadding" />

            <!-- FOOTER
				================================================== -->
            <?php echo $footer; ?>

        </main>

    </div>

    <!-- Modal Search-->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="<?php echo site_url('search'); ?>" method="GET">
                        <div class="input-group">
                            <input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT
		==================================================-->
    <script src="<?php echo base_url('theme/js/jquery-2.2.4.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.scrollTo.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.localScroll.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.viewport.mini.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.sticky.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.fitvids.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.parallax-1.1.3.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/isotope.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/masonry.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jquery.counterup.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/slick.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/wow.min.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/script.js') ?>"></script>
    <script src="<?php echo base_url('theme/js/jssocials.min.js') ?>"></script>

</body>

</html>