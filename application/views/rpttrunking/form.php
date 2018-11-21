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
						<input type="text" id="site" name="site" class="form-control" placeholder="Site" value="<?php echo @$model['site'];?>" required="required" autofocus="autofocus">
						<label for="site">Site</label>
					</div>
            	</div>

            	<!-- rbs/rpt -->
            	<div><h3>RBS/RPT</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rbs_kontark" name="rbs_kontark" class="form-control" placeholder="No Kontrak" value="<?php echo @$model['rbs_kontark'];?>" required="required" autofocus="autofocus">
						<label for="rbs_kontark">No Kontrak</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rbs_rbs" name="rbs_rbs" class="form-control" placeholder="No RBS/RPT" value="<?php echo @$model['rbs_rbs'];?>" required="required" autofocus="autofocus">
						<label for="rbs_rbs">No RBS/RPT</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rbs_merk" name="rbs_merk" class="form-control" placeholder="Merk" value="<?php echo @$model['rbs_merk'];?>" required="required" autofocus="autofocus">
						<label for="rbs_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rbs_jenis" name="rbs_jenis" class="form-control" placeholder="Jenis/Type" value="<?php echo @$model['rbs_jenis'];?>" required="required" autofocus="autofocus">
						<label for="rbs_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rbs_teknologi" name="rbs_teknologi" class="form-control" placeholder="Teknologi" value="<?php echo @$model['rbs_teknologi'];?>" required="required" autofocus="autofocus">
						<label for="rbs_teknologi">Teknologi</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rbs_seri" name="rbs_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['rbs_seri'];?>" required="required" autofocus="autofocus">
						<label for="rbs_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rbs_versi" name="rbs_versi" class="form-control" placeholder="Versi Firmware" value="<?php echo @$model['rbs_versi'];?>" required="required" autofocus="autofocus">
						<label for="rbs_versi">Versi Firmware</label>
					</div>
            	</div>
            	</div>

            	<div><h3>RBS/RPT Setup</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rbs_setup_sensitivitas" name="rbs_setup_sensitivitas" class="form-control" placeholder="Sensitivitas" value="<?php echo @$model['rbs_setup_sensitivitas'];?>" required="required" autofocus="autofocus">
						<label for="rbs_setup_sensitivitas">Sensitivitas</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rbs_setup_dayapancar" name="rbs_setup_dayapancar" class="form-control" placeholder="Daya Pancar" value="<?php echo @$model['rbs_setup_dayapancar'];?>" required="required" autofocus="autofocus">
						<label for="rbs_setup_dayapancar">Daya Pancar</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rbs_setup_bandwith" name="rbs_setup_bandwith" class="form-control" placeholder="Bandwidth" value="<?php echo @$model['rbs_setup_bandwith'];?>" required="required" autofocus="autofocus">
						<label for="rbs_setup_bandwith">Bandwidth</label>
					</div>
            	</div>
            	</div>

            	<div><h3>RBS/RPT Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="rbs_kondisi_bb" name="rbs_kondisi_bb" class="form-control" placeholder="BB" value="1" <?php if (isset($model['rbs_kondisi_bb']) && $model['rbs_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="rbs_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="rbs_kondisi_rr" name="rbs_kondisi_rr" class="form-control" placeholder="RR" value="1" <?php if (isset($model['rbs_kondisi_rr']) && $model['rbs_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="rbs_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="rbs_kondisi_rb" name="rbs_kondisi_rb" class="form-control" placeholder="RB" value="1" <?php if (isset($model['rbs_kondisi_rb']) && $model['rbs_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="rbs_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- end rbs -->

            	<!-- router -->
            	<div><h3>Router</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="router_merk" name="router_merk" class="form-control" placeholder="Merk" value="<?php echo @$model['router_merk'];?>" required="required" autofocus="autofocus">
						<label for="router_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="router_seri" name="router_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['router_seri'];?>" required="required" autofocus="autofocus">
						<label for="router_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="router_versi" name="router_versi" class="form-control" placeholder="Versi Firmware" value="<?php echo @$model['router_versi'];?>" required="required" autofocus="autofocus">
						<label for="router_versi">Versi Firmware</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="router_kontrak" name="router_kontrak" class="form-control" placeholder="No Kontrak" value="<?php echo @$model['router_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="router_kontrak">No Kontrak</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="router_rak" name="router_rak" class="form-control" placeholder="Nomor Rak" value="<?php echo @$model['router_rak'];?>" required="required" autofocus="autofocus">
						<label for="router_rak">Nomor Rak</label>
					</div>
            	</div>
            	</div>

            	<div><h3>Router Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="router_kondisi_bb" name="router_kondisi_bb" class="form-control" placeholder="router_kondisi_bb" value="1" <?php if (isset($model['router_kondisi_bb']) && $model['router_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="router_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="router_kondisi_rr" name="router_kondisi_rr" class="form-control" placeholder="router_kondisi_rr" value="1" <?php if (isset($model['router_kondisi_rr']) && $model['router_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="router_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="router_kondisi_rb" name="router_kondisi_rb" class="form-control" placeholder="router_kondisi_rb" value="1" <?php if (isset($model['router_kondisi_rb']) && $model['router_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="router_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- end router -->

            	<!-- Switch -->
            	<div><h3>Switch</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="switch_merk" name="switch_merk" class="form-control" placeholder="Merk" value="<?php echo @$model['switch_merk'];?>" required="required" autofocus="autofocus">
						<label for="switch_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="switch_seri" name="switch_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['switch_seri'];?>" required="required" autofocus="autofocus">
						<label for="switch_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="switch_versi" name="switch_versi" class="form-control" placeholder="Versi Firmware" value="<?php echo @$model['switch_versi'];?>" required="required" autofocus="autofocus">
						<label for="switch_versi">Versi Firmware</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="switch_kontrak" name="switch_kontrak" class="form-control" placeholder="No Kontrak" value="<?php echo @$model['switch_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="switch_kontrak">No Kontrak</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="switch_rak" name="switch_rak" class="form-control" placeholder="Nomor Rak" value="<?php echo @$model['switch_rak'];?>" required="required" autofocus="autofocus">
						<label for="switch_rak">Nomor Rak</label>
					</div>
            	</div>
            	</div>
            	
            	<div><h3>Switch Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="switch_kondisi_bb" name="switch_kondisi_bb" class="form-control" placeholder="switch_kondisi_bb" value="1" <?php if (isset($model['switch_kondisi_bb']) && $model['switch_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="switch_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="switch_kondisi_rr" name="switch_kondisi_rr" class="form-control" placeholder="switch_kondisi_rr" value="1" <?php if (isset($model['switch_kondisi_rr']) && $model['switch_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="switch_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="switch_kondisi_rb" name="switch_kondisi_rb" class="form-control" placeholder="switch_kondisi_rb" value="1" <?php if (isset($model['switch_kondisi_rb']) && $model['switch_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="switch_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- end switch -->

            	<!-- Antena RX -->
            	<div><h3>Antena RX</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenarx_merk" name="antenarx_merk" class="form-control" placeholder="Merk" value="<?php echo @$model['antenarx_merk'];?>" required="required" autofocus="autofocus">
						<label for="antenarx_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenarx_seri" name="antenarx_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['antenarx_seri'];?>" required="required" autofocus="autofocus">
						<label for="antenarx_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenarx_gain" name="antenarx_gain" class="form-control" placeholder="Gain" value="<?php echo @$model['antenarx_gain'];?>" required="required" autofocus="autofocus">
						<label for="antenarx_gain">Gain</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenarx_posisi" name="antenarx_posisi" class="form-control" placeholder="Posisi" value="<?php echo @$model['antenarx_posisi'];?>" required="required" autofocus="autofocus">
						<label for="antenarx_posisi">Posisi</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenarx_pola" name="antenarx_pola" class="form-control" placeholder="Pola Radiasi" value="<?php echo @$model['antenarx_pola'];?>" required="required" autofocus="autofocus">
						<label for="antenarx_pola">Pola Radiasi</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenarx_kontrak" name="antenarx_kontrak" class="form-control" placeholder="No Kontrak" value="<?php echo @$model['antenarx_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="antenarx_kontrak">No Kontrak</label>
					</div>
            	</div>
            	</div>
            	
            	<div><h3>Antena RX Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="antenarx_kondisi_bb" name="antenarx_kondisi_bb" class="form-control" placeholder="antenarx_kondisi_bb" value="1" <?php if (isset($model['antenarx_kondisi_bb']) && $model['antenarx_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="antenarx_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="antenarx_kondisi_rr" name="antenarx_kondisi_rr" class="form-control" placeholder="antenarx_kondisi_rr" value="1" <?php if (isset($model['antenarx_kondisi_rr']) && $model['antenarx_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="antenarx_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="antenarx_kondisi_rb" name="antenarx_kondisi_rb" class="form-control" placeholder="antenarx_kondisi_rb" value="1" <?php if (isset($model['antenarx_kondisi_rb']) && $model['antenarx_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="antenarx_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- end antena RX -->

            	<!-- Antena TX -->
            	<div><h3>Antena TX</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenatx_merk" name="antenatx_merk" class="form-control" placeholder="Merk" value="<?php echo @$model['antenatx_merk'];?>" required="required" autofocus="autofocus">
						<label for="antenatx_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenatx_seri" name="antenatx_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['antenatx_seri'];?>" required="required" autofocus="autofocus">
						<label for="antenatx_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenatx_gain" name="antenatx_gain" class="form-control" placeholder="Gain" value="<?php echo @$model['antenatx_gain'];?>" required="required" autofocus="autofocus">
						<label for="antenatx_gain">Gain</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenatx_posisi" name="antenatx_posisi" class="form-control" placeholder="Posisi" value="<?php echo @$model['antenatx_posisi'];?>" required="required" autofocus="autofocus">
						<label for="antenatx_posisi">Posisi</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenatx_pola" name="antenatx_pola" class="form-control" placeholder="Pola Radiasi" value="<?php echo @$model['antenatx_pola'];?>" required="required" autofocus="autofocus">
						<label for="antenatx_pola">Pola Radiasi</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="antenatx_kontrak" name="antenatx_kontrak" class="form-control" placeholder="No Kontrak" value="<?php echo @$model['antenatx_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="antenatx_kontrak">No Kontrak</label>
					</div>
            	</div>
            	</div>
            	
            	<div><h3>Antena TX Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="antenatx_kondisi_bb" name="antenatx_kondisi_bb" class="form-control" placeholder="antenatx_kondisi_bb" value="1" <?php if (isset($model['antenatx_kondisi_bb']) && $model['antenatx_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="antenatx_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="antenatx_kondisi_rr" name="antenatx_kondisi_rr" class="form-control" placeholder="antenatx_kondisi_rr" value="1" <?php if (isset($model['antenatx_kondisi_rr']) && $model['antenatx_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="antenatx_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="antenatx_kondisi_rb" name="antenatx_kondisi_rb" class="form-control" placeholder="antenatx_kondisi_rb" value="1" <?php if (isset($model['antenatx_kondisi_rb']) && $model['antenatx_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="antenatx_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- end antena TX -->

            	<!-- TTA -->
            	<div><h3>TTA (Top Tower Aplifire)</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="tta_merk" name="tta_merk" class="form-control" placeholder="Merk" value="<?php echo @$model['tta_merk'];?>" required="required" autofocus="autofocus">
						<label for="tta_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="tta_seri" name="tta_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['tta_seri'];?>" required="required" autofocus="autofocus">
						<label for="tta_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="tta_gain" name="tta_gain" class="form-control" placeholder="Gain" value="<?php echo @$model['tta_gain'];?>" required="required" autofocus="autofocus">
						<label for="tta_gain">Gain</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="tta_posisi" name="tta_posisi" class="form-control" placeholder="Posisi" value="<?php echo @$model['tta_posisi'];?>" required="required" autofocus="autofocus">
						<label for="tta_posisi">Posisi</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="tta_kontrak" name="tta_kontrak" class="form-control" placeholder="No Kontrak" value="<?php echo @$model['tta_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="tta_kontrak">No Kontrak</label>
					</div>
            	</div>
            	</div>
            	
            	<div><h3>TTA (Top Tower Aplifire) Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="tta_kondisi_bb" name="tta_kondisi_bb" class="form-control" placeholder="tta_kondisi_bb" value="1" <?php if (isset($model['tta_kondisi_bb']) && $model['tta_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="tta_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="tta_kondisi_rr" name="tta_kondisi_rr" class="form-control" placeholder="tta_kondisi_rr" value="1" <?php if (isset($model['tta_kondisi_rr']) && $model['tta_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="tta_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="tta_kondisi_rb" name="tta_kondisi_rb" class="form-control" placeholder="tta_kondisi_rb" value="1" <?php if (isset($model['tta_kondisi_rb']) && $model['tta_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="tta_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- end TTA -->

            	<!-- RMC -->
            	<div><h3>RMC (RF Multi Coupler)</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rmc_merk" name="rmc_merk" class="form-control" placeholder="Merk" value="<?php echo @$model['rmc_merk'];?>" required="required" autofocus="autofocus">
						<label for="rmc_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rmc_seri" name="rmc_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['rmc_seri'];?>" required="required" autofocus="autofocus">
						<label for="rmc_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rmc_channel" name="rmc_channel" class="form-control" placeholder="Jumlah Channel" value="<?php echo @$model['rmc_channel'];?>" required="required" autofocus="autofocus">
						<label for="rmc_channel">Jumlah Channel</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rmc_rak" name="rmc_rak" class="form-control" placeholder="Nomor Rak" value="<?php echo @$model['rmc_rak'];?>" required="required" autofocus="autofocus">
						<label for="rmc_rak">Nomor Rak</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="rmc_kontrak" name="rmc_kontrak" class="form-control" placeholder="No Kontrak" value="<?php echo @$model['rmc_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="rmc_kontrak">No Kontrak</label>
					</div>
            	</div>
            	</div>
            	
            	<div><h3>RMC (RF Multi Coupler) Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="rmc_kondisi_bb" name="rmc_kondisi_bb" class="form-control" placeholder="rmc_kondisi_bb" value="1" <?php if (isset($model['rmc_kondisi_bb']) && $model['rmc_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="rmc_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="rmc_kondisi_rr" name="rmc_kondisi_rr" class="form-control" placeholder="rmc_kondisi_rr" value="1" <?php if (isset($model['rmc_kondisi_rr']) && $model['rmc_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="rmc_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="rmc_kondisi_rb" name="rmc_kondisi_rb" class="form-control" placeholder="rmc_kondisi_rb" value="1" <?php if (isset($model['rmc_kondisi_rb']) && $model['rmc_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="rmc_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- end RMC -->

            	<!-- TX Cobiner -->
            	<div><h3>TX Cobiner</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="txcobiner_merk" name="txcobiner_merk" class="form-control" placeholder="Merk" value="<?php echo @$model['txcobiner_merk'];?>" required="required" autofocus="autofocus">
						<label for="txcobiner_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="txcobiner_seri" name="txcobiner_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['txcobiner_seri'];?>" required="required" autofocus="autofocus">
						<label for="txcobiner_seri">Nomor Seri</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="txcobiner_channel" name="txcobiner_channel" class="form-control" placeholder="Jumlah Channel" value="<?php echo @$model['txcobiner_channel'];?>" required="required" autofocus="autofocus">
						<label for="txcobiner_channel">Jumlah Channel</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="txcobiner_rak" name="txcobiner_rak" class="form-control" placeholder="Nomor Rak" value="<?php echo @$model['txcobiner_rak'];?>" required="required" autofocus="autofocus">
						<label for="txcobiner_rak">Nomor Rak</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="txcobiner_kontrak" name="txcobiner_kontrak" class="form-control" placeholder="No Kontrak" value="<?php echo @$model['txcobiner_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="txcobiner_kontrak">No Kontrak</label>
					</div>
            	</div>
            	</div>
            	
            	<div><h3>TX Cobiner Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="txcobiner_kondisi_bb" name="txcobiner_kondisi_bb" class="form-control" placeholder="txcobiner_kondisi_bb" value="1" <?php if (isset($model['txcobiner_kondisi_bb']) && $model['txcobiner_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="txcobiner_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="txcobiner_kondisi_rr" name="txcobiner_kondisi_rr" class="form-control" placeholder="txcobiner_kondisi_rr" value="1" <?php if (isset($model['txcobiner_kondisi_rr']) && $model['txcobiner_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="txcobiner_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="txcobiner_kondisi_rb" name="txcobiner_kondisi_rb" class="form-control" placeholder="txcobiner_kondisi_rb" value="1" <?php if (isset($model['txcobiner_kondisi_rb']) && $model['txcobiner_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="txcobiner_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- end TX Cobiner -->

            	<!-- Kabel RX -->
            	<div><h3>Kabel RX</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabelrx_merk" name="kabelrx_merk" class="form-control" placeholder="Merk" value="<?php echo @$model['kabelrx_merk'];?>" required="required" autofocus="autofocus">
						<label for="kabelrx_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabelrx_jenis" name="kabelrx_jenis" class="form-control" placeholder="Jenis/Type" value="<?php echo @$model['kabelrx_jenis'];?>" required="required" autofocus="autofocus">
						<label for="kabelrx_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabelrx_panjang" name="kabelrx_panjang" class="form-control" placeholder="Panjang" value="<?php echo @$model['kabelrx_panjang'];?>" required="required" autofocus="autofocus">
						<label for="kabelrx_panjang">Panjang</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabelrx_kontrak" name="kabelrx_kontrak" class="form-control" placeholder="No Kontrak" value="<?php echo @$model['kabelrx_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="kabelrx_kontrak">No Kontrak</label>
					</div>
            	</div>
            	</div>
            	
            	<div><h3>Kabel RX Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kabelrx_kondisi_bb" name="kabelrx_kondisi_bb" class="form-control" placeholder="kabelrx_kondisi_bb" value="1" <?php if (isset($model['kabelrx_kondisi_bb']) && $model['kabelrx_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kabelrx_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kabelrx_kondisi_rr" name="kabelrx_kondisi_rr" class="form-control" placeholder="kabelrx_kondisi_rr" value="1" <?php if (isset($model['kabelrx_kondisi_rr']) && $model['kabelrx_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kabelrx_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kabelrx_kondisi_rb" name="kabelrx_kondisi_rb" class="form-control" placeholder="kabelrx_kondisi_rb" value="1" <?php if (isset($model['kabelrx_kondisi_rb']) && $model['kabelrx_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kabelrx_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- end Kabel RX -->

            	<!-- Kabel TX -->
            	<div><h3>Kabel TX</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabeltx_merk" name="kabeltx_merk" class="form-control" placeholder="Merk" value="<?php echo @$model['kabeltx_merk'];?>" required="required" autofocus="autofocus">
						<label for="kabeltx_merk">Merk</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabeltx_jenis" name="kabeltx_jenis" class="form-control" placeholder="Jenis/Type" value="<?php echo @$model['kabeltx_jenis'];?>" required="required" autofocus="autofocus">
						<label for="kabeltx_jenis">Jenis/Type</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabeltx_panjang" name="kabeltx_panjang" class="form-control" placeholder="Panjang" value="<?php echo @$model['kabeltx_panjang'];?>" required="required" autofocus="autofocus">
						<label for="kabeltx_panjang">Panjang</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="kabeltx_kontrak" name="kabeltx_kontrak" class="form-control" placeholder="No Kontrak" value="<?php echo @$model['kabeltx_kontrak'];?>" required="required" autofocus="autofocus">
						<label for="kabeltx_kontrak">No Kontrak</label>
					</div>
            	</div>
            	</div>
            	
            	<div><h3>Kabel TX Kondisi</h3>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kabeltx_kondisi_bb" name="kabeltx_kondisi_bb" class="form-control" placeholder="kabeltx_kondisi_bb" value="1" <?php if (isset($model['kabeltx_kondisi_bb']) && $model['kabeltx_kondisi_bb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kabeltx_kondisi_bb">BB</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kabeltx_kondisi_rr" name="kabeltx_kondisi_rr" class="form-control" placeholder="kabeltx_kondisi_rr" value="1" <?php if (isset($model['kabeltx_kondisi_rr']) && $model['kabeltx_kondisi_rr'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kabeltx_kondisi_rr">RR</label>
					</div>
            	</div>
            	<div class="form-group">
					<div class="form-label-group">
						<input type="checkbox" id="kabeltx_kondisi_rb" name="kabeltx_kondisi_rb" class="form-control" placeholder="kabeltx_kondisi_rb" value="1" <?php if (isset($model['kabeltx_kondisi_rb']) && $model['kabeltx_kondisi_rb'] == 1 ): echo "checked"; endif ?> autofocus="autofocus">
						<label for="kabeltx_kondisi_rb">RB</label>
					</div>
            	</div>
            	</div>
            	<!-- end Kabel TX -->


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

				
				<div class="form-group">
					<input type="hidden" name="id">
						<div class="col-md-12">
							<input type="submit" name="simpan" class="btn btn-info" value="simpan">
				          	<span class="glyphicon glyphicon-ok"></span>
				    		</input>
							<a href="<?php echo site_url('rpttrunking/index');?>" class="btn btn-danger">
							<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>
						</div>
					</input>
				</div>

			</form>

	</div>
		