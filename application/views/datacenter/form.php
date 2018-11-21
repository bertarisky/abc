	<div class="panel-body bgtable">
		<p class="alert-danger"><?php echo @$alert;?></p>

			<form method="post" class="form-horizontal">

				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="grounding" name="grounding" class="form-control" placeholder="grounding" value="<?php echo @$model['grounding'];?>" required="required" autofocus="autofocus">
						<label for="grounding">Grounding</label>
					</div>
            	</div>
            	
        		<div class="form-group">
					<select class="form-control" name="id_bangunan" id="bangunan" required="required">
						<option value="">Pilih Bangunan</option>
							<?php foreach ($masterdata['bangunans'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['jenis']; ?></option>
							<?php endforeach; ?>
					</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_ac" id="ac" required="required">
						<option value="">Pilih AC</option>
							<?php foreach ($masterdata['acs'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['nomor']; ?></option>
							<?php endforeach; ?>
					</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_kamera_cctv" id="cctv" required="required">
						<option value="">Pilih Kamera CCTV</option>
							<?php foreach ($masterdata['cctvs'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['nomor']; ?></option>
							<?php endforeach; ?>
					</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_dvr" id="dvr" required="required">
						<option value="">Pilih Dvr</option>
							<?php foreach ($masterdata['dvrs'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['nomor']; ?></option>
							<?php endforeach; ?>
					</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_genset" id="genset" required="required">
						<option value="">Pilih Genset</option>
							<?php foreach ($masterdata['gensets'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['kontrak']; ?></option>
							<?php endforeach; ?>
					</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_ups" id="ups" required="required">
						<option value="">Pilih UPS</option>
							<?php foreach ($masterdata['upss'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['kontrak']; ?></option>
							<?php endforeach; ?>
					</select>
            	</div>

            	<div class="form-group">
					<select class="form-control" name="id_batere" id="batere" required="required">
						<option value="">Pilih Batere</option>
							<?php foreach ($masterdata['bateres'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['kontrak']; ?></option>
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
						<option value="">Pilih Kontak</option>
							<?php foreach ($masterdata['kontaks'] as $data): ?>
								<option value="<?= $data['id']?>"><?= $data['nama']; ?></option>
							<?php endforeach; ?>
					</select>
            	</div>
				
				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-info btn-sm" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    		</input>
							<a href="<?php echo site_url('datacenter/index');?>" class="btn btn-danger btn-sm">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		