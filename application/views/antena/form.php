	<div class="panel-body bgtable">
		<?php echo @$alert;?>

		<form method="post" class="form-horizontal">

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="merk" name="merk" class="form-control" placeholder="merk" value="<?php echo @$model['merk'];?>" required="required" autofocus="autofocus">
					<label for="merk">Merk</label>
				</div>
        	</div>

			<div class="form-group">
                <div class="form-label-group">
	                <select class="selectpicker form-control form-control-lg" name="type_antena" required="required" autofocus="autofocus">
	                	<option></option>
	                    <option value="repeater">Repeater</option>
	                    <option value="radio fixed">Radio Fixed</option>
	                    <option value="radio mobile">Radio Mobile</option>
	                    <option value="radio ht">Radio Ht</option>
	                </select>
                </div>
            </div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="nomor_seri" name="nomor_seri" class="form-control" placeholder="nomor_seri" value="<?php echo @$model['nomor_seri'];?>" required="required" autofocus="autofocus">
					<label for="nomor_seri">Nomor Seri</label>
				</div>
        	</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="gain" name="gain" class="form-control" placeholder="gain" value="<?php echo @$model['gain'];?>" required="required" autofocus="autofocus">
					<label for="gain">Gain</label>
				</div>
        	</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="kontrak" name="kontrak" class="form-control" placeholder="kontrak" value="<?php echo @$model['kontrak'];?>" required="required" autofocus="autofocus">
					<label for="kontrak">Kontrak</label>
				</div>
        	</div>

			
			<div class="form-group">
				<input type="hidden" name="id">
					<div class="col-md-12">
						<input type="submit" name="simpan" class="btn btn-info" value="simpan">
			          	<span class="glyphicon glyphicon-ok"></span>
			        	</input>
						<a href="<?php echo site_url('antena/index')?>" class="btn btn-danger">
						<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
					</div>
				</input>
			</div>

		</form>

	</div>
