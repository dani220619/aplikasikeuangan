<?php
if( empty( $_SESSION['id_user'] ) ){
  $_SESSION['id_user'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
  header('Location: ./');
  die();
} else {
  /* tahapan pembayaran SPP
    1. masukkan nis
    2. tampilkan histori pembayaran (jika ada) dan form pembayaran
    3. proses pembayaran, kembali ke nomor 2
  */
  echo '<h2>Pembayaran SPP</h2><hr>';
  
  if(isset($_REQUEST['submit'])){
    //proses pembayaran secara bertahap
    $submit = $_REQUEST['submit'];
    $nis = $_REQUEST['nis'];
    
    //proses simpan pembayaran
    // if($submit=='bayar'){
    //   $jenis_pem = $_REQUEST['jenis_pem'];
    //   $bln = $_REQUEST['bulan'];
    //   $thn = $_REQUEST['tahun'];
    //   $tgl = $_REQUEST['tanggal'];
    //   $jml = $_REQUEST['jumlah'];

    //   $modal = mysqli_query($conn, "INSERT INTO pembayaran VALUES('$jenis_pem','$nis','$bln','$thn','$tgl','$jml')");
      
    //   if($modal ){
    //     //echo "<script>document.location.href = home.php?page=pembayaran&submit=v&nis='.$nis </script>";
    //     //ob_start()
    //     // header ("Location:home.php?page=pembayaran");
        
    //     //or die();
    //   } else {
    //     //echo 'ada ERROR dg query';
    //   }
    //  }
    
    //proses hapus pembayaran, hanya ADMIN
    // if($submit=='hapus'){
    //   $jenis_pem = $_REQUEST['jenis_pem'];
    //   $bln = $_REQUEST['bln'];
    //   //$tgl = $_REQUEST['tgl'];
    //   //$jml = $_REQUEST['jml'];
      
    //   $qbayar = mysqli_query($conn, "DELETE FROM pembayaran WHERE jenis_pem='$jenis_pem' AND nis='$nis' AND bulan='$bln'");
      
    //   if($qbayar > 0){


    //     // echo ('Location: ?pembayaran=hapus&submit=v&nis='.$nis);
    //     // die();
    //   } else {
    //     //echo 'ada ERROR dg query';
    //   }
    // }
    
    //tampilkan data siswa
    $qsiswa = mysqli_query($conn, "SELECT * FROM santri WHERE nis='$nis'");
    list($nis,$nama,$id_prodi) = mysqli_fetch_array($qsiswa);
    
      echo '<div class="row">';
    echo '<div class="col-sm-10"><table class="table table-bordered">';
    echo '<tr><td colspan="2">Nomor Induk</td><td colspan="3">'.$nis.'</td>';
      echo '<td><a href="cetak.php?nis='.$nis.'" target="_blank" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> cetak semua</a></td></tr>';
    echo '<tr><td colspan="2">Nama Siswa</td><td colspan="4">'.$nama.'</td></tr>';
      
?>

<?php
    echo '</td></tr>';
    echo '<tr class="info"><th width="30">No</th><th width="130">Jenis Pembayaran</th><th width="100">Bulan</th><th width="100">Tahun</th><th width="120">Tanggal Bayar</th><th width="100">Jumlah</th>';
    //echo '<th>&nbsp;</th>';
    //echo '</tr>';
    
    //tampilkan histori pembayaran, jika ada
    $qbayar = mysqli_query($conn, "SELECT jenis_pem,bulan,tahun,tgl_bayar,jumlah FROM pembayaran WHERE nis='$nis' ORDER BY tgl_bayar DESC");
    if(mysqli_num_rows($qbayar) > 0){
      $no = 1;
      while(list($jenis_pem,$bulan,$tahun,$tanggal,$jumlah) = mysqli_fetch_array($qbayar)){
        echo '<tr><td>'.$no.'</td>';
        echo '<td>'.$jenis_pem.'</td>';
        echo '<td>'.$bulan.'</td>';
        echo '<td>'.$tahun.'</td>';
        echo '<td>'.$tanggal.'</td>';
        echo '<td>'.$jumlah.'</td><td>';
        
        if( $_SESSION['usertype'] == 'admin' ){
          echo '<a href="home.php?page=pembayaran&submit=hapus&jenis_pem='.$jenis_pem.'&nis='.$nis.'&bln='.$bulan.'" class="btn btn-danger btn-xs">Batal</a>';
        }
           
        echo '</td></tr>';
        
        $no++;
      }
    } else {
      echo '<tr><td colspan="6"><em>Belum ada data!</em></td></tr>';
    }
    echo '</table></div></div>';
    
  } else {
?>
<!-- form input nomor induk siswa -->
<form class="form-horizontal" role="form" method="post" action="./home2.php?page=user-pembayaran">
  <div class="form-group">
    <label for="nis" class="col-sm-2 control-label">Nomor Induk Siswa</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="nis" name="nis" placeholder="Nomor Induk Siswa" required autofocus>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-3">
      <button type="submit" name="submit" class="btn btn-default">Lanjut</button>
    </div>
  </div>
</form>
<?php
  }
}
?>