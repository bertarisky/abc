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
					<input type="text" id="merk" name="merk" class="form-control" placeholder="Merk" value="<?php echo @$model['merk'];?>" required="required" autofocus="autofocus">
					<label for="merk">Merk</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="type_storage" name="type_storage" class="form-control" placeholder="Jenis/Type" value="<?php echo @$model['type_storage'];?>" required="required" autofocus="autofocus">
					<label for="type_storage">Jenis/Type</label>
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
					<input type="text" id="rpm" name="rpm" class="form-control" placeholder="RPM" value="<?php echo @$model['rpm'];?>" required="required" autofocus="autofocus">
					<label for="rpm">RPM</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="kapasitas" name="kapasitas" class="form-control" placeholder="Kapasitas" value="<?php echo @$model['kapasitas'];?>" required="required" autofocus="autofocus">
					<label for="kapasitas">Kapasitas</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="pemanfaatan" name="pemanfaatan" class="form-control" placeholder="pemanfaatan" value="<?php echo @$model['pemanfaatan'];?>" required="required" autofocus="autofocus">
					<label for="pemanfaatan">Pemanfaatan</label>
				</div>
			</div>


			<div><h3>Kondisi</h3>
        	<!-- <input type="hidden" name="alat[0][nama]" value="selter"> -->
        	<div class="form-group">
				<div class="form-label-group">
					<input type="checkbox" id="kondisi_bb" name="kondisi_bb" class="form-control" placeholder="BB" value="1" <?php if (isset($model['kondisi_bb']) && $model['kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
					<label for="kondisi_bb">BB</label>
				</div>
    		</div>

    		<div class="form-group">
				<div class="form-label-group">
					<input type="checkbox" id="kondisi_rr" name="kondisi_rr" class="form-control" placeholder="RR" value="1" <?php if (isset($model['kondisi_rr']) && $model['kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
					<label for="kondisi_rr">RR</label>
				</div>
    		</div>

    		<div class="form-group">
				<div class="form-label-group">
					<input type="checkbox" id="kondisi_rb" name="kondisi_rb" class="form-control" placeholder="RB" value="1" <?php if (isset($model['kondisi_rb']) && $model['kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
					<label for="kondisi_rb">RB</label>
				</div>
    		</div>
    		</div>
            		

    		<div><h3>Akses</h3>
        	<!-- <input type="hidden" name="alat[0][nama]" value="selter"> -->
        	<div class="form-group">
				<div class="form-label-group">
					<input type="date" id="akses_waktu" name="akses_waktu" class="form-control" placeholder="Waktu" value="<?php echo @$model['akses_waktu'];?>" required="required" autofocus="autofocus">
					<label for="akses_waktu">Waktu</label>
				</div>
        	</div>

        	<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="akses_kegiatan" name="akses_kegiatan" class="form-control" placeholder="Kegiatan" value="<?php echo @$model['akses_kegiatan'];?>" required="required" autofocus="autofocus">
					<label for="akses_kegiatan">Kegiatan</label>
				</div>
    		</div>

    		<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="akses_pelaksana" name="akses_pelaksana" class="form-control" placeholder="Pers Pelaksana" value="<?php echo @$model['akses_pelaksana'];?>" required="required" autofocus="autofocus">
					<label for="akses_pelaksana">Pers Pelaksana</label>
				</div>
    		</div>
    		</div>


			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="kontrak" name="kontrak" class="form-control" placeholder="Kontrak" value="<?php echo @$model['kontrak'];?>" required="required" autofocus="autofocus">
					<label for="kontrak">Kontrak</label>
				</div>
			</div>

					
			<div class="form-group">
				<input type="hidden" name="id">
					<div class="col-md-12">
					
						<input type="submit" name="simpan" class="btn btn-info" value="simpan">
			         	 <span class="glyphicon glyphicon-ok"></span>
			        	</input>

						<a href="<?php echo site_url('storage/index')?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
					</div>
				</input>
			</div>
		</form>
	</div>