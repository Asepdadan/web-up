<!DOCTYPE html>
<html lang="en">

    <head>
        <title><?php echo $title; ?></title>

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
                        <?php echo modules::run('Menu/');  ?>
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" ><span class=" glyphicon glyphicon-list-alt"></span> Form Posting Berita </a></h3>
                            </div>
                            <div class="panel-body">
                         <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            

                          <!-- //info pemberitahuan -->

                          <?php
                          if(empty($this->session->userdata('message')) == TRUE){
                            
                          }else{

                          ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong><?php echo $this->session->userdata('message'); ?>!</strong> 
                            </div>

                          <?php } ?>


                        <form action="<?php echo site_url('Berita/action_posting'); ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                            <label class="col-md-3 control-label">Judul Berita</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="judul" id="inputJudul" class="form-control" required="required"></textarea>
                                    
                                </div>
                             </div>
                            </div>

                            <div class="form-group">
                            <label class="col-md-3 control-label">Isi Berita</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="isi" id="inputJudul" class="form-control" required="required"></textarea>
                                    
                                </div>
                             </div>
                            </div>

                             <div class="form-group">
                            <label class="col-md-3 control-label">Gambar Berita</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="file" name="gambar_berita" value="" >
                                </div>
                             </div>
                            </div>



                        <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Post Berita</button>
                        </div>
                        </div>
                        </form>


                          </div>
                        </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#table" aria-expanded="true" aria-controls="collapseOne" ><span class=" glyphicon glyphicon-bullhorn"></span> Data Berita </a></h3>
                            </div>
                            <div class="panel-body">
                            <div id="table" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th width="200">Judul</th>
                                                <th width="400" height="5">Isi Berita</th>
                                                <th>Tanggal Posting</th>
                                                <th>Flag</th>
                                                <th class="text-center">Action</th>

                                            </tr>
                                        </thead>
                                         <?php $no = 1; foreach ($query as $row) {
                                                # code...
                                            
                                            ?>
                                        

                                        
                                        

                                           
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['judul']; ?></td>
                                                <td><?php echo $row['isi']; ?></td>
                                                <td><?php echo $row['tanggal_upload']; ?></td>
                                                <td>On</td>
                                                <td><a href="<?php echo base_url().'Berita/delete_berita/'.$row['id']; ?>" style="padding-right: 15px;"><span class="alert alert-danger glyphicon glyphicon-trash"></span></a> <a href="<?php echo base_url().'Berita/show_edit/'.$row['id']; ?>"><span class="alert alert-info glyphicon glyphicon-pencil"></span> </a></td>

                                            </tr>
                                            

                                        
                                        <?php } ?>
                                    </table>
                                </div>

                            </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /page content -->
            </div>
        </div>
        </div>
        <script src="<?php echo base_url($murl . 'views/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url($murl . 'views/js/custom.js'); ?>"></script>
        <!--<script src="js/bootstrap.min.js"></script>-->
        <!--<script src="js/custom.js"></script>-->
    </body>
</html>
