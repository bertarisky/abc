	<div class="panel-body bgtable">
		<?php echo @$alert;?>

		<form method="post" class="form-horizontal">

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="kesatuan" name="kesatuan" class="form-control" placeholder="Kesatuan" value="<?php echo @$model['kesatuan'];?>"required" autofocus="autofocus">
					<label for="kesatuan">Kesatuan</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="no_telepon" name="no_telepon" class="form-control" placeholder="Nomor Telepon" value="<?php echo @$model['no_telepon'];?>"required" autofocus="autofocus">
					<label for="no_telepon">Nomor Telepon</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="pengguna" name="pengguna" class="form-control" placeholder="Pengguna" value="<?php echo @$model['pengguna'];?>"required" autofocus="autofocus">
					<label for="pengguna">Pengguna</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="posisi_node" name="posisi_node" class="form-control" placeholder="Posisi Node" value="<?php echo @$model['posisi_node'];?>"required" autofocus="autofocus">
					<label for="posisi_node">Posisi Node</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="perawatan" name="perawatan" class="form-control" placeholder="Perawatan/Perbaikan" value="<?php echo @$model['perawatan'];?>"required" autofocus="autofocus">
					<label for="perawatan">Perawatan</label>
				</div>
			</div>

					
			<div class="form-group">
				<input type="hidden" name="id">
					<div class="col-md-12">
					
						<input type="submit" name="simpan" class="btn btn-info" value="simpan">
			          	<span class="glyphicon glyphicon-ok"></span>
			        	</input>

						<a href="<?php echo site_url('telepon/index')?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span>kembali</a>
					</div>
				</input>
			</div>
		</form>
	</div>	