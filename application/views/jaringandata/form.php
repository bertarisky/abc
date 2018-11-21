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
						<input type="text" id="nama_perangkat" name="nama_perangkat" class="form-control" placeholder="nama perangkat" value="<?php echo @$model['nama_perangkat'];?>" required="required" autofocus="autofocus">
						<label for="nama_perangkat">Nama Perangkat</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="merk" name="merk" class="form-control" placeholder="merk" value="<?php echo @$model['merk'];?>" required="required" autofocus="autofocus">
						<label for="merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="jenis" name="jenis" class="form-control" placeholder="jenis" value="<?php echo @$model['jenis'];?>" required="required" autofocus="autofocus">
						<label for="jenis">Jenis</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="seri" name="seri" class="form-control" placeholder="seri" value="<?php echo @$model['seri'];?>" required="required" autofocus="autofocus">
						<label for="seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="versi" name="versi" class="form-control" placeholder="versi" value="<?php echo @$model['versi'];?>" required="required" autofocus="autofocus">
						<label for="versi">Versi Firmware</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="posisi" name="posisi" class="form-control" placeholder="posisi" value="<?php echo @$model['posisi'];?>" required="required" autofocus="autofocus">
						<label for="posisi">Posisi</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rak" name="rak" class="form-control" placeholder="rak" value="<?php echo @$model['rak'];?>" required="required" autofocus="autofocus">
						<label for="rak">Nomor Rak</label>
					</div>
            	</div>

            	<div><h2>Kondisi</h2>
            	<!-- <input type="hidden" name="alat[1][nama]" value="tower"> -->
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kondisi_bb" name="kondisi_bb" class="form-control" placeholder="kondisi_bb" value="1" <?php if (isset($model['kondisi_bb']) && $model['kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kondisi_rr" name="kondisi_rr" class="form-control" placeholder="kondisi_rr" value="1" <?php if (isset($model['kondisi_rr']) && $model['kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kondisi_rb" name="kondisi_rb" class="form-control" placeholder="kondisi_rb" value="1" <?php if (isset($model['kondisi_rb']) && $model['kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>

            	<div class="form_pemeliharaan">
	            	<h2>Pemeliharaan</h2>
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
							<a href="<?php echo site_url('jaringandata/index');?>" class="btn btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		