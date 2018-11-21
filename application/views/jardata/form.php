	<div class="panel-body bgtable">
		<?php echo @$alert;?>

		<form method="post" class="form-horizontal">

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?php echo @$model['nama_barang'];?>" required="required" autofocus="autofocus">
					<label for="nama_barang">Nama Barang</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="merk" name="merk" class="form-control" placeholder="Merk" value="<?php echo @$model['merk'];?>" required="required" autofocus="autofocus">
					<label for="merk">Merk</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="type_jardata" name="type_jardata" class="form-control" placeholder="Jenis/Type" value="<?php echo @$model['type_jardata'];?>" required="required" autofocus="autofocus">
					<label for="type_jardata">Jenis/Type</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="no_seri" name="no_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['no_seri'];?>" required="required" autofocus="autofocus">
					<label for="no_seri">Nomor Seri</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="versi_firmware" name="versi_firmware" class="form-control" placeholder="Versi Firmware" value="<?php echo @$model['versi_firmware'];?>" required="required" autofocus="autofocus">
					<label for="versi_firmware">Versi Firmware</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo @$model['keterangan'];?>" required="required" autofocus="autofocus">
					<label for="keterangan">Keterangan</label>
				</div>
			</div>

					
			<div class="form-group">
				<input type="hidden" name="id">
					<div class="col-md-12">
					
						<input type="submit" name="simpan" class="btn btn-info" value="simpan">
			         	 <span class="glyphicon glyphicon-ok"></span>
			        	</input>

						<a href="<?php echo site_url('jardata/index')?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
					</div>
				</input>
			</div>
		</form>
	</div>