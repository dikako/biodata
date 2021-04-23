<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$query=mysqli_query($koneksi,"update biodata set nama='$nama', alamat='$alamat', no_hp='$no_hp' where id='$id'");
if($query){
 echo "Berhasil update data ke database ";
 ?><a href="tabel.php">Lihat data di Tabel</a><?php
}else{
 echo "Gagal update data";
 echo mysql_error();
}
?> 
