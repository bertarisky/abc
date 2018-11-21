	<div class="panel-body bgtable">
		<?php echo @$alert;?>

		<form method="post" class="form-horizontal">

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="merk" name="merk" class="form-control" placeholder="Merk" value="<?php echo @$model['merk'];?>" required="required" autofocus="autofocus">
					<label for="merk">Merk</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="type" name="type" class="form-control" placeholder="Jenis/Type" value="<?php echo @$model['type'];?>" required="required" autofocus="autofocus">
					<label for="type">Jenis/Type</label>
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
					<input type="text" id="arus" name="arus" class="form-control" placeholder="Arus" value="<?php echo @$model['arus'];?>" required="required" autofocus="autofocus">
					<label for="arus">Arus</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="thn_pembuatan" name="thn_pembuatan" class="form-control" placeholder="Tahun Pembuatan" value="<?php echo @$model['thn_pembuatan'];?>" required="required" autofocus="autofocus">
					<label for="thn_pembuatan">Tahun Pembuatan</label>
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
					        	
						<a href="<?php echo site_url('batere/index')?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
					</div>
				</input>
			</div>
		</form>
	</div>		