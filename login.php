<?php include "konek.php"; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>dwi rahmat</title>


<body>
<div class="wrap">

	<div class="menu">
	<ul div="nav">
		<li><a href="#">HOME</a></li>
		<li><a href="#">PROFIL</a></li>
		<li><a href="#">PRODUK</a></li>
		<li><a href="#">CONTAC US</a></li>
	<li>
	</ul>
	</div>
	<div class="header">
		<div class="subheader1">
		<center><img src="BO5XakICEAAxr2.png" height="120" width="200" alt="image" /></center>
		</div>
		
	</div>

	<div class="content1">
	<center>
		<div class="subconnn">
			<form method="post" action="cek_login.php">
					<br><br><br><br>
					Username:<input type="text" placeholder="Username.." name="username"/><br><p>
					Password:<input type="password" placeholder="Password.." name="password"/><p>
					<input type="submit" name="login" value="Login"/>
					<a href="home.php">Kembali</a>
			</form>
		</div>
	</center>	
	</div>

	<div class="footer">
	copyright@aplah
	</div>
</div>

</body>
</html>