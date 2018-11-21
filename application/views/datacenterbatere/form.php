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
						<input type="text" id="kapasitas" name="kapasitas" class="form-control" placeholder="kapasitas" value="<?php echo @$model['kapasitas'];?>" required="required" autofocus="autofocus">
						<label for="kapasitas">Kapasitas</label>
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
							<a href="<?php echo site_url('datacenterbatere/index');?>" class="btn btn-sm btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		