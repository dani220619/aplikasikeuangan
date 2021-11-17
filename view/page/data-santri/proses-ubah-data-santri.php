<?php

$nis	   = $conn->real_escape_string(trim($_POST['nis']));
$nama   = $conn->real_escape_string(trim($_POST['nama']));
$jenis_pem   = $conn->real_escape_string(trim($_POST['jenis_pem']));
$tahun   = $conn->real_escape_string(trim($_POST['tahun']));
$alamat   = $conn->real_escape_string(trim($_POST['alamat']));
$nohp   = $conn->real_escape_string(trim($_POST['nohp']));


$ubah		= mysqli_query($conn,"UPDATE santri SET nama ='$nama', jenis_pem = '$jenis_pem',tahun = '$tahun',alamat = '$alamat',nohp = '$nohp' WHERE nis = '$nis' ") or die(mysqli_error($conn));
if ($ubah) {
	echo "<script>alert('Data Berhasil Diubah');window.location='?page=data-santri'</script>";
}

?>