
<section class="content">
    
  <div class="row">
    <div class="col-xs-12">

      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Data Santri</h3>
        </div>
        <form action="">
          <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="3%" bgcolor=#71DCFF><center>No</center></th>
                  <th width="15%" bgcolor=#71DCFF><center>Nis</center></th>
                  <th width="15%" bgcolor=#71DCFF><center>nama santri</center></th>
                  <th width="15%" bgcolor=#71DCFF><center>Jenis Bayar</center></th>
                  <th width="15%" bgcolor=#71DCFF><center>Tahun</center></th>
                  <th width="15%" bgcolor=#71DCFF><center>Alamat</center></th>
                  <th width="15%" bgcolor=#71DCFF><center>No Hp</center></th>
                  <th width="15%" bgcolor=#71DCFF><center>Aksi</center></th>
                  
                
                </tr>
                </thead>
                <tbody>
                     <?php
                    $no = 0;
                    $modal = mysqli_query($conn, "SELECT * FROM santri where nis");
                    while($row = mysqli_fetch_array($modal))   {
                    $no++;
                    ?>
                  <tr class="tampil">
                    <td><center><?=$no?></center></td>
                    <td><?=$row['nis']?></td>
                    <td><?=$row["nama"]?></td>
                    <td><?=$row["jenis_pem"]?></td>
                    <td><?=$row["tahun"]?></td>
                    <td><?=$row["alamat"]?></td>
                    <td><?=$row["nohp"]?></td>
                    <td>
                      <center><a href="?page=user-pembayaran&nis=<?=$row['nis']?>" class="btn btn-flat btn-warning btn-xs" title="Lihat"><i class="fa fa-edit "></i></a>

                      </center>
                    </td>
                    
                   
                    
                  </tr>
                  <?php } ?> 

                   

                </tbody>
              </table>

                
            </div>
            <div class="box-footer">
             <!--  <a href="?page=print-tabel-guru" class="btn btn-info"><i class="fa fa-print"></i> Cetak</a> -->
            </div>
          </div>
        </form>

        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
