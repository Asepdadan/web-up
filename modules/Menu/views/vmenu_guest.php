<header>
        <div class="navbar-header">
            <div class="container-fluid" >

                <a  id="logo" href="./"  class="navbar-brand" style="margin-top: 0px;"><img src="<?php echo base_url ($murl.'views/img/logo-ok.png');?>" width="200" height="50"class="img-responsive"></a>
                </div>
            </div>
            <div class="wrap">
            
                <hr>

                <nav>
                    <div id="nav">
                        <strong><span class="glyphicon glyphicon-align-justify"></span></strong>
                        <ul>
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
                                    <li><a href="<?php echo site_url('Penelitian/profile_penelitian') ?>">Profil Peneliti</a></li>
                                    <li><a href="<?php echo site_url('Penelitian/skema_penelitian') ?>">Skema Penelitian</a></li>
                                    <li><a href="#">Panduan</a></li>                            
                                 </ul>

                            </li>

                               <li class="parent">
                                <a  href="<?php echo site_url('Pengabdian_masyarakat/profile') ?>">Pengabdian Masyarakat</a>
                                <ul>
                                    <li><a href="<?php echo site_url('Pengabdian_masyarakat/profile') ?>">Profil Pengabdian Masyarakat</a></li>
                                    <li><a href="<?php echo site_url('Pengabdian_masyarakat/skema') ?>">Skema Pengabdian Masyarakat</a></li>
                                    <li><a href="<?php echo site_url('Pengabdian_masyarakat/pengaduan') ?>">Panduan</a></li>
                                 </ul>
                            </li>

                                     <li class="parent">
                               <a href="#">HKI</a>
                            <ul>
                                 <li><a href="#">Hak Intektual</a></li>
                                <li><a href="#">Hak Cipta</a></li>
                                <li><a href="#">Hak Paten</a></li>
                                <li><a href="#">Hak Sirkuit Terpadu</a></li>
                                <li><a href="#">Hak Desain Industri</a></li>


                            </ul>
                           </li>


                           <li class="parent">
                               <a href="#">Publikasi Ilmiah</a>
                            <ul>
                                 <li><a href="http://jurnal.polban.ac.id/" target="blank">Jurnal Nasional</a></li>
                                <li><a href="http://irwns.polban.ac.id/" target="blank">Prosiding IRWNS</a></li>
                                <li><a href="#">Artikel Internasional</a></li>

                            </ul>
                           </li>

                            <li class="parent">
                               <a href="#">Kerjasama</a>
                               <ul class="dropdown-menu">
                                 <li class="dropdown-submenu"><a href="#">Profile Kerjasama</a>
                                 </li>
                                <li><a href="#" target="blank">Profile Mitra</a></li>

                            </ul>
                            </li>

                            <li>
                                <a href="./" title="Login">Login</a>
                            </li>

                        </ul>   
                    </div>
                </nav>

            </div>
        </header>
