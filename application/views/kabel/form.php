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
					<input type="text" id="type_kabel" name="type_kabel" class="form-control" placeholder="Jenis/Type" value="<?php echo @$model['type_kabel'];?>" required="required" autofocus="autofocus">
					<label for="type_kabel">Jenis/Type</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="panjang" name="panjang" class="form-control" placeholder="Panjang" value="<?php echo @$model['panjang'];?>" required="required" autofocus="autofocus">
					<label for="panjang">Panjang</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="roll" name="roll" class="form-control" placeholder="Roll" value="<?php echo @$model['roll'];?>" required="required" autofocus="autofocus">
					<label for="roll">Roll</label>
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

						<a href="<?php echo site_url('kabel/index')?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
					</div>
				</input>
			</div>
		</form>
	</div>