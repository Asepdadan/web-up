<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Halaman Dashboard</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Kementrian Pendidikan dan Budaya">
        <meta name="author" content="Penaorange">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url($murl . 'views/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url($murl . 'views/css/animate.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url($murl . 'views/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
        <link href="<?php // echo base_url($murl . 'views/font-awesome/css/font-awesome.css')  ?>" rel="stylesheet">
        <!--<link href="css/animate.min.css" rel="stylesheet">-->

        <!-- Custom styling plus plugins -->
        <link href="<?php echo base_url($murl . 'views/css/custom.css') ?>" rel="stylesheet">
        <script src="<?php echo base_url($murl . 'views/js/jquery.min.js'); ?>"></script>
        <!--[if lt IE 9]>
            <script src="../assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>


    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="#" class="site_title">&nbsp;&nbsp;<img src="<?php echo base_url($murl . 'views/images/logo-ok.png'); ?>" width="180" height="30"><span></span></a>
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <!-- sidebar menu -->
                        <?php echo modules::run('Menu/remap/admin');  ?>
                        <!-- /sidebar menu -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo base_url($murl . 'views/images/img.jpg'); ?>" alt="">John Doe
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                        <li><a href="javascript:;">  Profile</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Help</a>
                                        </li>
                                        <li><a href="<?php echo base_url('index.php/Login'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->


                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <div class="x_panel">
                                <div class="row x_title">
                                    <div class="col-md-12">
                                        <h3>Menu Administrator UPPM Polban</h3>
                                    </div>
                                </div>
                                <div class="row menu-aplikasi">
                                    <div class="col-md-3">
                                        <center>
                                            <a href="<?php echo base_url('index.php/Siswa'); ?>">
                                                <img src="<?php echo base_url($murl . 'views/images/kependudukan.png'); ?>" class="img-layanan"><br>
                                                Kelola Siswa
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="<?php echo base_url('index.php/Ptk'); ?>">
                                                <img src="<?php echo base_url($murl . 'views/images/ktp.jpg'); ?>" class="img-layanan"><br>
                                                Kelola Guru
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="#">
                                                <img src="<?php echo base_url($murl . 'views/images/kk.jpg'); ?>" class="img-layanan"><br>
                                                Fitur A
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="<?php echo base_url('index.php/Sekolah'); ?>">
                                                <img src="<?php echo base_url($murl . 'views/images/usaha.jpg'); ?>" class="img-layanan"><br>
                                                Kelola Sekolah
                                            </a>
                                        </center>
                                    </div>
                                </div>
                                <br>  
                                <div class="row menu-aplikasi">
                                    <div class="col-md-3">
                                        <center>
                                            <a href="#">
                                                <img src="<?php echo base_url($murl . 'views/images/kependudukan.png'); ?>" class="img-layanan"><br>
                                                Fitur A
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="#">
                                                <img src="<?php echo base_url($murl . 'views/images/ktp.jpg'); ?>" class="img-layanan"><br>
                                                Fitur A
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="#">
                                                <img src="<?php echo base_url($murl . 'views/images/kk.jpg'); ?>" class="img-layanan"><br>
                                                Fitur A
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="#">
                                                <img src="<?php echo base_url($murl . 'views/images/usaha.jpg'); ?>" class="img-layanan"><br>
                                                Fitur A
                                            </a>
                                        </center>
                                    </div>
                                </div>
                                <br>
                                <div class="row menu-aplikasi">
                                    <div class="col-md-3">
                                        <center>
                                            <a href="#">
                                                <img src="<?php echo base_url($murl . 'views/images/kependudukan.png'); ?>" class="img-layanan"><br>
                                                Fitur A
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="#">
                                                <img src="<?php echo base_url($murl . 'views/images/ktp.jpg'); ?>" class="img-layanan"><br>
                                                Fitur A
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="#">
                                                <img src="<?php echo base_url($murl . 'views/images/kk.jpg'); ?>" class="img-layanan"><br>
                                                Fitur A
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="#">
                                                <img src="<?php echo base_url($murl . 'views/images/usaha.jpg'); ?>" class="img-layanan"><br>
                                                Fitur A
                                            </a>
                                        </center>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <div class="x_panel">
                                <div class="row x_title">
                                    <div class="col-md-12">
                                        <h3>Dokumen</h3>
                                    </div>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="active">
                                            <th class="col-md-4">No</th>
                                            <th class="col-md-4">Dokumen</th>
                                            <th class="col-md-4">Tipe</th>
                                            <th class="col-md-4">Ukuran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4" align="center"><strong>Data tidak ditemukan </strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <br>
                            <div class="x_panel">
                                <div class="row x_title">
                                    <div class="col-md-12">
                                        <h3>Grafik Pendidikan</h3>
                                    </div>
                                </div>
                                <div class="x_content">
                                    <h4>App Usage across versions</h4>
                                    <div class="widget_summary">
                                        <div class="w_left w_25">
                                            <span>0.1.5.2</span>
                                        </div>
                                        <div class="w_center w_55">
                                            <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w_right w_20">
                                            <span>123k</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="widget_summary">
                                        <div class="w_left w_25">
                                            <span>0.1.5.3</span>
                                        </div>
                                        <div class="w_center w_55">
                                            <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w_right w_20">
                                            <span>53k</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget_summary">
                                        <div class="w_left w_25">
                                            <span>0.1.5.4</span>
                                        </div>
                                        <div class="w_center w_55">
                                            <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w_right w_20">
                                            <span>23k</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget_summary">
                                        <div class="w_left w_25">
                                            <span>0.1.5.5</span>
                                        </div>
                                        <div class="w_center w_55">
                                            <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w_right w_20">
                                            <span>3k</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="widget_summary">
                                        <div class="w_left w_25">
                                            <span>0.1.5.6</span>
                                        </div>
                                        <div class="w_center w_55">
                                            <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w_right w_20">
                                            <span>1k</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
            </div>
        </div>
        <script src="<?php echo base_url($murl . 'views/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url($murl . 'views/js/custom.js'); ?>"></script>
        <!--<script src="js/bootstrap.min.js"></script>-->
        <!--<script src="js/custom.js"></script>-->
    </body>
</html>
