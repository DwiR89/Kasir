<center><?php
session_start();
include 'konek.php';

$username=$_POST['username'];
$password=$_POST['password'];

$q=mysql_query("select * from data where username='$username' and password='$password'");
$row=mysql_fetch_array($q);
if($row['username']==$username and $row['password']==$password){
$_SESSION['username']=$username;
header('location:home1.php');
}else{
header("location:login.php");
echo "GAGAL OM!!";
}

?>