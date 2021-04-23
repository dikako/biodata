<?php
include "koneksi.php";
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$query=mysqli_query($koneksi,"insert into biodata(nama, alamat, no_hp) values('$nama','$alamat','$no_hp')");
if($query){
 echo "Berhasil input data ke database ";
 ?><a href="tabel.php">Lihat data di Tabel</a><?php
}else{
 echo "Gagal input data";
 echo mysql_error();
}
?> 