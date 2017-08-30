<?php
include 'koneksi.php';

$nama=$_POST['nama'];
$telp=$_POST['telp'];
$jenis = $_POST['jenisLap'];
$waktu = $_POST['waktu'];
$tanggal= $_POST['tanggal'];

$cek=mysql_query("INSERT INTO `book_futsal`(`id_lapang`, `jam`, `tanggal`, `nomor_telpon`, `nama`) VALUES ('$jenis','$waktu','$tanggal','$telp','$nama')");
 
 if($cek==1){
 	?>
 	<script language="JavaScript">alert('Berhasil booking futsal');
	document.location=('futsal.php')</script>

<?php } 
else{
	echo "gagal";
}
?>