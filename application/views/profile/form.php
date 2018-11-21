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
						<input type="text" id="nama" name="nama" class="form-control" placeholder="nama" value="<?php echo @$model['nama'];?>" required="required" autofocus="autofocus">
						<label for="nama">Nama</label>
					</div>
            	</div>

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="pangkat" name="pangkat" class="form-control" placeholder="pangkat" value="<?php echo @$model['pangkat'];?>" required="required" autofocus="autofocus">
						<label for="pangkat">Pangkat</label>
					</div>
            	</div>

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="nrp" name="nrp" class="form-control" placeholder="nrp" value="<?php echo @$model['nrp'];?>" required="required" autofocus="autofocus">
						<label for="nrp">NRP</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="pendidikan" name="pendidikan" class="form-control" placeholder="pendidikan" value="<?php echo @$model['pendidikan'];?>" required="required" autofocus="autofocus">
						<label for="pendidikan">Pendidikan</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kejuruan" name="kejuruan" class="form-control" placeholder="kejuruan" value="<?php echo @$model['kejuruan'];?>" required="required" autofocus="autofocus">
						<label for="kejuruan">Kejuruan</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kompetensi" name="kompetensi" class="form-control" placeholder="kompetensi" value="<?php echo @$model['kompetensi'];?>" required="required" autofocus="autofocus">
						<label for="kompetensi">Kompetensi</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="keterangan" value="<?php echo @$model['keterangan'];?>" autofocus="autofocus">
						<label for="keterangan">Keterangan</label>
					</div>
            	</div>

				
				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-info" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    </input>
						<a href="<?php echo site_url('profile/index');?>" class="btn btn-danger">
						<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
				</div>

			</form>

	</div>
		