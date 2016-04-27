<!doctype html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <title>UPPM POLBAN</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="David Kohout & Tomáš Lach - www.tomaslach.cz">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo base_url($murl.'views/css/main.css')?>" media="screen,projection">
        <link rel="stylesheet" href="<?php echo base_url($murl.'views/css/style.css')?>" media="screen,projection">
        <link rel="stylesheet" href="<?php echo base_url($murl.'views/css/print.css')?>" media="print">
<!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>-->
        <script src="<?php echo base_url($murl.'views/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url($murl.'views/js/custom_1.js')?>"></script>

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>


        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <header>
            <div class="wrap">

<a id="logo" href="./" style="margin-left:-120px; margin-top:8px"><img src="<?php echo base_url ($murl.'views/img/logo-ok.png');?>" class="img-responsive"></a>


                <hr>

                <nav class="navbar navbar-default">

                    <div id="nav">
                       



                        <strong>
                        navigation
                        </strong>




                        <ul >
                            <li class="parent">
                                <a href="<?php echo site_url('Home') ?>" title="Home">Home</a>
                                 <ul>
                                    <li><a href="<?php echo site_url('Home/profil_uppm') ?>">Profil UPPM</a></li>
                                     <li><a href="<?php echo site_url('Home/info') ?>">Info Terbaru</a></li>
                                   </ul>

                            </li>
                            <li class="parent">
                                <a href="<?php echo site_url('Penelitian/skema_penelitian') ?>" title="Work">Penelitian</a>
                                <ul>
                                    <li><a href="#">Profil Peneliti</a></li>
                                    <li><a href="<?php echo site_url('Penelitian/skema_penelitian') ?>">Skema Penelitian</a></li>
                                    <li><a href="images/panduan.pdf">Panduan</a></li>
                                 </ul>

                            </li>

                               <li class="parent">
                                <a  href="#">Pengabdian Masyarakat</a>
                                <ul>
                                    <li><a href="#">Profil Pengabdian Masyarakat</a></li>
                                    <li><a href="#">Skema Pengabdian Masyarakat</a></li>
                                    <li><a href="#">Panduan</a></li>
                                 </ul>
                            </li>

                                     <li class="parent">
                               <a href="#">HKI</a>
                            <ul>
                                 <li><a href="#">Hak Intektual</a></li>
                                <li><a href="#">Hak Cipta</a></li>


                            </ul>
                           </li>


                           <li class="parent">
                               <a href="#">Publikasi Ilmiah</a>
                            <ul>
                                 <li><a href="#">Jurnal Nasional</a></li>
                                <li><a href="#">Prosiding IRWNS</a></li>
                                <li><a href="#">Artikel Internasional</a></li>

                            </ul>
                           </li>

                            <li>
                               <a href="#">Kerjasama</a>
                            </li>



                            <li>
                                <a href="<?php echo site_url('Login') ?>" title="Login">Login</a>
                            </li>

                        </ul>
                    </div>

                </nav>

            </div>
        </header>

 


<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  
</div>

<div class="container">
 <div ></div>
  <div class="card">
    <h2 class="title">Login</h2>
     <form action="<?php echo base_url().'Dashboard'; ?>" method="POST" role="form" class>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>LOGIN</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
 
  </div>
</div>
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>




        <footer>
            <div class="wrap clearFix">

                <p class="floatLeft">
                    Copyright &copy; 2016 <a href="./">UPPM</a> &ndash; Politeknik Negeri Bandung<br>
<!--                    Free website template by <a href="http://www.templatestar.net">Templatestar.net</a>
                    thanks to <a href="http://www.grilykrby.cz/">Gril Weber</a>-->
                </p>

<!--                <p class="socialIcons floatRight">
                    <a href="./" class="rss">RSS</a>
                    <a href="./" class="facebook">Facebook</a>
                    <a href="./" class="twitter">Twitter</a>
                </p>        -->

            </div>
        </footer>

    </body>



</html>
