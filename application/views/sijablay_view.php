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
                                <form method="post" action="<?php echo site_url('sijablay/send'); ?>" role="form" class="form">
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
                                                <div class="card-header" id="headingA">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseA" aria-expanded="false" aria-controls="collapseA">
                                                            Persyaratan administrasi dan teknis dari pelayanan KKP
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseA" class="collapse" aria-labelledby="headingA" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner A -->
                                                        - Persyaratan administrasi dan teknis dari pelayanan KKP dapat diperoleh dan dipenuhi dengan mudah
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerApertanyaan1" id="exampleRadios1" value="4">
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerApertanyaan1" id="exampleRadios2" value="3">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerApertanyaan1" id="exampleRadios3" value="2">
                                                            <label class="form-check-label" for="exampleRadios3">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerApertanyaan1" id="exampleRadios4" value="1">
                                                            <label class="form-check-label" for="exampleRadios4">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <!-- End kuesioner A -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingB">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseB" aria-expanded="false" aria-controls="collapseB">
                                                            Sistem, mekanisme dan prosedur adalah tata cara pelayanan
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseB" class="collapse" aria-labelledby="headingB" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner B -->
                                                        - Tata cara pelayanan yang diberikan oleh petugas pelayanan diberikan secara jelas
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerBpertanyaan1" id="exampleRadios5" value="4">
                                                            <label class="form-check-label" for="exampleRadios5">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerBpertanyaan1" id="exampleRadios6" value="3">
                                                            <label class="form-check-label" for="exampleRadios6">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerBpertanyaan1" id="exampleRadios7" value="2">
                                                            <label class="form-check-label" for="exampleRadios7">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerBpertanyaan1" id="exampleRadios8" value="1">
                                                            <label class="form-check-label" for="exampleRadios8">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <!-- End kuesioner B -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingC">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseC" aria-expanded="false" aria-controls="collapseC">
                                                            Waktu penyelesaian
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseC" class="collapse" aria-labelledby="headingC" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner C -->
                                                        - Waktu yang dibutuhkan untuk mendapatkan pelayanan dan pelaksanaan adalah cepat
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerCpertanyaan1" id="exampleRadios9" value="4">
                                                            <label class="form-check-label" for="exampleRadios9">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerCpertanyaan1" id="exampleRadios10" value="3">
                                                            <label class="form-check-label" for="exampleRadios10">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerCpertanyaan1" id="exampleRadios11" value="2">
                                                            <label class="form-check-label" for="exampleRadios11">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerCpertanyaan1" id="exampleRadios12" value="1">
                                                            <label class="form-check-label" for="exampleRadios12">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <!-- End kuesioner C -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingD">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseD" aria-expanded="false" aria-controls="collapseD">
                                                            Biaya/Tarif
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseD" class="collapse" aria-labelledby="headingD" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner D -->
                                                        - Tidak ada biaya/tariff/Tip yang diberikan untuk mendapatkan pelayanan di KKP selain tarip sesuai ketentuan yang berlaku
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerDpertanyaan1" id="exampleRadios13" value="4">
                                                            <label class="form-check-label" for="exampleRadios13">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerDpertanyaan1" id="exampleRadios14" value="3">
                                                            <label class="form-check-label" for="exampleRadios14">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerDpertanyaan1" id="exampleRadios15" value="2">
                                                            <label class="form-check-label" for="exampleRadios15">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerDpertanyaan1" id="exampleRadios16" value="1">
                                                            <label class="form-check-label" for="exampleRadios16">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <!-- End kuesioner D -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingE">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapseE" type="button" data-toggle="collapse" data-target="#collapseE" aria-expanded="false" aria-controls="collapseE">
                                                            Produk Spesifikasi Jenis Pelayanan
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseE" class="collapse" aria-labelledby="headingE" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner E -->
                                                        - Aturan atau tata cara untuk mendapatkan pelayanan yang saudar/saudari butuhkan di KKP didapatkan informasinya dengan mudah
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerEpertanyaan1" id="exampleRadios17" value="4">
                                                            <label class="form-check-label" for="exampleRadios17">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerEpertanyaan1" id="exampleRadios18" value="3">
                                                            <label class="form-check-label" for="exampleRadios18">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerEpertanyaan1" id="exampleRadios19" value="2">
                                                            <label class="form-check-label" for="exampleRadios19">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerEpertanyaan1" id="exampleRadios20" value="1">
                                                            <label class="form-check-label" for="exampleRadios20">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <!-- End kuesioner E -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingF">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapseF" type="button" data-toggle="collapse" data-target="#collapseF" aria-expanded="false" aria-controls="collapseF">
                                                            Kompetensi Pelaksana
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseF" class="collapse" aria-labelledby="headingF" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner F -->
                                                        - Semua petuas KKP memiliki kemampuan dalam menjawab semua pertanyaan yang diajukan dengan jawaban yang baik dan memuaskan
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerFpertanyaan1" id="exampleRadios21" value="4">
                                                            <label class="form-check-label" for="exampleRadios21">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerFpertanyaan1" id="exampleRadios22" value="3">
                                                            <label class="form-check-label" for="exampleRadios22">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerFpertanyaan1" id="exampleRadios23" value="2">
                                                            <label class="form-check-label" for="exampleRadios23">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerFpertanyaan1" id="exampleRadios24" value="1">
                                                            <label class="form-check-label" for="exampleRadios24">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <!-- End kuesioner F -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingG">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapseG" type="button" data-toggle="collapse" data-target="#collapseG" aria-expanded="false" aria-controls="collapseG">
                                                            Perilaku Pelaksana
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseG" class="collapse" aria-labelledby="headingG" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner G -->
                                                        - Petugas KKP melayani tamu dengan ramah dan Petugas KKP pada saat melayani tamu terlihat rapih dalam berpakaiannya
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerGpertanyaan1" id="exampleRadios25" value="4">
                                                            <label class="form-check-label" for="exampleRadios25">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerGpertanyaan1" id="exampleRadios26" value="3">
                                                            <label class="form-check-label" for="exampleRadios26">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerGpertanyaan1" id="exampleRadios27" value="2">
                                                            <label class="form-check-label" for="exampleRadios27">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerGpertanyaan1" id="exampleRadios28" value="1">
                                                            <label class="form-check-label" for="exampleRadios28">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <br>
                                                        - Petugas KKP pada saat melayani tamu terlihat rapih dalam berpakaiannya
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerGpertanyaan2" id="exampleRadios29" value="4">
                                                            <label class="form-check-label" for="exampleRadios29">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerGpertanyaan2" id="exampleRadios30" value="3">
                                                            <label class="form-check-label" for="exampleRadios30">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerGpertanyaan2" id="exampleRadios31" value="2">
                                                            <label class="form-check-label" for="exampleRadios31">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerGpertanyaan2" id="exampleRadios32" value="1">
                                                            <label class="form-check-label" for="exampleRadios32">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <!-- End kuesioner G -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingH">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapseH" type="button" data-toggle="collapse" data-target="#collapseH" aria-expanded="false" aria-controls="collapseH">
                                                            Penanganan pengaduan, saran dan masukan
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseH" class="collapse" aria-labelledby="headingH" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner H -->
                                                        - Mudahnya mendapatkan ayanan penanganan pengaduan, saran dan masukan terhadap pelayanan publik di KKP
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerHpertanyaan1" id="exampleRadios33" value="4">
                                                            <label class="form-check-label" for="exampleRadios33">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerHpertanyaan1" id="exampleRadios34" value="3">
                                                            <label class="form-check-label" for="exampleRadios34">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerHpertanyaan1" id="exampleRadios35" value="2">
                                                            <label class="form-check-label" for="exampleRadios35">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerHpertanyaan1" id="exampleRadios36" value="1">
                                                            <label class="form-check-label" for="exampleRadios36">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <!-- End kuesioner H -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingI">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapseI" type="button" data-toggle="collapse" data-target="#collapseI" aria-expanded="false" aria-controls="collapseI">
                                                            Sarana
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseI" class="collapse" aria-labelledby="headingI" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner I -->
                                                        - Lengkapnya fasilitas yang dibutuhkan dan kenyamanan pada saat saudara/saudari menerima pelayanan di KKP (Ballpoint, ruang tunggu,Toilet, halaman parkir)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerIpertanyaan1" id="exampleRadios37" value="4">
                                                            <label class="form-check-label" for="exampleRadios37">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerIpertanyaan1" id="exampleRadios38" value="3">
                                                            <label class="form-check-label" for="exampleRadios38">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerIpertanyaan1" id="exampleRadios39" value="2">
                                                            <label class="form-check-label" for="exampleRadios39">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerIpertanyaan1" id="exampleRadios40" value="1">
                                                            <label class="form-check-label" for="exampleRadios40">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <br>
                                                        - Perjalanan ke KKP mudah dijangkau
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerIpertanyaan2" id="exampleRadios41" value="4">
                                                            <label class="form-check-label" for="exampleRadios41">
                                                                Sangat Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerIpertanyaan2" id="exampleRadios42" value="3">
                                                            <label class="form-check-label" for="exampleRadios42">
                                                                Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerIpertanyaan2" id="exampleRadios43" value="2">
                                                            <label class="form-check-label" for="exampleRadios43">
                                                                Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kuesionerIpertanyaan2" id="exampleRadios44" value="1">
                                                            <label class="form-check-label" for="exampleRadios44">
                                                                Sangat Tidak Setuju
                                                            </label>
                                                        </div>
                                                        <!-- End kuesioner I -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comments-heading text-center mb-30">
                                                <hgroup>
                                                    <p>Kuesioner Pilihan</p>
                                                </hgroup>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingZero">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                                                            Jenis Pelayanan
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <!-- Start Kuesioner Pilihan-->
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                        Pelayanan Buku Kesehatan Kapal
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <!-- Start Kuesioner 1 -->
                                                                    - Pelayanan Buku Kesehatan Kapal telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner1pertanyaan1" id="exampleRadios1" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner1pertanyaan1" id="exampleRadios45" value="4">
                                                                        <label class="form-check-label" for="exampleRadios45">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner1pertanyaan1" id="exampleRadios46" value="3">
                                                                        <label class="form-check-label" for="exampleRadios46">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner1pertanyaan1" id="exampleRadios47" value="2">
                                                                        <label class="form-check-label" for="exampleRadios47">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner1pertanyaan1" id="exampleRadios48" value="1">
                                                                        <label class="form-check-label" for="exampleRadios48">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <!-- End kuesioner 1 -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingTwo">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                        Pelayanan Sertifikat Kesehatan Kapal Berlaku 6 Bulan
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <!-- Start Kuesioner 2 -->
                                                                    - Pelayanan SSCEC/SSCC telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner2pertanyaan1" id="exampleRadios49" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner2pertanyaan1" id="exampleRadios50" value="4">
                                                                        <label class="form-check-label" for="exampleRadios50">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner2pertanyaan1" id="exampleRadios51" value="3">
                                                                        <label class="form-check-label" for="exampleRadios51">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner2pertanyaan1" id="exampleRadios52" value="2">
                                                                        <label class="form-check-label" for="exampleRadios52">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner2pertanyaan1" id="exampleRadios53" value="1">
                                                                        <label class="form-check-label" for="exampleRadios53">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <br>
                                                                    - Pelayanan Sertifikat P3K kapal telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner2pertanyaan2" id="exampleRadios54" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner2pertanyaan2" id="exampleRadios55" value="4">
                                                                        <label class="form-check-label" for="exampleRadios55">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner2pertanyaan2" id="exampleRadios56" value="3">
                                                                        <label class="form-check-label" for="exampleRadios56">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner2pertanyaan2" id="exampleRadios57" value="2">
                                                                        <label class="form-check-label" for="exampleRadios57">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner2pertanyaan2" id="exampleRadios58" value="1">
                                                                        <label class="form-check-label" for="exampleRadios58">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <!-- End kuesioner 2 -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingThree">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                        Pelayanan Kedatangan dan Keberangkatan Kapal
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <!-- Start Kuesioner 3 -->
                                                                    - Pelayanan Free Pratique telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner3pertanyaan1" id="exampleRadios59" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner3pertanyaan1" id="exampleRadios60" value="4">
                                                                        <label class="form-check-label" for="exampleRadios60">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner3pertanyaan1" id="exampleRadios61" value="3">
                                                                        <label class="form-check-label" for="exampleRadios61">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner3pertanyaan1" id="exampleRadios62" value="2">
                                                                        <label class="form-check-label" for="exampleRadios62">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner3pertanyaan1" id="exampleRadios63" value="1">
                                                                        <label class="form-check-label" for="exampleRadios63">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <br>
                                                                    - Pelayanan Port Health Quarantine Clearance telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner3pertanyaan2" id="exampleRadios64" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner3pertanyaan2" id="exampleRadios65" value="4">
                                                                        <label class="form-check-label" for="exampleRadios65">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner3pertanyaan2" id="exampleRadios66" value="3">
                                                                        <label class="form-check-label" for="exampleRadios66">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner3pertanyaan2" id="exampleRadios67" value="2">
                                                                        <label class="form-check-label" for="exampleRadios67">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner3pertanyaan2" id="exampleRadios68" value="1">
                                                                        <label class="form-check-label" for="exampleRadios68">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <!-- End kuesioner 3 -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingFour">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                        Pelayanan ICV dan Vaksinasi Meningitis
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <!-- Start Kuesioner 4 -->
                                                                    - Pelayanan ICV (Sertifikat Vaksinasi Internasional) telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner4pertanyaan1" id="exampleRadios69" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner4pertanyaan1" id="exampleRadios70" value="4">
                                                                        <label class="form-check-label" for="exampleRadios70">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner4pertanyaan1" id="exampleRadios71" value="3">
                                                                        <label class="form-check-label" for="exampleRadios71">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner4pertanyaan1" id="exampleRadios72" value="2">
                                                                        <label class="form-check-label" for="exampleRadios72">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner4pertanyaan1" id="exampleRadios73" value="1">
                                                                        <label class="form-check-label" for="exampleRadios73">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <br>
                                                                    - Vaksinasi Meningitis telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner4pertanyaan2" id="exampleRadios74" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner4pertanyaan2" id="exampleRadios75" value="4">
                                                                        <label class="form-check-label" for="exampleRadios75">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner4pertanyaan2" id="exampleRadios76" value="3">
                                                                        <label class="form-check-label" for="exampleRadios76">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner4pertanyaan2" id="exampleRadios77" value="2">
                                                                        <label class="form-check-label" for="exampleRadios77">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner4pertanyaan2" id="exampleRadios78" value="1">
                                                                        <label class="form-check-label" for="exampleRadios78">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <!-- End kuesioner 4 -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingFive">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                        Pelayanan Poliklinik
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <!-- Start Kuesioner 5 -->
                                                                    - Pelayanan poliklinik telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner5pertanyaan1" id="exampleRadios79" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner5pertanyaan1" id="exampleRadios80" value="4">
                                                                        <label class="form-check-label" for="exampleRadios80">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner5pertanyaan1" id="exampleRadios81" value="3">
                                                                        <label class="form-check-label" for="exampleRadios81">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner5pertanyaan1" id="exampleRadios82" value="2">
                                                                        <label class="form-check-label" for="exampleRadios82">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner5pertanyaan1" id="exampleRadios83" value="1">
                                                                        <label class="form-check-label" for="exampleRadios83">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <!-- End kuesioner 5 -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingSix">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                        Pelayanan Ambulance
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <!-- Start Kuesioner 6 -->
                                                                    - Ambulance telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner6pertanyaan1" id="exampleRadios84" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner6pertanyaan1" id="exampleRadios85" value="4">
                                                                        <label class="form-check-label" for="exampleRadios85">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner6pertanyaan1" id="exampleRadios86" value="3">
                                                                        <label class="form-check-label" for="exampleRadios86">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner6pertanyaan1" id="exampleRadios87" value="2">
                                                                        <label class="form-check-label" for="exampleRadios87">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner6pertanyaan1" id="exampleRadios88" value="1">
                                                                        <label class="form-check-label" for="exampleRadios88">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <!-- End kuesioner 6 -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingSeven">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                                        Pelayanan Pemeriksaan Kesehatan
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <!-- Start Kuesioner 7 -->
                                                                    - Pemeriksaan Kesehatan telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner7pertanyaan1" id="exampleRadios89" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner7pertanyaan1" id="exampleRadios90" value="4">
                                                                        <label class="form-check-label" for="exampleRadios90">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner7pertanyaan1" id="exampleRadios91" value="3">
                                                                        <label class="form-check-label" for="exampleRadios91">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner7pertanyaan1" id="exampleRadios92" value="2">
                                                                        <label class="form-check-label" for="exampleRadios92">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner7pertanyaan1" id="exampleRadios93" value="1">
                                                                        <label class="form-check-label" for="exampleRadios93">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <!-- End kuesioner 7 -->
                                                                </div>
                                                            </div>
                                                        </div>
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
                                                        <div class="card">
                                                            <div class="card-header" id="headingNine">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                                        Pelayanan Izin Angkut Orang Sakit
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <!-- Start Kuesioner 9 -->
                                                                    - Izin angkut orang sakit telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner9pertanyaan1" id="exampleRadios99" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner9pertanyaan1" id="exampleRadios100" value="4">
                                                                        <label class="form-check-label" for="exampleRadios100">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner9pertanyaan1" id="exampleRadios101" value="3">
                                                                        <label class="form-check-label" for="exampleRadios101">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner9pertanyaan1" id="exampleRadios102" value="2">
                                                                        <label class="form-check-label" for="exampleRadios102">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner9pertanyaan1" id="exampleRadios103" value="1">
                                                                        <label class="form-check-label" for="exampleRadios103">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <!-- End kuesioner 9 -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingTen">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                                        Pelayanan Klirens Kesehatan Dan Validasi Hasil Rapid Test Dan PCR Kewaspadaan Covid-19
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <!-- Start Kuesioner 10 -->
                                                                    - Klirens kesehatan penumpang dan validasi hasil pemeriksaan rapid test dan PCR sebagai kewaspadaan penyebaran penyakit Covid-19 telah memberikan pelayanan yang baik
                                                                    <input class="form-check-input" type="radio" name="kuesioner10pertanyaan1" id="exampleRadios104" value="0" checked hidden>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner10pertanyaan1" id="exampleRadios105" value="4">
                                                                        <label class="form-check-label" for="exampleRadios105">
                                                                            Sangat Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner10pertanyaan1" id="exampleRadios106" value="3">
                                                                        <label class="form-check-label" for="exampleRadios106">
                                                                            Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner10pertanyaan1" id="exampleRadios107" value="2">
                                                                        <label class="form-check-label" for="exampleRadios107">
                                                                            Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kuesioner10pertanyaan1" id="exampleRadios108" value="1">
                                                                        <label class="form-check-label" for="exampleRadios108">
                                                                            Sangat Tidak Setuju
                                                                        </label>
                                                                    </div>
                                                                    <!-- End kuesioner 10 -->
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