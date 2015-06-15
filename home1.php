<?php
SESSION_start();
if(empty($a=$_SESSION['username'])){
header('location:login.php');
}else{
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>dwi rahmat</title>


<body>
<div class="wrap">

	<div class="menu">
	<ul div="nav">
		<li><a href="home1.php">HOME</a></li>
		<li><a href="daftar.php">PESANAN</a></li>
		<li><a href="menu1.php">PRODUK</a></li>
	<li>
	</ul>
	</div>
	<div class="header">
		<div class="subheader1">
		<img src="BO5XakICEAAxr2.png" height="120" width="200" alt="image" />
		</div>
		
		<div class="subheader">
		<a href="home.php">logout</a>
		</div>
	</div>

	<div class="content1">
	content 1
	</div>

	<div class="footer">
	copyright@aplah
	</div>
</div>

</body>
</html>
<?php
}
?>