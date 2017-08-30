<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];

$cek= mysql_query(INSERT INTO `kotak saran`(`nama`, `email`, `isi`, `tempat`) VALUES ($nama, $email, $isi, 'waterpark'));
if($cek==1){
	echo '<script language="javascript">';
	echo 'alert("Terima Kasih telah memberikan masukan")';
	echo '</script>';
	header("location:kolam.php");
}
else{
	echo '<script language="javascript">';
	echo 'alert("Gagal memberikan komentar")';
	echo '</script>';
	header("location:kolam.php");
}
?>