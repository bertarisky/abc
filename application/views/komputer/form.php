	<div class="panel-body bgtable">
		<?php echo @$alert;?>

		<form method="post" class="form-horizontal">

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="jenis" name="jenis" class="form-control" placeholder="Jenis" value="<?php echo @$model['jenis'];?>" required="required" autofocus="autofocus">
					<label for="jenis">Jenis</label>
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
					<input type="text" id="cpu" name="cpu" class="form-control" placeholder="CPU" value="<?php echo @$model['cpu'];?>" required="required" autofocus="autofocus">
					<label for="cpu">CPU</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="memory" name="memory" class="form-control" placeholder="Memory" value="<?php echo @$model['memory'];?>" required="required" autofocus="autofocus">
					<label for="memory">Memory</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="harddisk" name="harddisk" class="form-control" placeholder="Harddisk" value="<?php echo @$model['harddisk'];?>" required="required" autofocus="autofocus">
					<label for="harddisk">Harddisk</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="kegunaan" name="kegunaan" class="form-control" placeholder="Kegunaan" value="<?php echo @$model['kegunaan'];?>" required="required" autofocus="autofocus">
					<label for="kegunaan">Kegunaan</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="posisi" name="posisi" class="form-control" placeholder="Posisi" value="<?php echo @$model['posisi'];?>" required="required" autofocus="autofocus">
					<label for="posisi">Posisi</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="kontrak" name="kontrak" class="form-control" placeholder="Kontrak" value="<?php echo @$model['kontrak'];?>" required="required" autofocus="autofocus">
					<label for="kontrak">Kontrak</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="penanggungjawab" name="penanggungjawab" class="form-control" placeholder="Penanggung Jawab" value="<?php echo @$model['penanggungjawab'];?>" required="required" autofocus="autofocus">
					<label for="penanggungjawab">Penanggung Jawab</label>
				</div>
			</div>

			<div class="form-group">
				<div class="form-label-group">
					<input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo @$model['keterangan'];?>" required="required" autofocus="autofocus">
					<label for="keterangan">Keterangan</label>
				</div>
			</div>

			<div class="form-group">
				<input type="hidden" name="id">
					<div class="col-md-12">
					
						<input type="submit" name="simpan" class="btn btn-info" value="simpan">
			         	 <span class="glyphicon glyphicon-ok"></span>
			        	</input>

						<a href="<?php echo site_url('komputer/index')?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
					</div>
				</input>
			</div>
		</form>
	</div>	