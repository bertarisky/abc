  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table RPT Convensional
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

          <tr class="info">
            <th rowspan="20">RPT/BS</th>
              <tr>
                <td width="200px">Nomor/Nama(RPT/BS)</td>
                <td><?php echo $model['rpt_nomor'];?></td>
              </tr>
              <tr>
                <td>No. Kontrak</td>
                <td><?php echo $model['rpt_kontrak'];?></td>
              </tr>
              <tr>
                <td>Nama RPT/BS</td>
                <td><?php echo $model['rpt_nama'];?></td>
              </tr>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['rpt_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['rpt_jenis'];?></td>
              </tr>
              <tr>
                <td>Teknologi</td>
                <td><?php echo $model['rpt_teknologi'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['rpt_seri'];?></td>
              </tr>
              <tr>
                <td>Versi Firmware</td>
                <td><?php echo $model['rpt_versi'];?></td>
              </tr>
              <tr>
                <td>Frek RX</td>
                <td><?php echo $model['rpt_frek_rx'];?></td>
              </tr>
              <tr>
                <td>Frek TX</td>
                <td><?php echo $model['rpt_frek_tx'];?></td>
              </tr>
              <tr>
                <td>Tone RX</td>
                <td><?php echo $model['rpt_tone_rx'];?></td>
              </tr>
              <tr>
                <td>Tone TX</td>
                <td><?php echo $model['rpt_tone_tx'];?></td>
              </tr>
              <tr>
                <td>Sensitivitas</td>
                <td><?php echo $model['rpt_sensitivitas'];?></td>
              </tr>
              <tr>
                <td>Daya Pancar</td>
                <td><?php echo $model['rpt_dayapancar'];?></td>
              </tr>
              <tr>
                <td>Power Listrik</td>
                <td><?php echo $model['rpt_power'];?></td>
              </tr>
              <tr>
                <td>Nomor Rak</td>
                <td><?php echo $model['rpt_rak'];?></td>
              </tr>
          </tr>
          <!-- kondisi rpt/bs -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['rpt_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['rpt_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['rpt_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>

          <tr class="info">
            <th rowspan="6">Antena</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['antena_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis</td>
                <td><?php echo $model['antena_jenis'];?></td>
              </tr>
              <tr>
                <td>Gain</td>
                <td><?php echo $model['antena_gain'];?></td>
              </tr>
              <tr>
                <td>Posisi</td>
                <td><?php echo $model['antena_posisi'];?></td>
              </tr>
              <tr>
                <td>No.Kontrak</td>
                <td><?php echo $model['antena_kontrak'];?></td>
              </tr>
          </tr>

          <tr class="info">
            <th rowspan="5">Kabel Feeder</th>
              <tr>
                <td>Merk</td>
                <td><?php echo $model['kabel_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['kabel_jenis'];?></td>
              </tr>
              <tr>
                <td>Panjang</td>
                <td><?php echo $model['kabel_panjang'];?></td>
              </tr>
              <tr>
                <td>No.Kontrak</td>
                <td><?php echo $model['kabel_kontrak'];?></td>
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
                <a href="<?php echo site_url('rptconvensional/edit/'.$model['id']);?>" class="btn btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('rptconvensional/delete/'.$model['id']);?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              </td>
            </th>
          </tr>

        </table>

  				<a href="<?php echo site_url('rptconvensional/index');?>" class="btn btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>