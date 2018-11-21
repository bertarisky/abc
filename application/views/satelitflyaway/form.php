	<div class="panel-body bgtable">
		<p class="alert-danger"><?php echo @$alert;?></p>

			<form method="post" class="form-horizontal">

            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kesatuan" name="kesatuan" class="form-control" placeholder="kesatuan" value="<?php echo @$model['kesatuan'];?>" required="required" autofocus="autofocus">
						<label for="kesatuan">Kesatuan</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="jenis_antena" name="jenis_antena" class="form-control" placeholder="Jenis Antena" value="<?php echo @$model['jenis_antena'];?>" required="required" autofocus="autofocus">
						<label for="jenis_antena">Jenis Antena</label>
					</div>
            	</div>

            	<!-- Disk -->
            	<div><h3>Disk</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="disk_merk" name="disk_merk" class="form-control" placeholder="merk" value="<?php echo @$model['disk_merk'];?>" required="required" autofocus="autofocus">
						<label for="disk_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="disk_jenis" name="disk_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['disk_jenis'];?>" required="required" autofocus="autofocus">
						<label for="disk_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="disk_ukuran" name="disk_ukuran" class="form-control" placeholder="Ukuran" value="<?php echo @$model['disk_ukuran'];?>" required="required" autofocus="autofocus">
						<label for="disk_ukuran">Ukuran</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Disk Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="disk_kondisi_bb" name="disk_kondisi_bb" class="form-control" placeholder="disk_kondisi_bb" value="1" <?php if (isset($model['disk_kondisi_bb']) && $model['disk_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="disk_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="disk_kondisi_rr" name="disk_kondisi_rr" class="form-control" placeholder="disk_kondisi_rr" value="1" <?php if (isset($model['disk_kondisi_rr']) && $model['disk_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="disk_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="disk_kondisi_rb" name="disk_kondisi_rb" class="form-control" placeholder="disk_kondisi_rb" value="1" <?php if (isset($model['disk_kondisi_rb']) && $model['disk_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="disk_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- disk end -->

            	<!-- Antena Controller -->
            	<div><h3>Antena Controller</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antena_merk" name="antena_merk" class="form-control" placeholder="merk" value="<?php echo @$model['antena_merk'];?>" required="required" autofocus="autofocus">
						<label for="antena_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antena_jenis" name="antena_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['antena_jenis'];?>" required="required" autofocus="autofocus">
						<label for="antena_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antena_ukuran" name="antena_ukuran" class="form-control" placeholder="Ukuran" value="<?php echo @$model['antena_ukuran'];?>" required="required" autofocus="autofocus">
						<label for="antena_ukuran">Ukuran</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Antena Controller Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="antena_kondisi_bb" name="antena_kondisi_bb" class="form-control" placeholder="antena_kondisi_bb" value="1" <?php if (isset($model['antena_kondisi_bb']) && $model['antena_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="antena_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="antena_kondisi_rr" name="antena_kondisi_rr" class="form-control" placeholder="antena_kondisi_rr" value="1" <?php if (isset($model['antena_kondisi_rr']) && $model['antena_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="antena_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="antena_kondisi_rb" name="antena_kondisi_rb" class="form-control" placeholder="antena_kondisi_rb" value="1" <?php if (isset($model['antena_kondisi_rb']) && $model['antena_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="antena_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- Antena Controller end -->

            	<!-- SSPA/BUC -->
            	<div><h3>SSPA/BUC</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="sspa_merk" name="sspa_merk" class="form-control" placeholder="merk" value="<?php echo @$model['sspa_merk'];?>" required="required" autofocus="autofocus">
						<label for="sspa_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="sspa_jenis" name="sspa_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['sspa_jenis'];?>" required="required" autofocus="autofocus">
						<label for="sspa_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="sspa_seri" name="sspa_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['sspa_seri'];?>" required="required" autofocus="autofocus">
						<label for="sspa_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="sspa_frekuensi" name="sspa_frekuensi" class="form-control" placeholder="Frekuensi Kerja" value="<?php echo @$model['sspa_frekuensi'];?>" required="required" autofocus="autofocus">
						<label for="sspa_frekuensi">Frekuensi Kerja</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="sspa_daya" name="sspa_daya" class="form-control" placeholder="Daya" value="<?php echo @$model['sspa_daya'];?>" required="required" autofocus="autofocus">
						<label for="sspa_daya">Daya</label>
					</div>
            	</div>
            	</div>

            	<div><h3>SSPA/BUC Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="sspa_kondisi_bb" name="sspa_kondisi_bb" class="form-control" placeholder="sspa_kondisi_bb" value="1" <?php if (isset($model['sspa_kondisi_bb']) && $model['sspa_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="sspa_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="sspa_kondisi_rr" name="sspa_kondisi_rr" class="form-control" placeholder="sspa_kondisi_rr" value="1" <?php if (isset($model['sspa_kondisi_rr']) && $model['sspa_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="sspa_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="sspa_kondisi_rb" name="sspa_kondisi_rb" class="form-control" placeholder="sspa_kondisi_rb" value="1" <?php if (isset($model['sspa_kondisi_rb']) && $model['sspa_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="sspa_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- SSPA/BUC end -->

            	<!-- UP/DOWN Converter -->
            	<div><h3>UP/DOWN Converter</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="up_merk" name="up_merk" class="form-control" placeholder="merk" value="<?php echo @$model['up_merk'];?>" required="required" autofocus="autofocus">
						<label for="up_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="up_jenis" name="up_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['up_jenis'];?>" required="required" autofocus="autofocus">
						<label for="up_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="up_seri" name="up_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['up_seri'];?>" required="required" autofocus="autofocus">
						<label for="up_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="up_frekuensi" name="up_frekuensi" class="form-control" placeholder="Frekuensi Kerja" value="<?php echo @$model['up_frekuensi'];?>" required="required" autofocus="autofocus">
						<label for="up_frekuensi">Frekuensi Kerja</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="up_daya" name="up_daya" class="form-control" placeholder="Daya" value="<?php echo @$model['up_daya'];?>" required="required" autofocus="autofocus">
						<label for="up_daya">Daya</label>
					</div>
            	</div>
            	</div>

            	<div><h3>UP/DOWN Converter Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="up_kondisi_bb" name="up_kondisi_bb" class="form-control" placeholder="up_kondisi_bb" value="1" <?php if (isset($model['up_kondisi_bb']) && $model['up_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="up_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="up_kondisi_rr" name="up_kondisi_rr" class="form-control" placeholder="up_kondisi_rr" value="1" <?php if (isset($model['up_kondisi_rr']) && $model['up_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="up_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="up_kondisi_rb" name="up_kondisi_rb" class="form-control" placeholder="up_kondisi_rb" value="1" <?php if (isset($model['up_kondisi_rb']) && $model['up_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="up_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- UP/DOWN Converter end -->

            	<!-- LNA/LNB -->
            	<div><h3>LNA/LNB</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="lna_merk" name="lna_merk" class="form-control" placeholder="merk" value="<?php echo @$model['lna_merk'];?>" required="required" autofocus="autofocus">
						<label for="lna_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="lna_jenis" name="lna_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['lna_jenis'];?>" required="required" autofocus="autofocus">
						<label for="lna_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="lna_seri" name="lna_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['lna_seri'];?>" required="required" autofocus="autofocus">
						<label for="lna_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="lna_frekuensi" name="lna_frekuensi" class="form-control" placeholder="Frekuensi Kerja" value="<?php echo @$model['lna_frekuensi'];?>" required="required" autofocus="autofocus">
						<label for="lna_frekuensi">Frekuensi Kerja</label>
					</div>
            	</div>
            	</div>

            	<div><h3>LNA/LNB Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="lna_kondisi_bb" name="lna_kondisi_bb" class="form-control" placeholder="lna_kondisi_bb" value="1" <?php if (isset($model['lna_kondisi_bb']) && $model['lna_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="lna_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="lna_kondisi_rr" name="lna_kondisi_rr" class="form-control" placeholder="lna_kondisi_rr" value="1" <?php if (isset($model['lna_kondisi_rr']) && $model['lna_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="lna_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="lna_kondisi_rb" name="lna_kondisi_rb" class="form-control" placeholder="lna_kondisi_rb" value="1" <?php if (isset($model['lna_kondisi_rb']) && $model['lna_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="lna_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- LNA/LNB end -->

            	<!-- Feedhorn -->
            	<div><h3>Feedhorn</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="feedhorn_merk" name="feedhorn_merk" class="form-control" placeholder="merk" value="<?php echo @$model['feedhorn_merk'];?>" required="required" autofocus="autofocus">
						<label for="feedhorn_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="feedhorn_jenis" name="feedhorn_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['feedhorn_jenis'];?>" required="required" autofocus="autofocus">
						<label for="feedhorn_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="feedhorn_seri" name="feedhorn_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['feedhorn_seri'];?>" required="required" autofocus="autofocus">
						<label for="feedhorn_seri">Nomor Seri</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Feedhorn Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="feedhorn_kondisi_bb" name="feedhorn_kondisi_bb" class="form-control" placeholder="feedhorn_kondisi_bb" value="1" <?php if (isset($model['feedhorn_kondisi_bb']) && $model['feedhorn_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="feedhorn_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="feedhorn_kondisi_rr" name="feedhorn_kondisi_rr" class="form-control" placeholder="feedhorn_kondisi_rr" value="1" <?php if (isset($model['feedhorn_kondisi_rr']) && $model['feedhorn_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="feedhorn_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="feedhorn_kondisi_rb" name="feedhorn_kondisi_rb" class="form-control" placeholder="feedhorn_kondisi_rb" value="1" <?php if (isset($model['feedhorn_kondisi_rb']) && $model['feedhorn_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="feedhorn_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- Feedhorn end -->

            	<!-- Modem -->
            	<div><h3>Modem</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="modem_merk" name="modem_merk" class="form-control" placeholder="merk" value="<?php echo @$model['modem_merk'];?>" required="required" autofocus="autofocus">
						<label for="modem_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="modem_jenis" name="modem_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['modem_jenis'];?>" required="required" autofocus="autofocus">
						<label for="modem_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="modem_seri" name="modem_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['modem_seri'];?>" required="required" autofocus="autofocus">
						<label for="modem_seri">Nomor Seri</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Modem Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="modem_kondisi_bb" name="modem_kondisi_bb" class="form-control" placeholder="modem_kondisi_bb" value="1" <?php if (isset($model['modem_kondisi_bb']) && $model['modem_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="modem_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="modem_kondisi_rr" name="modem_kondisi_rr" class="form-control" placeholder="modem_kondisi_rr" value="1" <?php if (isset($model['modem_kondisi_rr']) && $model['modem_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="modem_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="modem_kondisi_rb" name="modem_kondisi_rb" class="form-control" placeholder="modem_kondisi_rb" value="1" <?php if (isset($model['modem_kondisi_rb']) && $model['modem_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="modem_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- Modem end -->

            	<!-- Codec -->
            	<div><h3>Codec</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="codec_merk" name="codec_merk" class="form-control" placeholder="merk" value="<?php echo @$model['codec_merk'];?>" required="required" autofocus="autofocus">
						<label for="codec_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="codec_jenis" name="codec_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['codec_jenis'];?>" required="required" autofocus="autofocus">
						<label for="codec_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="codec_seri" name="codec_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['codec_seri'];?>" required="required" autofocus="autofocus">
						<label for="codec_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="codec_versi" name="codec_versi" class="form-control" placeholder="Versi Firmware" value="<?php echo @$model['codec_versi'];?>" required="required" autofocus="autofocus">
						<label for="codec_versi">Versi Firemware</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Codec Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="codec_kondisi_bb" name="codec_kondisi_bb" class="form-control" placeholder="codec_kondisi_bb" value="1" <?php if (isset($model['codec_kondisi_bb']) && $model['codec_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="codec_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="codec_kondisi_rr" name="codec_kondisi_rr" class="form-control" placeholder="codec_kondisi_rr" value="1" <?php if (isset($model['codec_kondisi_rr']) && $model['codec_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="codec_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="codec_kondisi_rb" name="codec_kondisi_rb" class="form-control" placeholder="codec_kondisi_rb" value="1" <?php if (isset($model['codec_kondisi_rb']) && $model['codec_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="codec_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- Codec end -->

            	<!-- Kamera -->
            	<div><h3>Kamera</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kamera_merk" name="kamera_merk" class="form-control" placeholder="merk" value="<?php echo @$model['kamera_merk'];?>" required="required" autofocus="autofocus">
						<label for="kamera_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kamera_jenis" name="kamera_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['kamera_jenis'];?>" required="required" autofocus="autofocus">
						<label for="kamera_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kamera_seri" name="kamera_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['kamera_seri'];?>" required="required" autofocus="autofocus">
						<label for="kamera_seri">Nomor Seri</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Kamera Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kamera_kondisi_bb" name="kamera_kondisi_bb" class="form-control" placeholder="kamera_kondisi_bb" value="1" <?php if (isset($model['kamera_kondisi_bb']) && $model['kamera_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kamera_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kamera_kondisi_rr" name="kamera_kondisi_rr" class="form-control" placeholder="kamera_kondisi_rr" value="1" <?php if (isset($model['kamera_kondisi_rr']) && $model['kamera_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kamera_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kamera_kondisi_rb" name="kamera_kondisi_rb" class="form-control" placeholder="kamera_kondisi_rb" value="1" <?php if (isset($model['kamera_kondisi_rb']) && $model['kamera_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kamera_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- Kamera end -->

            	<!-- Televisi -->
            	<div><h3>Televisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="televisi_merk" name="televisi_merk" class="form-control" placeholder="merk" value="<?php echo @$model['televisi_merk'];?>" required="required" autofocus="autofocus">
						<label for="televisi_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="televisi_jenis" name="televisi_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['televisi_jenis'];?>" required="required" autofocus="autofocus">
						<label for="televisi_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="televisi_seri" name="televisi_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['televisi_seri'];?>" required="required" autofocus="autofocus">
						<label for="televisi_seri">Nomor Seri</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Televisi Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="televisi_kondisi_bb" name="televisi_kondisi_bb" class="form-control" placeholder="televisi_kondisi_bb" value="1" <?php if (isset($model['televisi_kondisi_bb']) && $model['televisi_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="televisi_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="televisi_kondisi_rr" name="televisi_kondisi_rr" class="form-control" placeholder="televisi_kondisi_rr" value="1" <?php if (isset($model['televisi_kondisi_rr']) && $model['televisi_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="televisi_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="televisi_kondisi_rb" name="televisi_kondisi_rb" class="form-control" placeholder="televisi_kondisi_rb" value="1" <?php if (isset($model['televisi_kondisi_rb']) && $model['televisi_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="televisi_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- Televisi end -->

            	<!-- Laptop -->
            	<div><h3>Laptop</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="laptop_merk" name="laptop_merk" class="form-control" placeholder="merk" value="<?php echo @$model['laptop_merk'];?>" required="required" autofocus="autofocus">
						<label for="laptop_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="laptop_jenis" name="laptop_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['laptop_jenis'];?>" required="required" autofocus="autofocus">
						<label for="laptop_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="laptop_seri" name="laptop_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['laptop_seri'];?>" required="required" autofocus="autofocus">
						<label for="laptop_seri">Nomor Seri</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Laptop Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="laptop_kondisi_bb" name="laptop_kondisi_bb" class="form-control" placeholder="laptop_kondisi_bb" value="1" <?php if (isset($model['laptop_kondisi_bb']) && $model['laptop_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="laptop_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="laptop_kondisi_rr" name="laptop_kondisi_rr" class="form-control" placeholder="laptop_kondisi_rr" value="1" <?php if (isset($model['laptop_kondisi_rr']) && $model['laptop_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="laptop_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="laptop_kondisi_rb" name="laptop_kondisi_rb" class="form-control" placeholder="laptop_kondisi_rb" value="1" <?php if (isset($model['laptop_kondisi_rb']) && $model['laptop_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="laptop_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- Laptop end -->

            	<!-- pemeliharaan -->
        		<div class="form_pemeliharaan">
	            	<h3>Pemeliharaan</h3>
	            	<div class="form-group">
						<div class="form-label-group">
							<input type="date" id="waktu" name="pemeliharaan[waktu]" class="form-control" placeholder="waktu" value="<?php echo @$pemeliharaan['waktu'];?>" required="required" autofocus="autofocus">
							<label for="waktu">Waktu</label>
						</div>
	            	</div>
	            	<div class="form-group">
						<div class="form-label-group">
							<input type="text" id="kegiatan" name="pemeliharaan[kegiatan]" class="form-control" placeholder="kegiatan" value="<?php echo @$pemeliharaan['kegiatan'];?>" required="required" autofocus="autofocus">
							<label for="kegiatan">Kegiatan</label>
						</div>
	            	</div>
	            	<div class="form-group">
						<div class="form-label-group">
							<input type="text" id="hasil" name="pemeliharaan[hasil]" class="form-control" placeholder="hasil" value="<?php echo @$pemeliharaan['hasil'];?>" required="required" autofocus="autofocus">
							<label for="hasil">Hasil</label>
						</div>
	            	</div>
	            	<div class="form-group">
						<div class="form-label-group">
							<input type="text" id="personil_pelaksana" name="pemeliharaan[personil_pelaksana]" class="form-control" placeholder="personil_pelaksana" value="<?php echo @$pemeliharaan['personil_pelaksana'];?>" required="required" autofocus="autofocus">
							<label for="personil_pelaksana">Personil Pelaksana</label>
						</div>
	            	</div>
	            </div>
	            <!-- pemeliharaan end -->

				
				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-info" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    		</input>
							<a href="<?php echo site_url('satelitflyaway/index');?>" class="btn btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		