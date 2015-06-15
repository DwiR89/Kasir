<?php
include "konek.php";

$no=$_GET['no'];

$p=mysql_query("SELECT * FROM produk where no='$no'") or die ('select eror');
$row=mysql_fetch_array($p);

$na=$row['nama'];
$h=$row['harga'];
$f=$row['foto'];

mysql_query("INSERT INTO transaksi VALUE(NULL, '$na','$h','$f')");
header("Location:menu.php");
?>