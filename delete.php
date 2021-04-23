<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$query=mysqli_query($koneksi,"delete from biodata where id='$id'");
	if($query){
	 ?><script language="javascript">document.location.href="tabel.php";</script><?php
	}else{
	 echo "gagal hapus data";
	}
?> 