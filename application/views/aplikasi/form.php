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
					<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="<?php echo @$model['nama'];?>" required="required" autofocus="autofocus">
					<label for="nama">Nama</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="fiture_layanan" name="fiture_layanan" class="form-control" placeholder="Fiture Layanan" value="<?php echo @$model['fiture_layanan'];?>" required="required" autofocus="autofocus">
					<label for="fiture_layanan">Fiture Layanan</label>
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

						<a href="<?php echo site_url('aplikasi/index')?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
					</div>
				</input>
			</div>	
		</form>
	</div>