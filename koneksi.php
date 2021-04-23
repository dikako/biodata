<?php
$koneksi=mysqli_connect("localhost", "root", "", "latihandb");
//mysqli_select_db($koneksi,$database);
//cek koneksi
if($koneksi){
 //echo "berhasil koneksi";
}else{
 echo "gagal koneksi";
}
?> 