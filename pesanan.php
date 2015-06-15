<?php include "konek.php"; 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>dwi rahmat</title>


<body>


	<div class="menu">
	<ul div="nav">
		<li><a href="home.php">HOME</a></li>
		<li><a href="#">MENU</a></li>
		<li><a href="#">CONTAC US</a></li>
	<li>
	</ul>
	</div>
	<div class="header">
		<div class="subheader1">
		<img src="BO5XakICEAAxr2.png" height="120" width="200" alt="image" />
		</div>
		
		<div class="subheader">
		<a href="login.php">Admin</a>
		</div>
	</div>

	<div class="content1">
		<center><form method="POST" action="totalsv.php">
		No pesanan:<br><input type="text"  name="no"/><br>
		Nama:<br><input type="text" name="nama"><br>
		alamat:<br><input type="text" name="alamat"><br>
		<input type="submit" name="KIRIM" value="KIRIM"/>
		</form>
		</center>
	
	</div>


	<div class="footer">
	copyright@Kay_Ramen
	</div>
</body>
</html>