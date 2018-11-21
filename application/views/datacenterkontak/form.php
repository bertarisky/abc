	<div class="panel-body bgtable">
		<p class="alert-danger"><?php echo @$alert;?></p>

			<form method="post" class="form-horizontal">

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="nama" name="nama" class="form-control" placeholder="nama" value="<?php echo @$model['nama'];?>" required="required" autofocus="autofocus">
						<label for="nama">Nama</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="no_telepon" name="no_telepon" class="form-control" placeholder="no_telepon" value="<?php echo @$model['no_telepon'];?>" required="required" autofocus="autofocus">
						<label for="no_telepon">Nomor Telepon</label>
					</div>
            	</div>

				
				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-sm btn-info" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    		</input>
							<a href="<?php echo site_url('datacenterkontak/index');?>" class="btn btn-sm btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		