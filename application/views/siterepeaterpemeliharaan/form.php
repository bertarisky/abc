	<div class="panel-body bgtable">
		<p class="alert-danger"><?php echo @$alert;?></p>

			<form method="post" class="form-horizontal">

				<div class="form-group">
					<div class="form-label-group">
						<input type="date" id="waktu" name="waktu" class="form-control" placeholder="waktu" value="<?php echo @$model['waktu'];?>" required="required" autofocus="autofocus">
						<label for="waktu">Waktu</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kegiatan" name="kegiatan" class="form-control" placeholder="kegiatan" value="<?php echo @$model['kegiatan'];?>" required="required" autofocus="autofocus">
						<label for="kegiatan">Kegiatan</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="hasil" name="hasil" class="form-control" placeholder="hasil" value="<?php echo @$model['hasil'];?>" required="required" autofocus="autofocus">
						<label for="hasil">Hasil</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="personil_pelaksana" name="personil_pelaksana" class="form-control" placeholder="personil_pelaksana" value="<?php echo @$model['personil_pelaksana'];?>" required="required" autofocus="autofocus">
						<label for="personil_pelaksana">Personil Pelaksana</label>
					</div>
            	</div>

				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-sm btn-info" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    		</input>
							<a href="<?php echo site_url('siterepeaterpemeliharaan/index');?>" class="btn btn-sm btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		