	<div class="panel-body bgtable">
		<?php echo @$alert;?>

		<form method="post" class="form-horizontal">

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="kesatuan" name="kesatuan" class="form-control" placeholder="Kesatuan" value="<?php echo @$model['kesatuan'];?>" required="required" autofocus="autofocus">
					<label for="kesatuan">Kesatuan</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="id_pelanggan" name="id_pelanggan" class="form-control" placeholder="id Pelanggan" value="<?php echo @$model['id_pelanggan'];?>" required="required" autofocus="autofocus">
					<label for="id_pelanggan">id Pelanggan</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="jenis" name="jenis" class="form-control" placeholder="Jenis" value="<?php echo @$model['jenis'];?>" required="required" autofocus="autofocus">
					<label for="jenis">Jenis</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="bandwidth" name="bandwidth" class="form-control" placeholder="Bandwidth" value="<?php echo @$model['bandwidth'];?>" required="required" autofocus="autofocus">
					<label for="bandwidth">Bandwidth</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="posisi_node" name="posisi_node" class="form-control" placeholder="Posisi Node" value="<?php echo @$model['posisi_node'];?>" required="required" autofocus="autofocus">
					<label for="posisi_node">Posisi Node</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="perangkat_last" name="perangkat_last" class="form-control" placeholder="Perangkat Last Mile Penyedia" value="<?php echo @$model['perangkat_last'];?>" required="required" autofocus="autofocus">
					<label for="perangkat_last">Perangkat Last Mile Penyedia</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="biaya_bulanan" name="biaya_bulanan" class="form-control" placeholder="Biaya Bulanan" value="<?php echo @$model['biaya_bulanan'];?>" required="required" autofocus="autofocus">
					<label for="biaya_bulanan">Biaya Bulanan</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="pemanfaatan" name="pemanfaatan" class="form-control" placeholder="Pemanfaatan" value="<?php echo @$model['pemanfaatan'];?>" required="required" autofocus="autofocus">
					<label for="pemanfaatan">Pemanfaatan</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="tanggungjwb_pembayaran" name="tanggungjwb_pembayaran" class="form-control" placeholder="Tanggungjawab Pembayaran" value="<?php echo @$model['tanggungjwb_pembayaran'];?>" required="required" autofocus="autofocus">
					<label for="tanggungjwb_pembayaran">Tanggungjawab Pembayaran</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="pemeliharaan" name="pemeliharaan" class="form-control" placeholder="Pemeliharaan/Perbaikan" value="<?php echo @$model['pemeliharaan'];?>" required="required" autofocus="autofocus">
					<label for="pemeliharaan">Pemeliharaan/Perbaikan</label>
				</div>
			</div>

					
			<div class="form-group">
				<input type="hidden" name="id">
					<div class="col-md-12">
					
						<input type="submit" name="simpan" class="btn btn-info" value="simpan">
			         	 <span class="glyphicon glyphicon-ok"></span>
			        	</input>

						<a href="<?php echo site_url('vpn/index')?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
					</div>
				</input>
			</div>
		</form>
	</div>