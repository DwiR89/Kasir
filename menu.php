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
		<li><a href="contac.php">CONTAC US</a></li>
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
		<div class="subcon">
		<center><table></center>
		<form method="post" action="menu_sv2.php">
		<Tr>
		<th>No</th>
		<th>Daftar</Th>
		<th></th>
        <th>Harga</th>
		<th>foto</th>
        <Th>tambah<th>
        </tr>
		<?php 
		$p=mysql_query("select * FROM produk") or die ('select eror');
		$i=1;
		while($row=mysql_fetch_array($p)){
		$a=$row['no'];	
		$b=$row['nama'];		
		$c=$row['harga'];	
		$d=$row['foto'];	

		
		echo "<tr><td>$a</td><td>$b</td><td></td><td>$c</td><td><img src='$d' width='90px' height='90px'></td>;</td><td><a href='menu_sv2.php?no=$a'>PESAN</a></td></tr > ";
		
		$i++;
		}
		?>
		</form>
		</table>
		</div>
		
		<div class="subconn">
		<table width="200px">
		<form method="post" action="pesansv.php">
		<?php
		
		$view_order = mysql_query("select * FROM transaksi");
		$a=1;
		while($view=mysql_fetch_array($view_order)){
				$no = $view['no'] ;
				$na = $view['daftar'];
				$h = $view['harga'];
		echo"<tr><td>$na</td><td>$h</td><td><a href='del.php?id=$no'>Delete</a></td></tr>";
		$a++;
		}
		echo"<a href='del.php?id=$no'>REFRESH</a>| |";
		echo"<a href='pesansv.php?no=$no'>PESAN</a>";
		?>
		
		</table>
		</form>
		<?php
			$sql = "SELECT SUM(harga) AS total_harga FROM transaksi ";
			$result = mysql_query($sql) or die (mysql_error());
			$t = mysql_fetch_array($result);
			echo "<h1>Total : Rp. " .($t['total_harga']) . " </h1>";
						
		?>
		
		</div>
	
	</div>


	<div class="footer">
	copyright@Kay_Ramen
	</div>
</body>
</html>