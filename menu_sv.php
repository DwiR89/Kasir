<?php
include"konek.php";

$n = $_POST['nama'];
$h = $_POST['harga'];
$f = $_POST['foto'];

//mysql_query("INSERT INTO produk VALUE(NULL, '$n','$h','$f')");
mysql_query("INSERT INTO `produk` (`no`, `nama`, `harga`, `foto`) VALUES (NULL, '$n', '$h', '$f')");
header("Location:menu1.php")


?>