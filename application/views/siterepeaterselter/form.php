	<div class="panel-body bgtable">
		<p class="alert-danger"><?php echo @$alert;?></p>

			<form method="post" class="form-horizontal">

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kontrak" name="kontrak" class="form-control" placeholder="kontrak" value="<?php echo @$model['kontrak'];?>" required="required" autofocus="autofocus">
						<label for="kontrak">Kontrak</label>
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
						<input type="text" id="ukuran" name="ukuran" class="form-control" placeholder="ukuran" value="<?php echo @$model['ukuran'];?>" required="required" autofocus="autofocus">
						<label for="ukuran">ukuran</label>
					</div>
            	</div>

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="milik" name="milik" class="form-control" placeholder="milik" value="<?php echo @$model['milik'];?>" required="required" autofocus="autofocus">
						<label for="milik">Milik</label>
					</div>
            	</div>
				
				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-sm btn-info" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    		</input>
							<a href="<?php echo site_url('siterepeaterselter/index');?>" class="btn btn-sm btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		