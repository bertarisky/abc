	<div class="panel-body bgtable">
		<p class="alert-danger"><?php echo @$alert;?></p>

			<form method="post" class="form-horizontal">

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="nama_site" name="nama_site" class="form-control" placeholder="nama_site" value="<?php echo @$model['nama_site'];?>" required="required" autofocus="autofocus">
						<label for="nama_site">Nama Site</label>
					</div>
            	</div>
				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="alamat" name="alamat" class="form-control" placeholder="alamat" value="<?php echo @$model['alamat'];?>" required="required" autofocus="autofocus">
						<label for="alamat">Alamat</label>
					</div>
            	</div>
				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="koordinat" name="koordinat" class="form-control" placeholder="koordinat" value="<?php echo @$model['koordinat'];?>" required="required" autofocus="autofocus">
						<label for="koordinat">Koordinat</label>
					</div>
            	</div>
				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="elevasi" name="elevasi" class="form-control" placeholder="elevasi" value="<?php echo @$model['elevasi'];?>" required="required" autofocus="autofocus">
						<label for="elevasi">Elevasi</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="jln_akses" name="jln_akses" class="form-control" placeholder="jln_akses" value="<?php echo @$model['jln_akses'];?>" required="required" autofocus="autofocus">
						<label for="jln_akses">Jalan Akses</label>
					</div>
            	</div>
            	
        		<div class="form-group">
					<select class="form-control" name="id_selter" id="selter" required="required">
						<option value="">Pilih Shelter</option>
							<?php foreach ($masterdata['selters'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['jenis']; ?></option>
							<?php endforeach; ?>
						</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_tower" id="tower" required="required">
						<option value="">Pilih Tower</option>
							<?php foreach ($masterdata['towers'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['jenis']; ?></option>
							<?php endforeach; ?>
						</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_genset" id="genset" required="required">
						<option value="">Pilih Genset</option>
							<?php foreach ($masterdata['gensets'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['merk']; ?></option>
							<?php endforeach; ?>
						</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_ups" id="ups" required="required">
						<option value="">Pilih Ups</option>
							<?php foreach ($masterdata['ups'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['merk']; ?></option>
							<?php endforeach; ?>
						</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_batere" id="batere" required="required">
						<option value="">Pilih Batere</option>
							<?php foreach ($masterdata['bateres'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['merk']; ?></option>
							<?php endforeach; ?>
						</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_rak" id="rak" required="required">
						<option value="">Pilih Rak</option>
							<?php foreach ($masterdata['raks'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['nomor']; ?></option>
							<?php endforeach; ?>
						</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_pemeliharaan" id="pemeliharaan" required="required">
						<option value="">Pilih Pemeliharaan</option>
							<?php foreach ($masterdata['pemeliharaans'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['waktu']; ?></option>
							<?php endforeach; ?>
						</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_kontak" id="kontak" required="required">
						<option value="">Pilih Kontak Person</option>
							<?php foreach ($masterdata['kontaks'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['nama']; ?></option>
							<?php endforeach; ?>
						</select>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="grounding" name="grounding" class="form-control" placeholder="grounding" value="<?php echo @$model['grounding'];?>" required="required" autofocus="autofocus">
						<label for="grounding">Grounding</label>
					</div>
            	</div>

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="coverage" name="coverage" class="form-control" placeholder="coverage" value="<?php echo @$model['coverage'];?>" required="required" autofocus="autofocus">
						<label for="coverage">Coverage</label>
					</div>
            	</div>

				
				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-info btn-sm" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    		</input>
							<a href="<?php echo site_url('siterepeater/index');?>" class="btn btn-danger btn-sm">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		