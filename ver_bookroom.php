<?php
include 'koneksi.php';

$nama=$_POST['nama'];
$telp=$_POST['nomor'];
$alamat = $_POST['alamat'];
$tanggal= $_POST['tanggal'];
$keperluan=$_POST['perlu'];
$paket=$_POST['paket'];

#echo $nama.' '.$telp.' '.$alamat.' '.$keperluan.' '.$tanggal.' '.$paket;

$cek=mysql_query("INSERT INTO `book_room`(`nama`, `nomor`, `alamat`, `tanggal`, `paket_waktu`, `keperluan`) VALUES ('$nama', '$telp', '$alamat', '$tanggal', '$paket', '$keperluan')");
 
 if($cek==1){
?>
	<script language="JavaScript">alert('berhasil booking');
	document.location=('room.php')</script>

<?php
 }
?>