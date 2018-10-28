<?php
session_start();
require_once("koneksi.php");
 
$namadepan=$_POST['namadepan'];
$_SESSION['namadepan']=$namadepan;
$namabelakang=$_POST['namabelakang'];
$_SESSION['namabelakang']=$namabelakang;
$nim=$_POST['nim'];
$_SESSION['nim']=$nim;
$kelas=$_POST['kelas'];
$_SESSION['kelas']=$kelas;
$hobi=$_POST['hobi'];
$_SESSION['hobi']=$hobi;
$genre=implode(',', $_POST['genre']);
$tempatwisata=implode(',',$_POST['tempatwisata']);
$_SESSION['tempatwisata']=$tempatwisata;
$tanggallahir=$_POST['tanggallahir'];
$_SESSION['tanggallahir']=$tanggallahir;


$sql="INSERT INTO data (namadepan,namabelakang,nim,kelas,hobi,genre,tempatwisata,tanggallahir) values ('$namadepan','$namabelakang','$nim','$kelas','$hobi','$genre','$tempatwisata','$tanggallahir')";

if(mysqli_query($koneksi,$sql)){
 echo "Online";
 header("location:dashboard.php");
}else{
	echo"Error:".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);

?>


