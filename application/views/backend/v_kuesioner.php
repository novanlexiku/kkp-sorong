<!DOCTYPE html>
<html>

<head>

    <!-- Title -->
    <title>kuesioner</title>

    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="KKP-Sorong" />
    <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

    <!-- Styles -->
    <link href="<?php echo base_url() . 'assets/plugins/pace-master/themes/blue/pace-theme-flash.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url() . 'assets/plugins/uniform/css/uniform.default.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url() . 'assets/plugins/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/fontawesome/css/font-awesome.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/line-icons/simple-line-icons.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/waves/waves.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/switchery/switchery.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/3d-bold-navigation/css/style.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/slidepushmenus/css/component.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/datatables/css/jquery.datatables.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/datatables/css/jquery.datatables_themeroller.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/toastr/jquery.toast.min.css' ?>" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="<?php echo base_url() . 'assets/css/modern.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/css/themes/green.css' ?>" class="theme-color" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/css/custom.css' ?>" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url() . 'assets/plugins/3d-bold-navigation/js/modernizr.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/offcanvasmenueffects/js/snap.svg-min.js' ?>"></script>


</head>

<body class="page-header-fixed compact-menu pace-done page-sidebar-fixed">
    <div class="overlay"></div>
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="<?php echo site_url('backend/dashboard'); ?>" class="logo-text"><span>KKP-Sorong</span></a>
                </div><!-- Logo Box -->
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            $count_kuesioner = $this->db->get_where('tbl_kuesioner', array('kuesioner_status' => '0'));
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right"><?php echo $count_kuesioner->num_rows(); ?></span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">

                                    <li>
                                        <p class="drop-title">Anda memiliki <?php echo $count_kuesioner->num_rows(); ?> pesan baru !</p>
                                    </li>
                                    <li class="dropdown-menu-list slimscroll messages">
                                        <ul class="list-unstyled">
                                            <?php
                                            $query_msg = $this->db->get_where('tbl_kuesioner', array('kuesioner_status' => '0'), 6);
                                            foreach ($query_msg->result() as $row) :
                                            ?>
                                                <li>
                                                    <a href="<?php echo site_url('backend/kuesioner'); ?>">
                                                        <div class="msg-img">
                                                            <div class="online on"></div><img class="img-circle" src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>" alt="">
                                                        </div>
                                                        <p class="msg-name"><?php echo $row->kuesioner_name; ?></p>
                                                        <p class="msg-text"><?php echo word_limiter($row->kuesioner_message, 5); ?></p>
                                                        <p class="msg-time"><?php echo date('d-m-Y H:i:s', strtotime($row->kuesioner_created_at)); ?></p>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="<?php echo site_url('backend/kuesioner'); ?>" class="text-center">All Messages</a></li>
                                </ul>
                            </li>
                            <?php
                            $count_comment = $this->db->get_where('tbl_comment', array('comment_status' => '0'));
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-comment"></i><span class="badge badge-success pull-right"><?php echo $count_comment->num_rows(); ?></span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li>
                                        <p class="drop-title">Anda memiliki <?php echo $count_comment->num_rows(); ?> komentar baru !</p>
                                    </li>
                                    <li class="dropdown-menu-list slimscroll messages">
                                        <ul class="list-unstyled">
                                            <?php
                                            $query_cmt = $this->db->get_where('tbl_comment', array('comment_status' => '0'), 6);
                                            foreach ($query_cmt->result() as $row) :
                                            ?>
                                                <li>
                                                    <a href="<?php echo site_url('backend/comment/unpublish'); ?>">
                                                        <div class="msg-img">
                                                            <div class="online on"></div><img class="img-circle" src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>" alt="">
                                                        </div>
                                                        <p class="msg-name"><?php echo $row->comment_name; ?></p>
                                                        <p class="msg-text"><?php echo word_limiter($row->comment_message, 5); ?></p>
                                                        <p class="msg-time"><?php echo date('d-m-Y H:i:s', strtotime($row->comment_date)); ?></p>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="<?php echo site_url('backend/comment/unpublish'); ?>" class="text-center">All Comments</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <span class="user-name"><?php echo $this->session->userdata('name'); ?><i class="fa fa-angle-down"></i></span>
                                    <?php
                                    $user_id = $this->session->userdata('id');
                                    $query = $this->db->get_where('tbl_user', array('user_id' => $user_id));
                                    if ($query->num_rows() > 0) :
                                        $row = $query->row_array();
                                    ?>
                                        <img class="img-circle avatar" src="<?php echo base_url() . 'assets/images/' . $row['user_photo']; ?>" width="40" height="40" alt="">
                                    <?php else : ?>
                                        <img class="img-circle avatar" src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>" width="40" height="40" alt="">
                                    <?php endif; ?>
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="<?php echo site_url('backend/change_pass'); ?>"><i class="fa fa-key"></i>Change Password</a></li>
                                    <li role="presentation"><a href="<?php echo site_url('backend/comment/unpublish'); ?>"><i class="fa fa-comment"></i>Comments<span class="badge badge-success pull-right"><?php echo $count_comment->num_rows(); ?></span></a></li>
                                    <li role="presentation"><a href="<?php echo site_url('backend/kuesioner'); ?>"><i class="fa fa-envelope"></i>kuesioner<span class="badge badge-success pull-right"><?php echo $count_kuesioner->num_rows(); ?></span></a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a href="<?php echo site_url('logout'); ?>"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo site_url('logout'); ?>" class="log-out waves-effect waves-button waves-classic">
                                    <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                </a>
                            </li>
                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->
        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <div class="sidebar-header">
                    <div class="sidebar-profile">
                        <?php
                        $user_id = $this->session->userdata('id');
                        $query = $this->db->get_where('tbl_user', array('user_id' => $user_id));
                        if ($query->num_rows() > 0) :
                            $row = $query->row_array();
                        ?>
                            <a href="javascript:void(0);">
                                <div class="sidebar-profile-image">
                                    <img src="<?php echo base_url() . 'assets/images/' . $row['user_photo']; ?>" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?php echo $this->session->userdata('name'); ?><br>
                                        <?php if ($row['user_level'] == '1') : ?>
                                            <small>Administrator</small>
                                        <?php else : ?>
                                            <small>Author</small>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </a>
                        <?php else : ?>
                            <a href="javascript:void(0);">
                                <div class="sidebar-profile-image">
                                    <img src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?php echo $this->session->userdata('name'); ?><br>
                                        <?php if ($row['user_level'] == '1') : ?>
                                            <small>Administrator</small>
                                        <?php else : ?>
                                            <small>Author</small>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <ul class="menu accordion-menu">
                    <li><a href="<?php echo site_url('backend/dashboard'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-home"></span>
                            <p>Dashboard</p>
                        </a></li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pin"></span>
                            <p>Post</p><span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo site_url('backend/post/add_new'); ?>">Add New</a></li>
                            <li><a href="<?php echo site_url('backend/post'); ?>">Post List</a></li>
                            <li><a href="<?php echo site_url('backend/category'); ?>">Category</a></li>
                            <li><a href="<?php echo site_url('backend/tag'); ?>">Tag</a></li>
                            <li><a href="<?php echo site_url('backend/inbox'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-envelope"></span>
                                    <p>Inbox</p>
                                </a></li>
                            <li><a href="<?php echo site_url('backend/comment'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-bubbles"></span>
                                    <p>Comments</p>
                                </a></li>
                            <li><a href="<?php echo site_url('backend/subscriber'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-users"></span>
                                    <p>Subscribers</p>
                                </a></li>
                            <li><a href="<?php echo site_url('backend/testimonial'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-like"></span>
                                    <p>Testimonials</p>
                                </a></li>
                        </ul>
                    </li>

                    <?php if ($this->session->userdata('access') == '1') : ?>
                        <li class="active"><a href="<?php echo site_url('backend/kuesioner'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-envelope"></span>
                                <p>SIJABLAY</p>
                            </a></li>
                        <li><a href="<?php echo site_url('backend/users'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-user"></span>
                                <p>Users</p>
                            </a></li>
                        <li class="droplink"><a href="<?php echo site_url('backend/settings'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-settings"></span>
                                <p>Settings</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/settings'); ?>">Basic</a></li>
                                <li><a href="<?php echo site_url('backend/home_setting'); ?>">Home</a></li>
                                <li><a href="<?php echo site_url('backend/about_setting'); ?>">About</a></li>
                                <li><a href="<?php echo site_url('backend/navbar'); ?>">Navbar</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                    <?php endif; ?>
                    <li><a href="<?php echo site_url('logout'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-logout"></span>
                            <p>Log Out</p>
                        </a></li>

                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Persyaratan administrasi dan teknis dari pelayanan KKP</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseA" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseA">
                                        <div class="card card-body">
                                            <span>Persyaratan administrasi dan teknis dari pelayanan KKP dapat diperoleh dan dipenuhi dengan mudah</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerAp1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerAp1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerAp1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerAp1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Sistem, mekanisme dan prosedur adalah tata cara pelayanan</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseB" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseB">
                                        <div class="card card-body">
                                            <span>Tata cara pelayanan yang diberikan oleh petugas pelayanan diberikan secara jelas</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerBp1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerBp1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerBp1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerBp1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Waktu penyelesaian</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseC" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseC">
                                        <div class="card card-body">
                                            <span>Waktu yang dibutuhkan untuk mendapatkan pelayanan dan pelaksanaan adalah cepat</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerCp1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerCp1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerCp1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerCp1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Biaya/Tarif </p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseD" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseD">
                                        <div class="card card-body">
                                            <span>Tidak ada biaya/tariff/Tip yang diberikan untuk mendapatkan pelayanan di KKP selain tarip sesuai ketentuan yang berlaku</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerDp1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerDp1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerDp1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerDp1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Produk Spesifikasi Jenis Pelayanan</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseE" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseE">
                                        <div class="card card-body">
                                            <span>Aturan atau tata cara untuk mendapatkan pelayanan yang saudar/saudari butuhkan di KKP didapatkan informasinya dengan mudah</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerEp1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerEp1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerEp1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerEp1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Kompetensi Pelaksana</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseF" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseF">
                                        <div class="card card-body">
                                            <span>Semua petuas KKP memiliki kemampuan dalam menjawab semua pertanyaan yang diajukan dengan jawaban yang baik dan memuaskan</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerFp1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerFp1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerFp1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerFp1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Perilaku Pelaksana</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseG1" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseG2" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 2
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseG1">
                                        <div class="card card-body">
                                            <span>Petugas KKP melayani tamu dengan ramah</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerGp1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerGp1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerGp1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerGp1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="collapse" id="collapseG2">
                                        <div class="card card-body">
                                            <span>Petugas KKP pada saat melayani tamu terlihat rapih dalam berpakaiannya</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerGp2_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerGp2_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerGp2_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerGp2_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Penanganan pengaduan, saran dan masukan</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseH" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseH">
                                        <div class="card card-body">
                                            <span>Mudahnya mendapatkan ayanan penanganan pengaduan, saran dan masukan terhadap pelayanan publik di KKP</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerHp1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerHp1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerHp1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerHp1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Sarana</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseI1" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseI2" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 2
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseI1">
                                        <div class="card card-body">
                                            <span>Lengkapnya fasilitas yang dibutuhkan dan kenyamanan pada saat saudara/saudari menerima pelayanan di KKP (Ballpoint, ruang tunggu,Toilet, halaman parkir)</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerIp1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerIp1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerIp1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerIp1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="collapse" id="collapseI2">
                                        <div class="card card-body">
                                            <span>Perjalanan ke KKP mudah dijangkau</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesionerIp2_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesionerIp2_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesionerIp2_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesionerIp2_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Pelayanan Buku Kesehatan Kapal</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse1">
                                        <div class="card card-body">
                                            <span>Pelayanan Buku Kesehatan Kapal telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner1p1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner1p1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner1p1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner1p1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Pelayanan Sertifikat Kesehatan Kapal</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 2
                                        </button>

                                    </p>
                                    <div class="collapse" id="collapse4">
                                        <div class="card card-body">
                                            <span>Pelayanan SSCEC/SSCC telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner2p1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner2p1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner2p1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner2p1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="collapse" id="collapse5">
                                        <div class="card card-body">
                                            <span>Pelayanan Sertifikat P3K kapal telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner2p2_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner2p2_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner2p2_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner2p2_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Pelayanan Kedatangan dan Keberangkatan Kapal</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 2
                                        </button>

                                    </p>
                                    <div class="collapse" id="collapse7">
                                        <div class="card card-body">
                                            <span>Pelayanan Free Pratique telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner3p1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner3p1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner3p1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner3p1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="collapse" id="collapse8">
                                        <div class="card card-body">
                                            <span>Pelayanan Port Health Quarantine Clearance telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner3p2_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner3p2_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner3p2_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner3p2_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Pelayanan ICV dan Vaksinasi Meningitis</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 2
                                        </button>

                                    </p>
                                    <div class="collapse" id="collapse9">
                                        <div class="card card-body">
                                            <span>Pelayanan ICV (Sertifikat Vaksinasi Internasional) telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner4p1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner4p1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner4p1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner4p1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="collapse" id="collapse10">
                                        <div class="card card-body">
                                            <span>Vaksinasi Meningitis telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner4p2_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner4p2_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner4p2_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner4p2_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Pelayanan Poliklinik</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse11">
                                        <div class="card card-body">
                                            <span>Pelayanan poliklinik telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner5p1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner5p1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner5p1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner5p1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Pelayanan Ambulance</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse12">
                                        <div class="card card-body">
                                            <span>Ambulance telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner6p1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner6p1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner6p1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner6p1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Pelayanan Pemeriksaan Kesehatan</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse13">
                                        <div class="card card-body">
                                            <span>Pemeriksaan Kesehatan telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner7p1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner7p1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner7p1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner7p1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Pelayanan Angkut Jenazah</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse14">
                                        <div class="card card-body">
                                            <span>Izin angkut jenazah telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner8p1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner8p1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner8p1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner8p1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Pelayanan Izin Angkut Orang Sakit</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse15">
                                        <div class="card card-body">
                                            <span>Izin angkut orang sakit telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner9p1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner9p1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner9p1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner9p1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>Pelayanan Klirens Kesehatan Dan Validasi Hasil Rapid Test Dan PCR Kewaspadaan Covid-19</p>
                                    <p>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapseExample">
                                            Pertanyaan 1
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapse16">
                                        <div class="card card-body">
                                            <span>Klirens kesehatan penumpang dan validasi hasil pemeriksaan rapid test dan PCR sebagai kewspadaan penyebaran penyakit Covid-19 telah memberikan pelayanan yang baik</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Sangat Setuju : <strong><?php echo number_format($kuesioner10p1_sangatsetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Setuju : <strong><?php echo number_format($kuesioner10p1_setuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Tidak Setuju : <strong><?php echo number_format($kuesioner10p1_tidaksetuju); ?> Orang</strong></li>
                                                <li class="list-group-item">Sangat Tidak Setuju : <strong><?php echo number_format($kuesioner10p1_sangattidaksetuju); ?> Orang</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row -->
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s"><?php echo date('Y'); ?> &copy; Powered by KKP-Sorong.</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    <div class="cd-overlay"></div>

    <!--DELETE RECORD MODAL-->
    <form action="<?php echo site_url('backend/kuesioner/delete'); ?>" method="post">
        <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete Message</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">
                            Anda yakin mau menghapus message ini?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- Javascripts -->
    <script src="<?php echo base_url() . 'assets/plugins/jquery/jquery-2.1.4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jquery-ui/jquery-ui.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/pace-master/pace.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jquery-blockui/jquery.blockui.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/bootstrap/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/switchery/switchery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/uniform/jquery.uniform.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/offcanvasmenueffects/js/classie.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/offcanvasmenueffects/js/main.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/waves/waves.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/3d-bold-navigation/js/main.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/jquery-mockjax-master/jquery.mockjax.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/moment/moment.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/js/jquery.datatables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/modern.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/toastr/jquery.toast.min.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.mailbox-content table tr td').not(":first-child").on('click', function(e) {
                e.stopPropagation();
                e.preventDefault();
                var kuesioner_id = $(this).data('kuesioner_id');

                window.location = "<?php echo site_url('backend/kuesioner/read/'); ?>" + kuesioner_id;
            });

            $('.btn-delete').on('click', function() {
                var kuesioner_id = $(this).data('kuesioner_id');
                $('#DeleteModal').modal('show');
                $('[name="id"]').val(kuesioner_id);
            });
        });
    </script>
    <!--Toast Message-->
    <?php if ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Message Deleted.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "Not Found",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php else : ?>

    <?php endif; ?>

</body>

</html>