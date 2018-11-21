	<div class="panel-body bgtable">
		<p class="alert-danger"><?php echo @$alert;?></p>

			<form method="post" class="form-horizontal">

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kesatuan" name="kesatuan" class="form-control" placeholder="kesatuan" value="<?php echo @$model['kesatuan'];?>" required="required" autofocus="autofocus">
						<label for="kesatuan">Kesatuan</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="pemegang" name="pemegang" class="form-control" placeholder="pemegang" value="<?php echo @$model['pemegang'];?>" required="required" autofocus="autofocus">
						<label for="pemegang">Pemegang</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="call_sign" name="call_sign" class="form-control" placeholder="call sign" value="<?php echo @$model['call_sign'];?>" required="required" autofocus="autofocus">
						<label for="call_sign">Call Sign</label>
					</div>
            	</div>

            	<div><h3>Radio</h3>
            	<!-- <input type="hidden" name="alat[0][nama]" value="selter"> -->
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="radio_merk" name="radio_merk" class="form-control" placeholder="merk" value="<?php echo @$model['radio_merk'];?>" required="required" autofocus="autofocus">
						<label for="radio_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="radio_jenis" name="radio_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['radio_jenis'];?>" required="required" autofocus="autofocus">
						<label for="radio_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="radio_seri" name="radio_seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['radio_seri'];?>" required="required" autofocus="autofocus">
						<label for="radio_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="radio_id" name="radio_id" class="form-control" placeholder="radio id" value="<?php echo @$model['radio_id'];?>" required="required" autofocus="autofocus">
						<label for="radio_id">Radio ID</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="radio_dayapancar" name="radio_dayapancar" class="form-control" placeholder="daya pancar" value="<?php echo @$model['radio_dayapancar'];?>" required="required" autofocus="autofocus">
						<label for="radio_dayapancar">Daya Pancar</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="radio_sensitivitas" name="radio_sensitivitas" class="form-control" placeholder="sensitivitas" value="<?php echo @$model['radio_sensitivitas'];?>" required="required" autofocus="autofocus">
						<label for="radio_sensitivitas">Sensitivitas</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Radio Kondisi</h3>
            	<!-- <input type="hidden" name="alat[1][nama]" value="tower"> -->
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="radio_kondisi_bb" name="radio_kondisi_bb" class="form-control" placeholder="radio_kondisi_bb" value="1" <?php if (isset($model['radio_kondisi_bb']) && $model['radio_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="radio_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="radio_kondisi_rr" name="radio_kondisi_rr" class="form-control" placeholder="radio_kondisi_rr" value="1" <?php if (isset($model['radio_kondisi_rr']) && $model['radio_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="radio_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="radio_kondisi_rb" name="radio_kondisi_rb" class="form-control" placeholder="radio_kondisi_rb" value="1" <?php if (isset($model['radio_kondisi_rb']) && $model['radio_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="radio_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>

            	<div class="form_pemeliharaan">
	            	<h3>Pemeliharaan</h3>
	            	<div class="form-group">
						<div class="form-label-group">
							<input type="date" id="waktu" name="pemeliharaan[waktu]" class="form-control" placeholder="waktu" value="<?php echo @$pemeliharaan['waktu'];?>" required="required" autofocus="autofocus">
							<label for="waktu">Waktu</label>
						</div>
	            	</div>
	            	<div class="form-group">
						<div class="form-label-group">
							<input type="text" id="kegiatan" name="pemeliharaan[kegiatan]" class="form-control" placeholder="kegiatan" value="<?php echo @$pemeliharaan['kegiatan'];?>" required="required" autofocus="autofocus">
							<label for="kegiatan">Kegiatan</label>
						</div>
	            	</div>
	            	<div class="form-group">
						<div class="form-label-group">
							<input type="text" id="hasil" name="pemeliharaan[hasil]" class="form-control" placeholder="hasil" value="<?php echo @$pemeliharaan['hasil'];?>" required="required" autofocus="autofocus">
							<label for="hasil">Hasil</label>
						</div>
	            	</div>
	            	<div class="form-group">
						<div class="form-label-group">
							<input type="text" id="personil_pelaksana" name="pemeliharaan[personil_pelaksana]" class="form-control" placeholder="personil_pelaksana" value="<?php echo @$pemeliharaan['personil_pelaksana'];?>" required="required" autofocus="autofocus">
							<label for="personil_pelaksana">Personil Pelaksana</label>
						</div>
	            	</div>
	            </div>
				
				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-info" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    		</input>
							<a href="<?php echo site_url('radiomobil/index');?>" class="btn btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		