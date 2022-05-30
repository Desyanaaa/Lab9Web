<?php
	include"koneksi.php";

	$sql = "DELETE FROM data_barang where id_barang='$_GET[id]'";
  $query = mysqli_query($conn,$sql);
	echo "<script>window.location='index.php'</script>";
?>
