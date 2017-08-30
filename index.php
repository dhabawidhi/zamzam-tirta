
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <link rel="shortcut icon" href="/img/favicon-16x16.png" type="image/x-icon" /><title>ZAM-ZAM TIRTA</title>		
		<!-- Meta Description -->
        <meta name="description" content="One Page Creative HTML5 Content">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, web development, website, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Diego Perdana">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->

	<script>
	function initialize() {
	  var mapProp = {
		center:new google.maps.LatLng(-6.450340, 106.731406),
		zoom:18,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	
	var marker=new google.maps.Marker({
		position:new google.maps.LatLng(-6.450340, 106.731406),
	});
	marker.setMap(map);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
        
	<link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">
	
		<!-- Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						
							<img src="images/logoHeader.png" alt="Brandi" height="150%" style="margin-top: 15%; margin-left: 15%;">
					
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#features">Motto</a></li>
                        <li><a href="#services">Layanan </a></li>
                        <li><a href="#fasilitas">Fasilitas </a></li>
                        <li><a href="#about">Tentang </a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<section id="slider" style="height: 750px;">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height: 750px;">
			
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
					<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox" style="height: 750px;">

					<!-- single slide -->

					<div class="item active left" style="height: 100%;  background-image: url(&quot;images/waterpark.jpg&quot;);">

						<div class="carousel-caption">
							<img src="images/logoHeader.png" alt="Brandi" style="width: 40%; margin-top: 40%; visibility: visible; animation-duration: 700ms; animation-delay: 500ms; animation-name: bounceInDown;" data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated animated">
							<br><br>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated animated" style="visibility: visible; animation-duration: 500ms; animation-name: slideInLeft;"><span class="color">Lorem</span> Ipsum Dolor Sit Amet </h3>
					
						</div>

					</div>
					<!-- end single slide -->
					
					<!-- single slide -->
					<div class="item next left" style="height: 100%; background-image: url(&quot;images/reception.jpg&quot;);">
						<div class="carousel-caption">
							<img src="images/logo-reception.png" alt="Brandi" style="width: 40%; margin-top: -30%; visibility: visible; animation-duration: 500ms; animation-delay: 500ms; animation-name: bounceInDown;" data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated animated">
							<br><br>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated animated" style="visibility: visible; animation-duration: 500ms; animation-name: slideInLeft;"><span class="color">Lorem</span> Ipsum Dolor Sit Amet </h3>
						</div>
					</div>
					<!-- end single slide -->

					<div class="item next left" style="height: 100%;  background-image: url(&quot;images/futsal.jpg&quot;);">

						<div class="carousel-caption">
							<img src="images/logo-futsal.png" alt="Brandi" style="width: 40%; margin-top: -30%; visibility: visible; animation-duration: 700ms; animation-delay: 500ms; animation-name: bounceInDown;" data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated animated">
							<br><br>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated animated" style="visibility: visible; animation-duration: 500ms; animation-name: slideInLeft;"><span class="color">Lorem</span> Ipsum Dolor Sit Amet </h3>
							
						</div>

					</div>
					<!-- end single slide -->

				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>		
        <!--
        Features
        ==================================== -->
		
		<section id="features" class="features">
			<br><br>

			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>motto kami</h2>

						<div class="devider"><i class="fa fa-check-square-o  fa-lg"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-thumbs-up fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3 style="font-size:30px">Entertaning</h3>
								<p style="font-size:15px"> Airnya bening langsung dari mata air pegunungan. Airnya segar Jernih menyehatkan Alamiah</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-heart fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3 style="font-size:30px">Fun</h3>
								<p style="font-size:15px">Fasilitas lengkap dengan berbagai permainan untuk anda dan keluarga anda</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-users fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3 style="font-size:30px"> Refreshing </h3> 
								<p style="font-size:15px">Diiringi live music di hari sabtu dan minggu membuat weekend anda tambah seru</p>
							</div>
						</div>
					</div>
                    <!-- end service item -->
						
				</div>
			</div>
		</section>
		
        <!--
        End Features
        ==================================== -->
		
	      <!--
        Services
        ==================================== -->
		
		<section id="services" class="services">
		<br><br>
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Layanan</h2>
						<div class="devider"><i class="fa fa-hand-o-down fa-lg"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="text-center">
							<a href="kolam.php">
							<h3 class="desc"> Waterpark </h3>
							<img src="images/private.jpg" width="80%" height="20%" />
							</a>
						</div>
						<br><br>
						<p class="popo"><strong>Waterpark </strong>﻿Taman Wisata Air Pegunungan sejak tahun 1998 yang berada di Ciomas,  Bogor. 7 kolam renang dengan kedalaman air 35cm - 185cm serta ada juga Waterboom, Water Splash (ember tumpah) kini melengkapi sarana bermain air bagi pengunjung setia Zam Zam Tirta yang harganya relatif terjangkau namun tetap terjamin kualitas kejernihan & kesegaran airnya.</p>
						<br>
						<a href="kolam.php">
							<button class="btn btn-primary">Yuk Renang!</button>
						</a>

					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="text-center">
							<a href="room.php">
							<h3 class="desc"> Private House</h3>
							<img src="images/kola.jpg" width="80%" height="20%" />
							</a>
							</div>
						<br><br>
						<p class="popo"><strong>GEDUNG SERBAGUNA </strong> dapat digunakan untuk pesta Pernikahan, Ulang tahun, Kumpul Keluarga / Sahabat, Perpisahan Siswa, dan lain sebagainya dengan view kolam renang & Gunung Salak. </p>
						<br>
						<a href="room.php">
							<button class="btn btn-warning">Yuk Intip!</button>
						</a>

					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="text-center">
							<a href="futsal.php">
						<h3 class="desc"> Futsal Court </h3>
						<img src="images/test.jpg" width="80%" height="20%" />
						</a>
						</div>
						<br><br>
						<p class="popo"><strong>Futsal </strong> la</p>
						<br>
						<a href="futsal.php">
							<button class="btn btn-success">Yuk Main!</button>
						</a>
					</div>
					<!-- end service item -->
		    						
				</div>
			</div>
		</section>
		
		<section id="about" class="features">
			<br><br>

			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Tentang Zam Zam Tirta</h2>

						<div class="devider"><i class="fa fa-check-square-o  fa-lg"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-12 popo wow fadeInLeft" data-wow-duration="500ms">
					<p> Taman Wisata Air Pegunungan sejak tahun 1998 yang berada di Ciomas, Bogor. Kejernihan dan Sejuknya air pegunungan menjadi daya tarik masyarakat yang datang dari wilayah Jabodetabek dan Sumatera.7 kolam renang dengan kedalaman air 35cm - 185cm serta ada juga Waterboom, Water Splash (ember tumpah) kini melengkapi sarana bermain air bagi pengunjung setia Zam Zam Tirta yang harganya relatif terjangkau namun tetap terjamin kualitas kejernihan & kesegaran airnya. Tak lepas dari itu kini Zam Zam Tirta Water Park mengusung konsep Refreshing, Fun and Entertaining sebagai motto & tagline kami serta selalu menyertakan Alam yang begitu bersahabat dengan kami dan pengunjung</p>
					</div>
					<!-- end service item -->
					
						
				</div>
			</div>
		</section>




		<!--
        Contact Us
        ==================================== -->		
		
		<section id="contact" class="contact">
		<br><br>
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Ayo datang dan hubungi kami</h2>
						<div class="devider"><i class="fa fa-paper-plane-o fa-lg"></i></div>
					</div>
										
					<!-- contact address -->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
							<h3>Alamat:</h3>
							<p style="font-size:14px;">Jl. Sukamaju No. 2A, Desa Pagelaran, Kec. Ciomas, Jawa Barat</p></br>
							<p style="font-size:16px;"><b>Telepon:</b></p>
							<p><i class="fa fa-phone-square fa-lg"></i> (0251) 8637448 </p> <br>

						<ul class="footer-social">
							<li><a href="https://www.facebook.com/ZamZamTirta"><i class="fa fa-facebook-official fa-3x"></i></a></li>
						</ul>
							
						</div>
					</div>
					<!-- end contact address -->
						
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div id="googleMap" style="height:380px;">
					</div>
					
				</div>
			</div>
						
		</section>
		
        <!--
        End Contact Us
        ==================================== -->
		
		
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright">
							made with <span class="fa fa-heart"> by 
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js"></script>
		
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
    </body>
</html>