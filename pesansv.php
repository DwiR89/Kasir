<?php
include "konek.php";

$no=$_GET['no'];
$view_order=mysql_query("select * FROM transaksi where no='$no'") or die ('select eror');
$no;
while($q=mysql_fetch_array($view_order)){
	$na=$q['daftar'];
	$h=$q['harga'];
	mysql_query("INSERT INTO order VALUE(NULL, '$na','$h')");
	$no++;
}
header("location:pesanan.php");
?>
