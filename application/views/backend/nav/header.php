<!DOCTYPE html>
<html>

<head>
    <!-- Title -->
    <title><?php echo $title; ?></title>

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
    <link href="<?php echo base_url() . 'assets/plugins/summernote-master/summernote.css' ?>" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="<?php echo base_url() . 'assets/css/modern.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/css/themes/green.css' ?>" class="theme-color" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/css/custom.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/css/dropify.min.css' ?>" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/datepicker/css/datepicker.css' ?>">

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
                            $count_inbox = $this->db->get_where('tbl_inbox', array('inbox_status' => '0'));
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right"><?php echo $count_inbox->num_rows(); ?></span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">

                                    <li>
                                        <p class="drop-title">Anda memiliki <?php echo $count_inbox->num_rows(); ?> pesan baru !</p>
                                    </li>
                                    <li class="dropdown-menu-list slimscroll messages">
                                        <ul class="list-unstyled">
                                            <?php
                                            $query_msg = $this->db->get_where('tbl_inbox', array('inbox_status' => '0'), 6);
                                            foreach ($query_msg->result() as $row) :
                                            ?>
                                                <li>
                                                    <a href="<?php echo site_url('backend/inbox'); ?>">
                                                        <div class="msg-img">
                                                            <div class="online on"></div><img class="img-circle" src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>" alt="">
                                                        </div>
                                                        <p class="msg-name"><?php echo $row->inbox_name; ?></p>
                                                        <p class="msg-text"><?php echo word_limiter($row->inbox_message, 5); ?></p>
                                                        <p class="msg-time"><?php echo date('d-m-Y H:i:s', strtotime($row->inbox_created_at)); ?></p>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="<?php echo site_url('backend/inbox'); ?>" class="text-center">All Messages</a></li>
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
                                    <li role="presentation"><a href="<?php echo site_url('backend/inbox'); ?>"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right"><?php echo $count_inbox->num_rows(); ?></span></a></li>
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
                                        <?php if ($row['user_level'] == '99') : ?>
                                            <small>Super Admin</small>
                                        <?php elseif ($row['user_level'] == '1') : ?>
                                            <small>Administrator</small>
                                        <?php else : ?>
                                            <small>Petugas</small>
                                        <?php endif; ?>
                                        <p><small>NIP : <?php echo $this->session->userdata('nip'); ?></small></p>
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
                                        <?php if ($row['user_level'] == '99') : ?>
                                            <small>Super Admin</small>
                                        <?php elseif ($row['user_level'] == '1') : ?>
                                            <small>Administrator</small>
                                        <?php else : ?>
                                            <small>Petugas</small>
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

                    <?php if ($this->session->userdata('access') == '99') : ?>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pin"></span>
                                <p>Post Berita</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/post/add_new'); ?>">Tambah</a></li>
                                <li><a href="<?php echo site_url('backend/post'); ?>">Post List</a></li>
                                <li><a href="<?php echo site_url('backend/category'); ?>">Kategori</a></li>
                                <li><a href="<?php echo site_url('backend/tag'); ?>">Tag</a></li>
                                <li><a href="<?php echo site_url('backend/inbox'); ?>">Inbox</a></li>
                                <li><a href="<?php echo site_url('backend/comment'); ?>">Komentar</a></li>
                                <li><a href="<?php echo site_url('backend/subscriber'); ?>">Subscribers</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('backend/kuesioner'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-envelope"></span>
                                <p>SIJABLAY</p>
                            </a></li>
                        <li><a href="<?php echo site_url('backend/users'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-user"></span>
                                <p>Pengguna</p>
                            </a></li>
                        <li class="droplink"><a href="<?php echo site_url('backend/settings'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-settings"></span>
                                <p>Pengaturan</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/settings'); ?>">Basic</a></li>
                                <li><a href="<?php echo site_url('backend/home_setting'); ?>">Home</a></li>
                                <li><a href="<?php echo site_url('backend/about_setting'); ?>">Sambutan</a></li>
                                <li><a href="<?php echo site_url('backend/manage_gallery'); ?>">Foto</a></li>
                                <li><a href="<?php echo site_url('backend/manage_download'); ?>">Download</a></li>
                                <li><a href="<?php echo site_url('backend/profile_setting'); ?>">Profile</a></li>
                                <li><a href="<?php echo site_url('backend/testimonial'); ?>">Testimonials</a></li>
                                <li><a href="<?php echo site_url('backend/navbar'); ?>">Navbar</a></li>
                            </ul>
                        </li>

                        <li class="droplink"><a href="<?php echo site_url('backend/penyakit'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-folder"></span>
                                <p>Kategori</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/penyakit'); ?>">Penyakit</a></li>
                                <li><a href="<?php echo site_url('backend/wilker'); ?>">Wilayah Kerja</a></li>
                                <li><a href="<?php echo site_url('backend/satuan'); ?>">Satuan</a></li>
                                <li><a href="<?php echo site_url('backend/jabatan'); ?>">Jabatan</a></li>
                                <li><a href="<?php echo site_url('backend/users/tunjuk_wilker'); ?>">Tunjuk Koordinator</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="<?php echo site_url('backend/laporan_klw'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span>
                                <p>Laporan KLW</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw1'); ?>">Laporan UKLW 1</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw2'); ?>">Laporan UKLW 2</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw3'); ?>">Laporan UKLW 3</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw4'); ?>">Laporan UKLW 4</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw5'); ?>">Laporan UKLW 5</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw6'); ?>">Laporan UKLW 6</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw7'); ?>">Laporan UKLW 7</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw8'); ?>">Laporan UKLW 8</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw9'); ?>">Laporan UKLW 9</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="<?php echo site_url('backend/laporan_pkse'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span>
                                <p>Laporan PKSE</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse1'); ?>">Laporan PKSE 1</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse2'); ?>">Laporan PKSE 2</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse3'); ?>">Laporan PKSE 3</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse4'); ?>">Laporan PKSE 4</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse5'); ?>">Laporan PKSE 5</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse6'); ?>">Laporan PKSE 6</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse7'); ?>">Laporan PKSE 7</a></li>
                            </ul>
                        </li>
                    <?php elseif ($this->session->userdata('access') == '1') : ?>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pin"></span>
                                <p>Post Berita</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/post/add_new'); ?>">Tambah</a></li>
                                <li><a href="<?php echo site_url('backend/post'); ?>">Post List</a></li>
                                <li><a href="<?php echo site_url('backend/category'); ?>">Kategori</a></li>
                                <li><a href="<?php echo site_url('backend/tag'); ?>">Tag</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('backend/kuesioner'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-envelope"></span>
                                <p>SIJABLAY</p>
                            </a></li>
                        <li><a href="<?php echo site_url('backend/users'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-user"></span>
                                <p>Pengguna</p>
                            </a></li>
                        <li class="droplink"><a href="<?php echo site_url('backend/settings'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-settings"></span>
                                <p>Pengaturan</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/settings'); ?>">Basic</a></li>
                                <li><a href="<?php echo site_url('backend/home_setting'); ?>">Home</a></li>
                                <li><a href="<?php echo site_url('backend/about_setting'); ?>">Sambutan</a></li>
                                <li><a href="<?php echo site_url('backend/manage_gallery'); ?>">Foto</a></li>
                                <li><a href="<?php echo site_url('backend/manage_download'); ?>">Download</a></li>
                                <li><a href="<?php echo site_url('backend/profile_setting'); ?>">Profile</a></li>
                                <li><a href="<?php echo site_url('backend/testimonial'); ?>">Testimonials</a></li>
                            </ul>
                        </li>

                        <li class="droplink"><a href="<?php echo site_url('backend/penyakit'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-folder"></span>
                                <p>Kategori</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/users/tunjuk_wilker'); ?>">Tunjuk Koordinator</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="<?php echo site_url('backend/laporan_klw'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span>
                                <p>Laporan KLW</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw1'); ?>">Laporan UKLW 1</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw2'); ?>">Laporan UKLW 2</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw3'); ?>">Laporan UKLW 3</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw4'); ?>">Laporan UKLW 4</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw5'); ?>">Laporan UKLW 5</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw6'); ?>">Laporan UKLW 6</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw7'); ?>">Laporan UKLW 7</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw8'); ?>">Laporan UKLW 8</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw9'); ?>">Laporan UKLW 9</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="<?php echo site_url('backend/laporan_pkse'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span>
                                <p>Laporan PKSE</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse1'); ?>">Laporan PKSE 1</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse2'); ?>">Laporan PKSE 2</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse3'); ?>">Laporan PKSE 3</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse4'); ?>">Laporan PKSE 4</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse5'); ?>">Laporan PKSE 5</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse6'); ?>">Laporan PKSE 6</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse7'); ?>">Laporan PKSE 7</a></li>
                            </ul>
                        </li>

                    <?php else : ?>
                        <li class="droplink"><a href="<?php echo site_url('backend/laporan_klw'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span>
                                <p>Laporan KLW</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw1'); ?>">Laporan UKLW 1</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw2'); ?>">Laporan UKLW 2</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw3'); ?>">Laporan UKLW 3</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw4'); ?>">Laporan UKLW 4</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw5'); ?>">Laporan UKLW 5</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw6'); ?>">Laporan UKLW 6</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw7'); ?>">Laporan UKLW 7</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw8'); ?>">Laporan UKLW 8</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_klw/klw9'); ?>">Laporan UKLW 9</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="<?php echo site_url('backend/laporan_pkse'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span>
                                <p>Laporan PKSE</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse1'); ?>">Laporan PKSE 1</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse2'); ?>">Laporan PKSE 2</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse3'); ?>">Laporan PKSE 3</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse4'); ?>">Laporan PKSE 4</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse5'); ?>">Laporan PKSE 5</a></li>
                                <li><a href="<?php echo site_url('backend/laporan_pkse/pkse7'); ?>">Laporan PKSE 7</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <li><a href="<?php echo site_url('logout'); ?>" class="waves-effect waves-button"><span class="menu-icon icon-logout"></span>
                            <p>Log Out</p>
                        </a></li>


                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->