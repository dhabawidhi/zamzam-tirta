	<!DOCTYPE html>
<html>
<head>
	<title>Form Daftar </title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Form Lomba</a>
    </div>
  </div>
</nav>

<div class="container">
		<div class="row">
			<form action="ver_addlom.php" method="post" enctype="multipart/form-data" name="form1" target="_self" class="form-horizontal" role="form">
			
			<div class="col-md-4 col-md-offset-4 col-centered">
				<div class="form-group">
					<label class="control-label" for="inputSmall">Nama</label>
					<input class="form-control input-sm" type="text" id="inputSmall" name="namalomba">
				</div>
				
				<div class="form-group">
					<label class="control-label" for="inputSmall">Lokasi</label>
					<input class="form-control input-sm" type="text" id="inputSmall" name="lokasi">
				</div>
				
				<div class="form-group">
					<label class="control-label" for="inputSmall">Penyelenggara</label>
					<input class="form-control input-sm" type="text" id="inputSmall" name="lomba">
				</div>
				
				<div class="form-group">
					<label class="control-label" for="inputSmall">Tanggal Lomba</label>
					<input class="form-control input-sm" id="datepicker" type="date" id="inputSmall" name="tanggallomba">
				</div>
				
				<div class="form-group">
					<label class="control-label" for="inputSmall">Batas Pendaftaran</label>
					<input class="form-control input-sm" type="date" id="inputSmall" name="bataslomba">
				</div>
				
				<div class="form-group">
					<label class="control-label" for="inputSmall">Jenis Lomba</label>
					<input class="form-control input-sm" type="text" id="inputSmall" name="jenis">
				</div>
				
				<div class="form-group">
					<label class="control-label" for="inputSmall">Upload Poster</label>
					<input type="file" name="file">
				</div>
				
				<input type="submit" class="btn btn-primary btn-small" value="submit">
				<input type="reset" class="btn btn-warning btn-small" value="reset">
				
			</div>
			
			</form>
		</div>
	</div>
</body>


</html>