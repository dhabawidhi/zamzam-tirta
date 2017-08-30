<?php
include 'koneksi.php';

$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$nomor=$_POST["nomor"];
$tanggal=$_POST["tanggal"];
$banyak=$_POST["banyak"];

$cek=mysql_query("INSERT INTO `book_tiket`(`nama`, `alamat`, `nomor_telepon`, `jumlah tiket`, `tanggal`) VALUES ('$nama','$alamat','$nomor','$banyak','$tanggal')");
if($cek==1){
	?>
	<script language="JavaScript">alert('BERHASIL LOGOUT');
	document.location=('kolam.php')</script>
<?php
}
else
echo "gagal";

?>