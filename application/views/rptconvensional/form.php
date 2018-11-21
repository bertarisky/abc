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
						<input type="text" id="site" name="site" class="form-control" placeholder="site" value="<?php echo @$model['site'];?>" required="required" autofocus="autofocus">
						<label for="site">Site</label>
					</div>
            	</div>

            	<div><h3>RPT/BS</h3>
            	<!-- <input type="hidden" name="alat[0][nama]" value="selter"> -->
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_nomor" name="rpt_nomor" class="form-control" placeholder="rpt_nomor" value="<?php echo @$model['rpt_nomor'];?>" required="required" autofocus="autofocus">
						<label for="rpt_nomor">Nomor/Nama</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_kontrak" name="rpt_kontrak" class="form-control" placeholder="rpt_kontrak" value="<?php echo @$model['rpt_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="rpt_kontrak">Kontrak</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_nama" name="rpt_nama" class="form-control" placeholder="rpt_nama" value="<?php echo @$model['rpt_nama'];?>" required="required" autofocus="autofocus">
						<label for="rpt_nama">Nama RPT/BS</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_merk" name="rpt_merk" class="form-control" placeholder="rpt_merk" value="<?php echo @$model['rpt_merk'];?>" required="required" autofocus="autofocus">
						<label for="rpt_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_jenis" name="rpt_jenis" class="form-control" placeholder="rpt_jenis" value="<?php echo @$model['rpt_jenis'];?>" required="required" autofocus="autofocus">
						<label for="rpt_jenis">Jenis</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_teknologi" name="rpt_teknologi" class="form-control" placeholder="rpt_teknologi" value="<?php echo @$model['rpt_teknologi'];?>" required="required" autofocus="autofocus">
						<label for="rpt_teknologi">Teknologi</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_seri" name="rpt_seri" class="form-control" placeholder="rpt_seri" value="<?php echo @$model['rpt_seri'];?>" required="required" autofocus="autofocus">
						<label for="rpt_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_versi" name="rpt_versi" class="form-control" placeholder="rpt_versi" value="<?php echo @$model['rpt_versi'];?>" required="required" autofocus="autofocus">
						<label for="rpt_versi">Versi Firmware</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_frek_rx" name="rpt_frek_rx" class="form-control" placeholder="rpt_frek_rx" value="<?php echo @$model['rpt_frek_rx'];?>" required="required" autofocus="autofocus">
						<label for="rpt_frek_rx">Frek. RX</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_frek_tx" name="rpt_frek_tx" class="form-control" placeholder="rpt_frek_tx" value="<?php echo @$model['rpt_frek_tx'];?>" required="required" autofocus="autofocus">
						<label for="rpt_frek_tx">Frek. TX</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_tone_rx" name="rpt_tone_rx" class="form-control" placeholder="rpt_tone_rx" value="<?php echo @$model['rpt_tone_rx'];?>" required="required" autofocus="autofocus">
						<label for="rpt_tone_rx">Tone. RX</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_tone_tx" name="rpt_tone_tx" class="form-control" placeholder="rpt_tone_tx" value="<?php echo @$model['rpt_tone_tx'];?>" required="required" autofocus="autofocus">
						<label for="rpt_tone_tx">Tone. TX</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_sensitivitas" name="rpt_sensitivitas" class="form-control" placeholder="rpt_sensitivitas" value="<?php echo @$model['rpt_sensitivitas'];?>" required="required" autofocus="autofocus">
						<label for="rpt_sensitivitas">Sensitivitas</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_dayapancar" name="rpt_dayapancar" class="form-control" placeholder="rpt_dayapancar" value="<?php echo @$model['rpt_dayapancar'];?>" required="required" autofocus="autofocus">
						<label for="rpt_dayapancar">Daya Pancar</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_power" name="rpt_power" class="form-control" placeholder="rpt_power" value="<?php echo @$model['rpt_power'];?>" required="required" autofocus="autofocus">
						<label for="rpt_power">Power Listrik</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rpt_rak" name="rpt_rak" class="form-control" placeholder="rpt_rak" value="<?php echo @$model['rpt_rak'];?>" required="required" autofocus="autofocus">
						<label for="rpt_rak">Nomor Rak</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Kondisi RPT/BS</h3>
            	<!-- <input type="hidden" name="alat[1][nama]" value="tower"> -->
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="rpt_kondisi_bb" name="rpt_kondisi_bb" class="form-control" placeholder="rpt_kondisi_bb" value="1" <?php if (isset($model['rpt_kondisi_bb']) && $model['rpt_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="rpt_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="rpt_kondisi_rr" name="rpt_kondisi_rr" class="form-control" placeholder="rpt_kondisi_rr" value="1" <?php if (isset($model['rpt_kondisi_rr']) && $model['rpt_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="rpt_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="rpt_kondisi_rb" name="rpt_kondisi_rb" class="form-control" placeholder="rpt_kondisi_rb" value="1" <?php if (isset($model['rpt_kondisi_rb']) && $model['rpt_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="rpt_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Antena</h3>
            	<!-- <input type="hidden" name="alat[1][nama]" value="tower"> -->
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antena_merk" name="antena_merk" class="form-control" placeholder="antena_merk" value="<?php echo @$model['antena_merk'];?>" required="required" autofocus="autofocus">
						<label for="antena_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antena_jenis" name="antena_jenis" class="form-control" placeholder="antena_jenis" value="<?php echo @$model['antena_jenis'];?>" required="required" autofocus="autofocus">
						<label for="antena_jenis">Jenis</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antena_gain" name="antena_gain" class="form-control" placeholder="antena_gain" value="<?php echo @$model['antena_gain'];?>" required="required" autofocus="autofocus">
						<label for="antena_gain">Gain</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antena_posisi" name="antena_posisi" class="form-control" placeholder="antena_posisi" value="<?php echo @$model['antena_posisi'];?>" required="required" autofocus="autofocus">
						<label for="antena_posisi">Posisi</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antena_kontrak" name="antena_kontrak" class="form-control" placeholder="antena_kontrak" value="<?php echo @$model['antena_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="antena_kontrak">No. Kontrak</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Kabel Feeder</h3>
            	<!-- <input type="hidden" name="alat[1][nama]" value="tower"> -->
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabel_merk" name="kabel_merk" class="form-control" placeholder="kabel_merk" value="<?php echo @$model['kabel_merk'];?>" required="required" autofocus="autofocus">
						<label for="kabel_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabel_jenis" name="kabel_jenis" class="form-control" placeholder="kabel_jenis" value="<?php echo @$model['kabel_jenis'];?>" required="required" autofocus="autofocus">
						<label for="kabel_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabel_panjang" name="kabel_panjang" class="form-control" placeholder="kabel_panjang" value="<?php echo @$model['kabel_panjang'];?>" required="required" autofocus="autofocus">
						<label for="kabel_panjang">Panjang</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabel_kontrak" name="kabel_kontrak" class="form-control" placeholder="kabel_kontrak" value="<?php echo @$model['kabel_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="kabel_kontrak">No. Kontrak</label>
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
							<a href="<?php echo site_url('rptconvensional/index');?>" class="btn btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		