<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Jejak Prestasi Mahasiswa IPB</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/etline-font.css">
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body id="top">
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ZamZam tirta</a>
    </div>
  </div>
</nav>

<div class="container">
	<div class="row">
		<form action="ver_bookroom.php" method="post" enctype="multipart/form-data" name="form1" target="_self" class="form-horizontal" role="form">
		<div class="col-md-6 col-sm-6 ">
			<div class="form-group">
				<label class="control-label" for="inputSmall">Nama</label>
				<input class="form-control input-sm" type="text" id="inputSmall" name="nama">
			</div>

			<div class="form-group">
				<label class="control-label" for="inputSmall">Alamat</label>
				<input class="form-control input-sm" type="text" id="inputSmall" name="alamat">
			</div>

			<div class="form-group">
				<label class="control-label" for="inputSmall">Nomor Telepon</label>
				<input class="form-control input-sm" type="text" id="inputSmall" name="nomor">
			</div>
			
			<div class="form-group">
				<label class="control-label" for="inputSmall">Tanggal</label>
				<input class="form-control input-sm" type="date" id="inputSmall" name="tanggal">
			</div>
			
			<div class="form-group">
				<label class="control-label" for="inputSmall">Keperluan</label>
				<input class="form-control input-sm" type="text" id="inputSmall" name="perlu">
			</div>

			<div class="form-group">
				<label class="control-label" for="inputSmall">Paket Waktu</label>
				<select class="form-control" id="select" name="paket">
					<option value="a">Paket 3 Jam</option>
					<option value="b">Paket 6 Jam</option>
				</select>
			</div>

			<input type="submit" class="btn btn-primary btn-small" value="submit">
			<input type="reset" class="btn btn-warning btn-small" value="reset">
			
		</div>
		
		</form>

		<div class="col-md-2 col-sm-2 ">
		</div>

		<div class="col-md-4 col-sm-4 ">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Syarat dan Ketentuan
				</div>
				<div class="panel-body">
					<strong>Gratis 1 tiket(setiap hari) dan potongan harga 10% (hari biasa) untuk rombongan diatas 25 orang </strong>
				</div>
			</div>
		</div>
	</div>
</div>



</body>

</html>