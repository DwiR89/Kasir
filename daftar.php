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
		<li><a href="home1.php">HOME</a></li>
		<li><a href="">PESANAN</a></li>
		<li><a href="menu1.php">MENU</a></li>
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
		<div class="subcon">
		<center><table width="200px">
		<form method="post" action="pesansv.php">
		<?php
		
		$view_order = mysql_query("select * FROM transaksi");
		$a=1;
		while($view=mysql_fetch_array($view_order)){
				$no = $view['no'] ;
				$na = $view['daftar'];
				$h = $view['harga'];
		echo"<h1><tr><td>$na</td><td>$h</td></tr></h1>";
		$a++;
		}
		?>
		</form>
		</table></center>
		</div>
		
		<div class="subconn">
		<center><?php
		
		$pil = mysql_query("select * FROM pesanan");
		$no=1;
		while($view=mysql_fetch_array($pil)){
				$no = $view['no'] ;
				$na = $view['nama'];
				$a = $view['alamat'];
		echo"<h2><tr><td>$no</td>||<td>$na</td>||<td>$a</td></tr><h2>";
		$no++;
		}
		?>
		</center>

		</div>
	
	</div>


	<div class="footer">
	copyright@Kay_Ramen
	</div>
</body>
</html>