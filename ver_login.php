<?php
session_start();

$username= $_POST['username'];
$password= $_POST['password'];

if($password=='4d1N_ZaZ4' &&  $username='projectSI'){
	
	header("location:ad/admin_water.php");
}
else{ 
	echo '<script language="javascript">';
	echo 'alert("Password salah Ulangi Kembali")';
	echo '</script>';
}
?>