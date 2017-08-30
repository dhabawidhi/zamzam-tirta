<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


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
					<form action="coba.php" method="post">
					<div class="col-md-8">
						<div class="form-group">
	  						<input class="form-control" id="focusedInput" type="text" name="nama" placeholder="masukkan nama...">
	  						<br>
							
							<div class="input-group">
							    <span class="input-group-addon">+62</span>
							    <input type="text" class="form-control" name="telp" placeholder="masukkan nomor telepon...">
							  </div>
	  						<br>
	  							  						
							<label for="select" class="control-label">Jenis Lapang Futsal</label>
					        <select class="form-control" name="jenisLap">
					          <option value="a">Lapang Rumput Sintetis</option>
					          <option value="b">Lapang Tembok</option>
					        </select>
					        <br>

					        <label for="select" class="control-label">Tanggal Booking</label>
					        	<input class="form-control" id="focusedInput" type='text' id='datepicker' name="tanggal"></input>
					        <br>

					        <label for="select" class="control-label">Waktu Booking</label>
					        <select class="form-control" id="select" name="waktu">
					          <option value="a">10:00-12:00</option>
					          <option value="b">12:00-14:00</option>
					          <option value="c">14:00-16:00</option>
					          <option value="d">16:00-18:00</option>
					        </select>
					        <br>

					         <span class="text-center">
       							<button type="reset" class="btn btn-default">Cancel</button>
        						<button type="submit" class="btn btn-primary">Booking!!</button>
      						</span>
      				</form>
					</div>
					</div>
		    						
				</div>
			</div>
		</section>


</body>
</html>>