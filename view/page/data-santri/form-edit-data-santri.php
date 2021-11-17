<?php
	$nis	= $_GET['nis'];
	$edit 	= mysqli_query($conn,"SELECT * FROM santri WHERE nis    ");
	$row	= mysqli_fetch_array($edit); 	
?>
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Data Santri</h3>
	</div>
	<div class="box-body">
		<form action="?page=proses-ubah-data-santri" class="form-horizontal" method="post">
			
			<div class="form-group">
				<label for="" class="col-md-2 control-label">Nis</label>
				<div class="col-md-3">
					<input type="text" class="form-control" name="nis" id="nis" value="<?=$row['nis']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2 control-label">Nama Santri</label>
				<div class="col-md-3">
					<input type="text" class="form-control" name="nama"  value="<?=$row['nama']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2 control-label">Jenis Pembayaran</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="jenis_pem" value="<?=$row['jenis_pem']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2 control-label">Tahun</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="tahun" value="<?=$row['tahun']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2 control-label">Alamat</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="alamat" value="<?=$row['alamat']?>">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2 control-label">No Hp</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="nohp" value="<?=$row['nohp']?>">
				</div>
			</div>
			<div class="box-footer ">
				<button type="submit" class="btn btn-primary" onclick="javascript: return confirm('Anda yakin ubah ?')" >Ubah</button>
			<button type="reset" class="btn btn-danger">Batal</button>
			</div>
		</form>
	</div>
</div>