<?php
	$Nomor	= $_GET['nis'];
	$hapus	= mysqli_query($conn,"DELETE FROM santri WHERE nis = '$Nomor' ");
	if ($hapus) {
		echo "<script>alert('Data Berhasil Dihapus');window.location='?page=data-santri'</script>";
	}
?>