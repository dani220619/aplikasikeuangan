<div class="col-md-12">
       <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Data Santri</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <?php
      $modal = mysqli_query($conn, "SELECT * FROM santri where nis");
      $row = mysqli_fetch_array($modal);
    ?>
    <form action="?page=proses-add-data-santri" method="post" class="form-horizontal">
      <div class="box-body">
        <div class="col-md-6">
        <div class="form-group">
          <label class="col-sm-4 control-label">Nis</label>
          <div class="col-sm-8">
            <input class="form-control" name="nis" required>
          </div>
        </div>
       <div class="form-group">
          <label class="col-sm-4 control-label">Nama Santri</label>
          <div class="col-sm-8">
              <input type="text" class="form-control" name="nama" required>
          </div>  
            </div>
             <div class="form-group">
      <label class="col-sm-4 control-label" >Jenis Pembayaran</label>
      <div class="col-sm-8">
    <select type="text" class="form-control" name="jenis_pem" required>
                <option>--  Jenis Pembayaran --</option>
                <option>Khusus</option>
                <option>Biasa</option>
              </select>
  </div>
  </div>
   <div class="form-group">
          <label class="col-sm-4 control-label">Tahun</label>
          <div class="col-sm-8">
              <input type="text" class="form-control" name="tahun" required>
          </div>
        </div>
          <div class="form-group">
          <label class="col-sm-4 control-label">Alamat</label>
          <div class="col-sm-8">
              <input type="text" class="form-control" name="alamat" required>
          </div>
        </div>
          <div class="form-group">
          <label class="col-sm-4 control-label">No Hp</label>
          <div class="col-sm-8">
              <input type="text" class="form-control" name="nohp" required>
          </div>
                </div>
      <div class="box-footer">
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </div>
    </form>

      <!-- /.box-body -->
      <!-- /.box-footer -->
  </div>             
</div>
<script type="text/javascript">
  $(function(){
     $('#id_santri').datepicker({
      autoclose: true
    })
     $('').datepicker({
      autoclose: true
    })
  })
</script>
<script>

</script>
