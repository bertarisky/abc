  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table RPT Trunking
    </div>

    <div class="card-body">
      <div class="col-md-12">          
        <table class="table table-hover table-bordered">

          <tr class="info">
            <th width="200px">Kesatuan
              <td colspan="2"><?php echo $model['kesatuan'];?></td>
            </th>
          </tr>
          <tr class="info">
            <th width="200px">Site
              <td colspan="2"><?php echo $model['site'];?></td>
            </th>
          </tr>


          <!-- RBS/RPT -->
          <tr class="info">
            <th rowspan="14">RBS/RPT</th>
              <tr>
                <td width="200px">No Kontrakan</td>
                <td><?php echo $model['rbs_merk'];?></td>
              </tr>
              <tr>
                <td>No RBS/RPT</td>
                <td><?php echo $model['rbs_rbs'];?></td>
              </tr>
              <tr>
                <td>Nomor Merk</td>
                <td><?php echo $model['rbs_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['rbs_jenis'];?></td>
              </tr>
              <tr>
                <td>Teknologi</td>
                <td><?php echo $model['rbs_teknologi'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['rbs_seri'];?></td>
              </tr>
              <tr>
                <td>Versi Firmware</td>
                <td><?php echo $model['rbs_versi'];?></td>
              </tr>
              <!-- setup RBS/RPT -->
              <tr>
                <td>Setup Sensitivitas</td>
                <td><?php echo $model['rbs_setup_sensitivitas'];?></td>
              </tr>
              <tr>
                <td>Setup Daya Pancar</td>
                <td><?php echo $model['rbs_setup_dayapancar'];?></td>
              </tr>
              <tr>
                <td>Setup Bandwidth</td>
                <td><?php echo $model['rbs_setup_bandwith'];?></td>
              </tr>
              <!-- kondisi RBS/RPT -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['rbs_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['rbs_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['rbs_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <!-- Router -->
          <tr class="info">
            <th rowspan="9">Router</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['router_merk'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['router_seri'];?></td>
              </tr>
              <tr>
                <td>Versi Firmware</td>
                <td><?php echo $model['router_versi'];?></td>
              </tr>
              <tr>
                <td>No Kontrak</td>
                <td><?php echo $model['router_kontrak'];?></td>
              </tr>
              <tr>
                <td>Nomor Rak</td>
                <td><?php echo $model['router_rak'];?></td>
              </tr>
              <!-- kondisi Router -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['router_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['router_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['router_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <!-- Switch -->
          <tr class="info">
            <th rowspan="9">Switch</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['switch_merk'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['switch_seri'];?></td>
              </tr>
              <tr>
                <td>Versi Firmware</td>
                <td><?php echo $model['switch_versi'];?></td>
              </tr>
              <tr>
                <td>No Kontrak</td>
                <td><?php echo $model['switch_kontrak'];?></td>
              </tr>
              <tr>
                <td>Nomor Rak</td>
                <td><?php echo $model['switch_rak'];?></td>
              </tr>
              <!-- kondisi Switch -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['switch_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['switch_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['switch_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <!-- Antena RX -->
          <tr class="info">
            <th rowspan="10">Antena RX</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['antenarx_merk'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['antenarx_seri'];?></td>
              </tr>
              <tr>
                <td>Gain</td>
                <td><?php echo $model['antenarx_gain'];?></td>
              </tr>
              <tr>
                <td>Posisi</td>
                <td><?php echo $model['antenarx_posisi'];?></td>
              </tr>
              <tr>
                <td>Pola Radiasi</td>
                <td><?php echo $model['antenarx_pola'];?></td>
              </tr>
              <tr>
                <td>No Kontrak</td>
                <td><?php echo $model['antenarx_kontrak'];?></td>
              </tr>
              <!-- kondisi Antena RX -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['antenarx_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['antenarx_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['antenarx_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <!-- Antena TX -->
          <tr class="info">
            <th rowspan="10">Antena TX</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['antenatx_merk'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['antenatx_seri'];?></td>
              </tr>
              <tr>
                <td>Gain</td>
                <td><?php echo $model['antenatx_gain'];?></td>
              </tr>
              <tr>
                <td>Posisi</td>
                <td><?php echo $model['antenatx_posisi'];?></td>
              </tr>
              <tr>
                <td>Pola Radiasi</td>
                <td><?php echo $model['antenatx_pola'];?></td>
              </tr>
              <tr>
                <td>No Kontrak</td>
                <td><?php echo $model['antenatx_kontrak'];?></td>
              </tr>
              <!-- kondisi Antena TX -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['antenatx_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['antenatx_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['antenatx_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <!-- TTA -->
          <tr class="info">
            <th rowspan="9">TTA (Top Tower Aplifler)</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['tta_merk'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['tta_seri'];?></td>
              </tr>
              <tr>
                <td>Gain</td>
                <td><?php echo $model['tta_gain'];?></td>
              </tr>
              <tr>
                <td>Posisi</td>
                <td><?php echo $model['tta_posisi'];?></td>
              </tr>
              <tr>
                <td>No Kontrak</td>
                <td><?php echo $model['tta_kontrak'];?></td>
              </tr>
              <!-- kondisi TTA -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['tta_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['tta_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['tta_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <!-- RMC -->
          <tr class="info">
            <th rowspan="9">RMC (RF Multi Coupler)</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['rmc_merk'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['rmc_seri'];?></td>
              </tr>
              <tr>
                <td>Jumlah Channel</td>
                <td><?php echo $model['rmc_channel'];?></td>
              </tr>
              <tr>
                <td>Nomor Rak</td>
                <td><?php echo $model['rmc_rak'];?></td>
              </tr>
              <tr>
                <td>No Kontrak</td>
                <td><?php echo $model['rmc_kontrak'];?></td>
              </tr>
              <!-- kondisi RMC -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['rmc_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['rmc_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['rmc_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <!-- TX Cobiner -->
          <tr class="info">
            <th rowspan="9">TX Cobiner</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['txcobiner_merk'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['txcobiner_seri'];?></td>
              </tr>
              <tr>
                <td>Jumlah Channel</td>
                <td><?php echo $model['txcobiner_channel'];?></td>
              </tr>
              <tr>
                <td>Nomor Rak</td>
                <td><?php echo $model['txcobiner_rak'];?></td>
              </tr>
              <tr>
                <td>No Kontrak</td>
                <td><?php echo $model['txcobiner_kontrak'];?></td>
              </tr>
              <!-- kondisi TX Cobiner -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['txcobiner_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['txcobiner_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['txcobiner_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <!-- Kabel RX -->
          <tr class="info">
            <th rowspan="8">Kabel RX</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['kabelrx_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['kabelrx_jenis'];?></td>
              </tr>
              <tr>
                <td>Panjang</td>
                <td><?php echo $model['kabelrx_panjang'];?></td>
              </tr>
              <tr>
                <td>No Kontrak</td>
                <td><?php echo $model['kabelrx_kontrak'];?></td>
              </tr>
              <!-- kondisi Kabel RX -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['kabelrx_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['kabelrx_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['kabelrx_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <!-- Kabel TX -->
          <tr class="info">
            <th rowspan="8">Kabel TX</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['kabeltx_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['kabeltx_jenis'];?></td>
              </tr>
              <tr>
                <td>Panjang</td>
                <td><?php echo $model['kabeltx_panjang'];?></td>
              </tr>
              <tr>
                <td>No Kontrak</td>
                <td><?php echo $model['kabeltx_kontrak'];?></td>
              </tr>
              <!-- kondisi Kabel TX -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['kabeltx_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['kabeltx_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['kabeltx_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>


          <tr class="info">
            <th rowspan="5">Pemeliharaan</th>
              <tr>
                <td>Waktu</td>
                <td><?php echo $pemeliharaan['waktu'];?></td>
              </tr>
              <tr>
                <td>Kegiatan</td>
                <td><?php echo $pemeliharaan['kegiatan'];?></td>
              </tr>
              <tr>
                <td>Hasil</td>
                <td><?php echo $pemeliharaan['hasil'];?></td>
              </tr>
              <tr>
                <td>Personil Pelaksana</td>
                <td><?php echo $pemeliharaan['personil_pelaksana'];?></td>
              </tr>   
          </tr>

          <tr>
            <th>Aksi
              <td colspan="2">
                <a href="<?php echo site_url('rpttrunking/edit/'.$model['id']);?>" class="btn btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('rpttrunking/delete/'.$model['id']);?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              </td>
            </th>
          </tr>

        </table>

  				<a href="<?php echo site_url('rpttrunking/index');?>" class="btn btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>