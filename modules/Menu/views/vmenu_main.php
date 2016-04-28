<!--=== Header ===-->
	<div class="navbar-header header header-sticky" style="background: black;">
		<div class="container-fluid">
			<!-- Logo -->
			<a class="navbar-brand logo" href="<?php echo base_url('Utama') ?>">
				<img src="<?php echo base_url($murl.'views/img/logo-ok.png')?>" >
			</a>
			<!-- End Logo -->


			<!-- Toggle get grouped for better mobile display -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="fa fa-bars"></span>
			</button>
			<!-- End Toggle -->
		</div><!--/end container-->

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse" style="background: black;">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<!-- Home -->
					<li class="dropdown active">
						<a href="<?php echo site_url('Utama') ?>" class="dropdown-toggle"  title="Home">
							Home
						</a>
						<ul class="dropdown-menu">
							<li ><a href="">Profile Uppm</a></li>
							<li ><a href="<?php echo site_url('Utama/info_terbaru') ?>">Info Terbaru</a></li>
						</ul>
					</li>
					<!-- End Home -->

					<!-- Penelitian -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Penelitian
						</a>
						<ul class="dropdown-menu">
							
							<li>
								<a href="javascript:void(0);">Profile Penelitian</a>
							</li>
							<li>
								<a href="javascript:void(0);">Skema Penelitian</a>
							</li>
							<li>
								<a href="javascript:void(0);">Panduan</a>
							</li>
							
						</ul>
					</li>
					<!-- End Penelitian -->

					<!-- Pengabdian -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Pengabdian Masyarakat
						</a>
						<ul class="dropdown-menu">
							
							<li>
								<a href="javascript:void(0);">Profile Pengabdian Masyarakat</a>
							</li>
							<li>
								<a href="javascript:void(0);">Skema Pengabdian Masyarakat</a>
							</li>
							<li>
								<a href="javascript:void(0);">Panduan</a>
							</li>
							
						</ul>
					</li>
					<!-- End Pengabdian -->

					<!-- HKI -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							HKI
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="">Hak Paten</a>
							</li>
							<li>
								<a href="">Hak Cipta</a>
							</li>
							<li>
								<a href="">Hak Sirkuit Terpadu</a>
							</li>
							<li>
								<a href="">Hak Desain Industri</a>
							</li>
						</ul>
					</li>
					<!-- End HKI -->

					<!-- Publikasi -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Publikasi Ilmiah
						</a>
						<ul class="dropdown-menu">
							<li >
								<a href="http://jurnal.polban.ac.id/">Jurnal Nasional</a>
							</li>
							<li >
								<a href="http://irwns.polban.ac.id/">Prosiding IRWNS</a>
							</li>
							<li >
								<a href="">Artikel Internasional</a>
							</li>
							
						</ul>
					</li>
					<!-- End Publikasi -->


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
													<li><a href="shortcode_typo_general.html"><i class="fa fa-sort-alpha-asc"></i> Kerja Sama Dengan Mitra</a></li>
													<li><a href="shortcode_typo_headings.html"><i class="fa fa-magic"></i> Bentuk Kerjasama</a></li>
													<!-- End Profile -->

												</ul>
											</div>
											<div class="col-md-6 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>Profile Mitra</h3></li>

													<!-- Mitra -->
													<li><a href="shortcode_btn_general.html"><i class="fa fa-flask"></i> Nama Mitra</a></li>
													<li><a href="shortcode_btn_brands.html"><i class="fa fa-html5"></i> Logo Mitra</a></li>
													<li><a href="shortcode_btn_effects.html"><i class="fa fa-bolt"></i> Tahun KerjaSama</a></li>
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

					<!-- Login Pages -->
					<li>
						<a href="">
							Login
						</a>
					</li>
					<!-- Login Pages -->

					
				</ul>
			</div><!--/end container-->
		</div><!--/navbar-collapse-->
	</div>
	<!--=== End Header ===-->