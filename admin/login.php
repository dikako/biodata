<?php session_start();
include "../koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($koneksi,"select * from admin where username='$username' and pass='$password'");
$cek=mysqli_fetch_array($query);
if($cek){
$_SESSION['username']=$username;
?>Anda berhasil login. silahkan menuju <a href="home.php">Halaman HOME</a><?php
}else{
?>Anda gagal login. silahkan <a href="form_admin.php">Login kembali</a><?php
echo mysqli_error($koneksi);
}
?>