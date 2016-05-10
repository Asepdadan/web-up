
<body class="header-fixed header-fixed-space-default">


<div class="wrapper">
	<!--=== Header ===-->
	<div class="header header-sticky" style="background: black;">
		<div class="container">
			<!-- Logo -->
			<a class="logo" href="<?php echo base_url('Utama')?>">
				<img src="<?php echo base_url($murl.'views/img/logo-ok.png')?>" class="img-responsive" width="200">
			</a>
			<!-- End Logo -->

			<!-- Topbar -->
			<div class="topbar">
				<ul class="loginbar text-right">
					<li><a href="page_faq.html">Bantuan</a></li>
					<li class="topbar-devider"></li>
					<li><a href="<?php echo base_url('Login'); ?>">Login</a></li>
				</ul>
			</div>
			<!-- End Topbar -->

			<!-- Toggle get grouped for better mobile display -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="fa fa-bars"></span>
			</button>
			<!-- End Toggle -->
		</div><!--/end container-->

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
			<div class="container">
				<ul class="nav navbar-nav">
					<!-- Home -->
					<li <?php if($menu == "Home") echo "class='dropdown active'";else echo "class='dropdown'"; ?>>
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Home
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('Utama/profile') ?>">Profile UPPM</a></li>

							<!-- One Page -->
							<li>
								<a href="<?php echo base_url('Utama/info_terbaru') ?>">Info Terbaru</a>
							</li>
							<!-- End One Page -->
						</ul>
					</li>
					<!-- End Home -->

					<!-- Penelitian -->
					<li <?php if($menu == "Penelitian") echo "class='dropdown active'"; else echo "class='dropdown'"; ?>>
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Penelitian
						</a>
						<ul class="dropdown-menu">
							<!-- About Pages -->
							<li >
								<a href="<?php echo base_url('Penelitian/profile')?>">Profile Penelitian</a>
							</li>
							<!-- End About Pages -->

							<!-- Service Pages -->
							<li >
								<a href="<?php echo base_url('Penelitian/skema_penelitian')?>">Skema Penelitian</a>
							</li>
							<!-- End Service Pages -->

							<!-- Contacts -->
							<li >
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
									Panduan
								</a>
							</li>
							<!-- End Contacts -->
						</ul>
					</li>
					<!-- End Penelitian -->

					<!-- Pengabdian Masyarakat -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Pengabdian Masyarakat
						</a>
						<ul class="dropdown-menu">
							<li >
								<a href="javascript:void(0);">Profile Pengabdian</a>
							</li>
							<li >
								<a href="javascript:void(0);">Skema Pengabdian</a>
							</li>
							<li >
								<a href="javascript:void(0);">Panduan</a>
							</li>
						</ul>
					</li>
					<!-- Pengabdian Masyarakat -->

					<!-- HKI -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							HKI
						</a>
						<ul class="dropdown-menu">
							<li >
								<a href="javascript:void(0);">Hak Intelektual</a>
							</li>
							<li >
								<a href="javascript:void(0);">Hak Cipta</a>
							</li>
							<li >
								<a href="javascript:void(0);">Hak Paten</a>
							</li>
							<li >
								<a href="javascript:void(0);">Hak Sirkuit Terpadu</a>
							</li>
							<li >
								<a href="javascript:void(0);">Hak Design Industri</a>
							</li>
							
						</ul>
					</li>
					<!-- End HKI -->

					<!-- Publikasi Ilmiah -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Publikasi Ilmiah
						</a>
						<ul class="dropdown-menu">
							<li >
								<a href="javascript:void(0);">Jurnal Nasional</a>
							</li>
							<li >
								<a href="javascript:void(0);">Prosiding IRWNS</a>
							</li>
							<li><a href="feature_gallery.html">Artikel Internasional</a></li>
							
						</ul>
					</li>
					<!-- End Publikasi Ilmiah -->

					<!-- Kerjasama -->
					<li class="dropdown mega-menu-fullwidth">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Kerjasama
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="mega-menu-content disable-icons">
									<div class="container">
										<div class="row equal-height">
											<div class="col-md-6 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>Profile Kerjasama</h3></li>

													<!-- Profile -->
													<li><a href="shortcode_typo_general.html"> Kerja Sama Dengan Mitra</a></li>
													<li><a href="shortcode_typo_headings.html"> Bentuk Kerjasama</a></li>
													<!-- End Profile -->

												</ul>
											</div>
											<div class="col-md-6 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>Profile Mitra</h3></li>

													<!-- Mitra -->
													<li><a href="shortcode_btn_general.html"> Nama Mitra</a></li>
													<li><a href="shortcode_btn_brands.html">Logo Mitra</a></li>
													<li><a href="shortcode_btn_effects.html"> Tahun KerjaSama</a></li>
													<!-- End Mitra -->
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<!-- End Kerjasama -->

					<!-- Search Block -->
					<!-- <li>
						<i class="search fa fa-search search-btn"></i>
						<div class="search-open">
							<div class="input-group animated fadeInDown">
								<input type="text" class="form-control" placeholder="Search">
								<span class="input-group-btn">
									<button class="btn-u" type="button">Go</button>
								</span>
							</div>
						</div>
					</li> -->
					<!-- End Search Block -->
				</ul>
			</div><!--/end container-->
		</div><!--/navbar-collapse-->
	</div>
	<!--=== End Header ===-->