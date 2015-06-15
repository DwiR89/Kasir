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
		<li><a href="daftar.php">PESANAN</a></li>
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
		<Table width="200px">
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

		
		echo "<tr><td>$a</td><td>$b</td><td></td><td>$c</td><td>url($d);</td>,<td><a href='delete.php?no=$a'>Delete</a></td></tr > ";
		
		$i++;
		}
		?>
		</form>
		</table>
		</div>
		
		<div class="subconn">
	
		<form method="POST" action="menu_sv.php">
		No:<br><input type="text"  name="no"/><br>
		Nama:<br><input type="text" name="nama"><br>
		Harga:<br><input type="text" name="harga"><br>
		<input type="submit" name="simpan" value="simpan"/>
		</form>
		
		</div>
	
	</div>


	<div class="footer">
	copyright@Kay_Ramen
	</div>
</body>
</html>