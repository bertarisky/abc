	<div class="panel-body bgtable">
		<p class="alert-danger"><?php echo @$alert;?></p>

			<form method="post" class="form-horizontal">

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kesatuan" name="kesatuan" class="form-control" placeholder="Kesatuan" value="<?php echo @$model['kesatuan'];?>" required="required" autofocus="autofocus">
						<label for="kesatuan">Kesatuan</label>
					</div>
            	</div>

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="dsp" name="dsp" class="form-control" placeholder="dsp" value="<?php echo @$model['dsp'];?>" required="required" autofocus="autofocus">
						<label for="dsp">Dsp</label>
					</div>
            	</div>

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="riil" name="riil" class="form-control" placeholder="riil" value="<?php echo @$model['riil'];?>" required="required" autofocus="autofocus">
						<label for="riil">Riil</label>
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
							<a href="<?php echo site_url('dsp/index');?>" class="btn btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		