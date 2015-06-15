<?php
include "konek.php";

$id=$_GET['id'];
$p=mysql_query("select * FROM transaksi") or die ('select eror');
$i=1;
while($row=mysql_fetch_array($p)){
	mysql_query("delete * from transaksi where no='$i'") or die("delete error");
	$i++;
header("location:menu.php");
?>
