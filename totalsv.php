<?php
include"konek.php";

$no = $_POST['no'];
$na = $_POST['nama'];
$a = $_POST['alamat'];

mysql_query("INSERT INTO pesanan VALUE('$no','$na','$a')");
header("Location:pesanan.php")


?>