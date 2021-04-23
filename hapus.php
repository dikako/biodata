<?php 
require 'fungsi.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ){
	echo "
	<script>
				alert('data berhasil di HAPUS!');
				document.location.href = 'colom_biodata.php';
				</script>
	";
} else {
	echo "gagal";
	echo "<br>";
				echo mysqli_error($conn);
}

?>