<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Luxus a Interior architects Multipurpose Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url($murl.'views/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url($murl.'views/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url($murl.'views/css/lightbox.css') ?>" type="text/css" media="all" />
<link href="<?php echo base_url($murl.'views/css/component.css') ?>" rel="stylesheet" type="text/css"  />
<script src="<?php echo base_url($murl.'views/js/modernizr.custom.js') ?>"></script>
<!-- js -->
<script src="<?php echo base_url($murl.'views/js/jquery-1.11.1.min.js') ?>"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php echo base_url($murl.'views/js/move-top.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url($murl.'views/js/easing.js') ?>"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
</head>
<!-- slide-toggle-menu -->
 <body class="cbp-spmenu-push">
       <!--top-header-->
		<!--bottom-->
		  <section class="button">
					<button id="showLeftPush"><img src="<?php echo base_url($murl.'views/images/menu.png') ?>" alt=""></button>
		   </section>
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<h3>Menu</h3>
						<a href="index.html" class="active">HOME</a>
						<a href="about.html">ABOUT</a>
						<a href="shortcodes.html">SHORT CODES</a>
						<a href="gallery.html">GALLERY</a>
					    <a href="blog.html">BLOG</a>
						<a href="contact.html">CONTACT</a>
				<ul class="social-icons text-center">
					<li><a href="#" class="f1"></a></li>
					<li><a href="#" class="f2"></a></li>
					<li><a href="#" class="f3"></a></li>
					<li><a href="#" class="f4"></a></li>
				</ul>
		  </nav>
		  
		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="<?php echo base_url($murl.'views/js/classie.js') ?>"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
<!-- banner -->
<div class="banner">
	<div class="logo">
		<h1><a href="index.html">LUXUS</a></h1>
	</div>
	<div class="search-in">
			<div class="search" style="display: none;">
				<form>
					<input type="text" class="text">
					<input type="submit" value="SEARCH">
				</form>
				<div class="close-in"><img src="<?php echo base_url($murl.'views/images/close.png') ?>" alt=""></div>
			</div>
			<div class="right"><button> </button></div>
	</div>
			<script type="text/javascript">
				$('.search').hide();
				$('button').click(function (){
				$('.search').show();
				$('.text').focus();
				}
				);
				$('.close-in').click(function(){
				$('.search').hide();
				});
			</script>
	<div class="banner-info">
		<script src="<?php echo base_url($murl.'views/js/responsiveslides.min.js') ?>"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
		<div id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>WELCOME TO LUXUS</h3>
							<h4>CREATIVE STYLES AND COMFORT GIVES YOU MORE FLEXIBLE</h4>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>WELCOME TO LUXUS</h3>
							<h4>WE PROVIDE BEST DESIGN ADVICE FOR YOUR INTERIOR DESIGN</h4>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>WELCOME TO LUXUS</h3>
							<h4>DESIGN FURNITURE ELITE AND MODERN COLLECTIONS</h4>
						</div>
					</li>
				</ul>
		</div>
	</div>
	<div class="scroll-button text-center"><a href="#hello" class="scroll"><img src="<?php echo base_url($murl.'views/images/arr1.png') ?>" alt="" /></a></div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div id="hello" class="banner-bottom">
	<div class="container">
		<div class="btm-header">
			<h3 class="tittle">HELLO!</h3>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
			doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
			veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim eaque ipsa quae ab illo inventore 
			veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		</div>
		<div class="bottom-grids">
			<div class="col-md-6 bottom-grid">
				<div class="btm-left">
					<img src="<?php echo base_url($murl.'views/images/aaa.png') ?>" alt="" />
				</div>
				<div class="btm-right">
					<h4>Aenean pulvinar</h4>
					<p>Nemo enim eaque ipsa quae ab illo inventore 
					veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					
					<div class="captn">
								
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 bottom-grid">
				<div class="btm-left">
					<img src="<?php echo base_url($murl.'views/images/bbb.png') ?>" alt="" />
				</div>
				<div class="btm-right">
					<h4>Aenean pulvinar</h4>
					<p>Nemo enim eaque ipsa quae ab illo inventore 
					veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					
					<div class="captn">
								
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner-bottom -->
<!-- highest -->
<div class="highest text-center">
	<div class="container">
		<h3>HIGHEST QUALITY MATERIALS <span>and perfect experience</span></h3>
		<p> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
		saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. 
		Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
		voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
		<a class="hvr-shutter-in-horizontal button" href="single.html">MORE</a>
	</div>
</div>
<!-- //highest -->
<!-- collections -->
<div class="collections">
	<div class="container">
		<h3 class="tittle-two">FURNITURE DESIGNS</h3>
		<div class="collection-grids cs-style-1">
			<div class="col-md-4 collection-grid grid">
				<figure>
						<img src="<?php echo base_url($murl.'views/images/g1.jpg') ?>" alt="">
						<figcaption>
							<h3>LUXUS</h3>
							<span>Accusantium Dolor</span>
							<a class="example-image-link" href="<?php echo base_url($murl.'views/images/g11.jpg') ?>" data-lightbox="example-1" data-title="Luxus">VIEW</a>
						</figcaption>
				</figure>
			</div>	
			<div class="col-md-8 collection-grid grid">
				<figure>
						<img src="<?php echo base_url($murl.'views/images/2.jpg') ?>" alt="">
						<figcaption>
							<h3>LUXUS</h3>
							<span>Accusantium Dolor</span>
							<a class="example-image-link" href="<?php echo base_url($murl.'views/images/22.jpg') ?>" data-lightbox="example-1" data-title="Luxus">VIEW</a>
						</figcaption>
				</figure>
			</div>
			<div class="col-md-4 collection-grid grid">
				<figure>
						<img src="<?php echo base_url($murl.'views/images/g66.jpg') ?>" alt="">
						<figcaption>
							<h3>LUXUS</h3>
							<span>Accusantium Dolor</span>
							<a class="example-image-link" href="<?php echo base_url($murl.'views/images/g66.jpg') ?>" data-lightbox="example-1" data-title="Luxus">VIEW</a>
						</figcaption>
				</figure>
			</div>	
			<div class="col-md-4 collection-grid grid">
				<figure>
						<img src="<?php echo base_url($murl.'views/images/g44.jpg') ?>" alt="">
						<figcaption>
							<h3>LUXUS</h3>
							<span>Accusantium Dolor</span>
							<a class="example-image-link" href="<?php echo base_url($murl.'views/images/g44.jpg') ?>" data-lightbox="example-1" data-title="Luxus">VIEW</a>
						</figcaption>
				</figure>
			</div>	
			<div class="col-md-4 collection-grid grid">
				<figure>
						<img src="<?php echo base_url($murl.'views/images/g55.jpg') ?>" alt="">
						<figcaption>
							<h3>LUXUS</h3>
							<span>Accusantium Dolor</span>
							<a class="example-image-link" href="<?php echo base_url($murl.'views/images/g55.jpg') ?>" data-lightbox="example-1" data-title="Luxus">VIEW</a>
						</figcaption>
				</figure>
			</div>
			<div class="col-md-8 collection-grid grid">
				<figure>
						<img src="<?php echo base_url($murl.'views/images/g3.jpg') ?>" alt="">
						<figcaption>
							<h3>LUXUS</h3>
							<span>Accusantium Dolor</span>
							<a class="example-image-link" href="<?php echo base_url($murl.'views/images/g33.jpg') ?>" data-lightbox="example-1" data-title="Luxus">VIEW</a>
						</figcaption>
				</figure>
			</div>
			<div class="col-md-4 collection-grid grid">
				<figure>
						<img src="<?php echo base_url($murl.'views/images/g7.jpg') ?>" alt="">
						<figcaption>
							<h3>LUXUS</h3>
							<span>Accusantium Dolor</span>
							<a class="example-image-link" href="<?php echo base_url($murl.'views/images/g77.jpg') ?>" data-lightbox="example-1" data-title="Luxus">VIEW</a>
						</figcaption>
				</figure>
			</div>	
			<div class="clearfix"></div>
		</div>
		 <script src="<?php echo base_url($murl.'views/js/lightbox.js') ?>"></script>
	</div>
</div>
<!-- collections -->
<!-- comfort -->
<div class="comfort">
	<div class="container">
		<h3 class="tittle-three">OUR IDEAS</h3>
		<div class="comfort-grids">
			<div class="col-md-4 comfort-grid">
				<div class="com-left">
					<p>01</p>
				</div>
				<div class="com-right">
					<h4>DESIGN</h4>
				</div>
				<div class="clearfix"></div>
				<p>Nemo enim eaque ipsa quae ab illo inventore 
					veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			</div>
			<div class="col-md-4 comfort-grid">
				<div class="com-left">
					<p>02</p>
				</div>
				<div class="com-right">
					<h4>RESULTS</h4>
				</div>
				<div class="clearfix"></div>
				<p>Nemo enim eaque ipsa quae ab illo inventore 
					veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			</div>
			<div class="col-md-4 comfort-grid">
				<div class="com-left">
					<p>03</p>
				</div>
				<div class="com-right">
					<h4>SERVICES</h4>
				</div>
				<div class="clearfix"></div>
				<p>Nemo enim eaque ipsa quae ab illo inventore 
					veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //comfort -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<h2><a href="index.html">LUXUS</a></h2>
		<div class="footer-grids">
			<div class="col-md-3 footer-grid">
				<h3>KEEP IN TOUCH</h3>
				<ul>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Behance</a></li>
					<li><a href="#">Dribbble</a></li>
					<li><a href="#">Vimeo</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h3>SITES</h3>
				<ul>
					<li><a href="#">Tumblr</a></li>
					<li><a href="#">Pinterest</a></li>
					<li><a href="#">Linkedin</a></li>
					<li><a href="#">Email</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid special-icons">
				<h3>LIKE</h3>
				<ul>
					<li><a href="#" class="fb">Facebook</a></li>
					<li><a href="#" class="twitt">Twitter</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h3>COPYRIGHT</h3>
				<p> &copy; 2015 Luxus. All Rights Reserved | Design  by <a href="http://w3layouts.com" target="target_blank">W3layouts</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="<?php echo base_url($murl.'views/js/bootstrap.js') ?>"></script>
	<!-- js -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>