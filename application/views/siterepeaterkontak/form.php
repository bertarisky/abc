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
						<input type="text" id="nomor" name="nomor" class="form-control" placeholder="nomor" value="<?php echo @$model['nomor'];?>" required="required" autofocus="autofocus">
						<label for="nomor">Nomor</label>
					</div>
            	</div>

				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-sm btn-info" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    		</input>
							<a href="<?php echo site_url('siterepeaterkontak/index');?>" class="btn btn-sm btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		