
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <link rel="shortcut icon" href="/img/favicon-16x16.png" type="image/x-icon" /><title>ZAM-ZAM TIRTA</title>		
		<!-- Meta Description -->
        <meta name="descri	ption" content="One Page Creative HTML5 Content">
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
                        <li><a href="#harga">Harga</a></li>
                        <li><a href="#jadwal">Jadwal</a></li>
                        <li><a href="#booking">Booking </a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->


    	<!--
        Services
        ==================================== -->
		
		<section id="booking" class="service">
		<br><br>
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Pemesanan Lapangan Futsal</h2>
						<div class="devider"><i class="fa fa-hand-o-down fa-lg"></i></div>
					</div>

					<div class="col-md-2">
					</div>

					<div class="col-md-8">
					<form action="daftar.php">
						<div class="form-group">

							<label for="nama" class="control-label">Nama</label>							
	  						<input class="form-control" id="focusedInput" type="text" name="nama" placeholder="masukkan nama...">
	  						<br>

							<label for="telp" class="control-label">Telepon</label>								
							<div class="input-group">
							    <span class="input-group-addon">+62</span>
							    <input type="text" class="form-control" name="telp" placeholder="masukkan nomor telepon...">
							  </div>
	  						<br>
				
							<label for="alamat" class="control-label">Alamat</label>	  						
	  						<input class="form-control" id="focusedInput" type="text" name="alamat" placeholder="masukkan alamat...">
							<br>
							
							<label for="select" class="control-label">Jenis Lapang Futsal</label>
					        <select class="form-control" id="select">
					          <option>Lapang Rumput Sintetis</option>
					          <option>Lapang Tembok</option>
					        </select>
					        <br>

					        <label for="select" class="control-label">Tanggal Booking</label>
					        	<input class="form-control" id="focusedInput" type="date" name="tanggal"></input>
					        <br>

					        <label for="select" class="control-label">Waktu Booking</label>
					        <select class="form-control" id="select">
					          <option>10:00-12:00</option>
					          <option>12:00-14:00</option>
					          <option>14:00-16:00</option>
					          <option>16:00-18:00</option>
					        </select>
					        <br>

					         <span class="text-center">
       							<button type="reset" class="btn btn-default">Cancel</button>
        						<button type="submit" class="btn btn-primary">Booking!!</button>
      						</span>
					</div>
					</form>
					</div>
		    						
				</div>
			</div>
		</section>
		

        <!--
        End Features
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