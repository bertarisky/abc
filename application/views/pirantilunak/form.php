	<div class="panel-body bgtable">
		<?php echo @$alert;?>

			<form method="post" class="form-horizontal">

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="jenis" name="jenis" class="form-control" placeholder="jenis" value="<?php echo @$model['jenis'];?>" required="required" autofocus="autofocus">
						<label for="jenis">Jenis</label>
					</div>
            	</div>

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="nama" name="nama" class="form-control" placeholder="nama" value="<?php echo @$model['nama'];?>" required="required" autofocus="autofocus">
						<label for="nama">Nama</label>
					</div>
            	</div>

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="tentang" name="tentang" class="form-control" placeholder="tentang" value="<?php echo @$model['tentang'];?>" required="required" autofocus="autofocus">
						<label for="tentang">Tentang</label>
					</div>
            	</div>

				<div class="form-group">
					<div class="form-label-group">
						<input type="date" id="tgl_pembuatan" name="tgl_pembuatan" class="form-control" placeholder="tgl_pembuatan" value="<?php echo @$model['tgl_pembuatan'];?>" required="required" autofocus="autofocus">
						<label for="tgl_pembuatan">Tanggal Pembuatan</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="penanda_tangan" name="penanda_tangan" class="form-control" placeholder="penanda_tangan" value="<?php echo @$model['penanda_tangan'];?>" required="required" autofocus="autofocus">
						<label for="penanda_tangan">Penanda Tangan</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="dokumen" name="dokumen" class="form-control" placeholder="dokumen" value="<?php echo @$model['dokumen'];?>" required="required" autofocus="autofocus">
						<label for="dokumen">Dokumen</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="keterangan" value="<?php echo @$model['keterangan'];?>" required="required" autofocus="autofocus">
						<label for="keterangan">Keterangan</label>
					</div>
            	</div>
				
				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-info" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    		</input>
							<a href="<?php echo site_url('PirantiLunak/index');?>" class="btn btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		