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
                        <?php echo modules::run('Menu/mahasiswa');  ?>
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
                                        <h3>Beranda Program Kreativitas Mahasiswa</h3>
                                    </div>
                                    <div class="container">
                                        
                                    <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                    <table class="table">
                                                    
                                                            <tr>
                                                                <td>Pengunjung</td>
                                                                <td>:</td>
                                                                <td>Asep Dadan</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Peran</td>
                                                                <td>:</td>
                                                                <td>Pengusul Mahasiswa</td>
                                                            </tr>
                                                        
                                                    </table>
                                                    
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <img src="<?php echo base_url($murl . 'views/images/img.jpg'); ?>" class="img-thumbnail" width="200" height="300">

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
 
                                <br>  

                                   <br>
                                <div>
                                    <h5 class="text-right">Selamat Datang</h5> <hr><br>
                                    <h5>Selamat Datang di Sistem Informasi Penelitian dan Pengabdian Kepada Masyarakat POLBAN.
                                    Anda Login sebagai Dosen Pengusul Kegiatan.</h5>
                                </div>

                                <div class="container">
                                <ol start="1">
                                    <li>Melakukan status penelusuran status proposal</li>
                                    <li>Mengunggah buku catatan harian kegiatan</li>
                                    <li>Mengentrykan laporan kemajuan</li>
                                    <li>Memantau agenda kegiatan</li>

                                </ol>
                                </div>

                                <div class="row menu-aplikasi">
                                    <div class="col-md-3">
                                        <center>
                                            <a href="<?php echo base_url('Mahasiswa/penelitian_mahasiswa'); ?>">
                                                <img src="<?php echo base_url($murl . 'views/images/kependudukan.png'); ?>" class="img-layanan"><br>
                                                KELOLA USULAN
                                            </a>
                                        </center>
                                    </div>

                                <div class="clearfix"></div>
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
