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

         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url($murl.'views/css/main.css')?>" media="screen,projection">
        <link rel="stylesheet" href="<?php echo base_url($murl.'views/css/print.css')?>" media="print">
<!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>-->
        <script src="<?php echo base_url($murl.'views/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url($murl.'views/js/custom_1.js')?>"></script>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
      <?php echo modules::run('Menu/guest');  ?>
        <hr>

<!--        <div id="intro">
            <div class="inner">
                <div class="wrap clearFix">

                    <h1>Unit Penelitian dan Pengabdian Kepada Masyarakat  <strong>(UPPM)</strong></h1>

                    <p>Sejalan dengan Tujuan Renstra Pendidikan Tinggi 2010-2014 nomor tiga, yaitu ketersediaan
pendidikan tinggi indonesia yang bermutu dan relevan dengan kebutuhan pembangunan
nasional sehingga berkontribusi secara nyata kepada peningkatan daya saing bangsa, Ditjen
Dikti yakin bahwa hal tersebut dapat dicapai melalui pendidikan, penelitian, dan pengabdian
kepada masyarakat di perguruan tinggi</p>

                    <a href="./" class="button" title="SIGN UP">SIGN UP</a>

                </div>
            </div>
        </div>  / #intro -->

        <hr>

          <div id="content">
            <div class="wrap clearFix">

                <h2>PENELITIAN</h2>

                <div class="clearFix">
                    <div class="col floatLeft" style="width: 700px">


<!--                        <img src="img/icon-location.png" alt="" class="icon">-->

                        <h3>SKEMA PENELITIAN</h3>
                        <p><img src="<?php echo base_url($murl.'views/images/skema.JPG'); ?>"  width="600" alt="Image description" title="Image title" /></p>
                        <p style="text-align: justify">
                            Gambar 1.  Skema Penelitian  <BR>




                </div>



<!--                <form action="./" method="post">
                    <fieldset>

                        <label for="email">To stay in touch, simply subscribe to our newsletter.</label>
                        <input type="text" class="text" id="email">
                        <button type="submit" class="button iconLeft"><i class="email"></i> SUBSCRIBE</button>

                    </fieldset>
                </form>-->


            <div class="floatRight" style="margin-right: 40px">
                        <div id="sidebar">

                            <li>
                    <h4>PENELITIAN</h4>
                        <ul>
                            <li><a href="<?php echo site_url('Penelitian/skema_penelitian');?>">SKEMA PENELITIAN</a></li>
					<li><a href="views/images/panduan.pdf">PANDUAN</a></li>

				</ul>
                            </li>
                        </div>


                        </div>
    </div>

            </div>

        </div> <!-- / #content -->

        <hr class="noPrint">

<!--        <div id="twitter">
            <div class="wrap clearFix">
                <span class="icon"></span>
                <p>Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis <a href="./">bit.ly/Pih1OA</a> <small>2 days ago</small></p>
            </div>
        </div>-->

        <hr>

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
