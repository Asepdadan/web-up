<!--=== Css / Html ===-->		
<?php echo modules::run('Utama/header');  ?>
<!--=== Css / Html ===-->		

<!--=== Menu ===-->		
<?php echo modules::run('Menu/main');  ?>
<!--=== Menu ===-->

		<!--=== Slider ===-->
	<div class="slider-inner">
		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<div class="container">
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<h1><i>Unit Penelitian dan Pengabdian Kepada Masyarakat<br> (UPPM)</i> <br /></h1>
				<strong style="color:black;" class="text-justify text-info"><i>Sejalan dengan Tujuan Renstra Pendidikan Tinggi 2010-2014 nomor tiga, yaitu ketersediaan pendidikan tinggi indonesia yang bermutu dan relevan dengan kebutuhan pembangunan nasional sehingga berkontribusi secara nyata kepada peningkatan daya saing bangsa, Ditjen Dikti yakin bahwa hal tersebut dapat dicapai melalui pendidikan, penelitian, dan pengabdian kepada masyarakat di perguruan tinggi

 				</i></strong>						

					</div>
				</div>
				</div>
			</div>
		</div>
	</div><!--/slider-->
	<!--=== End Slider ===-->

	<!--=== Content Part ===-->
	<div class="container content-sm" >

		<div class="headline"><h2>Pengumuman & Informasi</h2></div><hr>
		<!-- Service Blocks -->
		<div class="row margin-bottom-30" >
		<?php foreach($query as $row) {?>
			<div class="col-md-6" >
				<div class="service">
				<span class="glyphicon glyphicon-time"></span>  <?php echo $row->tanggal_upload; ?>
					<div class="desc">
						<h4><?php echo $row->judul; ?></h4>
						<p><?php
						$words = explode(" ",$row->isi);
    					$isi = implode(" ",array_splice($words,0,10));
						 echo $isi." ... <a href=''>Read More</a>"; ?>...</p>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
		<!-- End Service Blokcs -->


		<!-- Recent Works -->
		<div class="headline"><h2>Agenda</h2></div><hr>
		<div class="row margin-bottom-20">
			<?php foreach($query as $row) {?>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnails thumbnail-style thumbnail-kenburn">
					<div class="thumbnail-img">
						<div class="overflow-hidden">
							<img class="img-responsive" src="<?php echo base_url($murl.'views/img/middle1.png')?>" alt="">
						</div>
						<a class="btn-more hover-effect" href="#">read more +</a>
					</div>
					<div class="caption">
						<h3><a class="hover-effect" href="#"><?php echo $row->judul; ?></a></h3>
						<p><?php
						$words = explode(" ",$row->isi);
    					$isi = implode(" ",array_splice($words,0,20));
						 echo $isi." ... <a href=''>Read More</a>"; ?></p>

						 <strong>Admin</strong> Polban
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<!-- End Recent Works -->




	</div><!--/container-->
	<!-- End Content Part -->


<!--=== JS / Html ===-->		
<?php echo modules::run('Utama/footer');  ?>
<!--=== JS / Html ===-->		