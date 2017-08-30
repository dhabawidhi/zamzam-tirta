<?php
include 'koneksi.php';

$fetch=mysql_query("SELECT * From book_futsal");
while($row=mysql_fetch_array($fetch)){
	$lap=$row['id_lapang'];
	$jam=$row['jam'];

	if($lap==)
}

?>