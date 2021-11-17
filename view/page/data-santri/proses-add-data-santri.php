<?php
	$nis  		= mysqli_real_escape_string($conn,$_POST['nis']);
	$nama  		= mysqli_real_escape_string($conn,$_POST['nama']);
	$jenis_pem  = mysqli_real_escape_string($conn,$_POST['jenis_pem']);
	$tahun 		= mysqli_real_escape_string($conn,$_POST['tahun']);
	$alamat  	= mysqli_real_escape_string($conn,$_POST['alamat']);
	$nohp  		= mysqli_real_escape_string($conn,$_POST['nohp']);
	
$modal = mysqli_query($conn, "INSERT INTO santri (nis,nama,jenis_pem,tahun,alamat,nohp) VALUES ('$nis','$nama','$jenis_pem','$tahun','$alamat','$nohp')") or die(mysqli_error()) ;
	if ($modal) {
		echo "<script>alert('Data berhasil di simpan');window.location='?page=data-santri'</script>";
	}
?>
