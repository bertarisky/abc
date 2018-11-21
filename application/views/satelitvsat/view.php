  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Satelit Vsat
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
            <th width="200px">Jenis Antena
              <td colspan="2"><?php echo $model['jenis_antena'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th rowspan="7">Disk</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['disk_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['disk_jenis'];?></td>
              </tr>
              <tr>
                <td>Ukuran</td>
                <td><?php echo $model['disk_ukuran'];?></td>
              </tr>
              <!-- kondisi disk -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['disk_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['disk_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['disk_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <tr class="info">
            <th rowspan="9">SSPA/BC</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['sspa_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['sspa_jenis'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['sspa_seri'];?></td>
              </tr>
              <tr>
                <td>Frekuensi Kerja</td>
                <td><?php echo $model['sspa_frekuensi'];?></td>
              </tr>
              <tr>
                <td>Daya</td>
                <td><?php echo $model['sspa_daya'];?></td>
              </tr>
              <!-- kondisi disk -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['sspa_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['sspa_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['sspa_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <tr class="info">
            <th rowspan="9">UP/DOWN Converter</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['up_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['up_jenis'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['up_seri'];?></td>
              </tr>
              <tr>
                <td>Frekuensi Kerja</td>
                <td><?php echo $model['up_frekuensi'];?></td>
              </tr>
              <tr>
                <td>Daya</td>
                <td><?php echo $model['up_daya'];?></td>
              </tr>
              <!-- kondisi disk -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['up_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['up_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['up_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <tr class="info">
            <th rowspan="8">LNA/LNB</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['lna_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['lna_jenis'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['lna_seri'];?></td>
              </tr>
              <tr>
                <td>Frekuensi Kerja</td>
                <td><?php echo $model['lna_frekuensi'];?></td>
              </tr>
              <!-- kondisi disk -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['lna_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['lna_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['lna_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <tr class="info">
            <th rowspan="7">Feedhorn</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['feedhorn_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['feedhorn_jenis'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['feedhorn_seri'];?></td>
              </tr>
              <!-- kondisi disk -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['feedhorn_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['feedhorn_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['feedhorn_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <tr class="info">
            <th rowspan="7">Modem</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['modem_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['modem_jenis'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['modem_seri'];?></td>
              </tr>
              <!-- kondisi disk -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['modem_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['modem_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['modem_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
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
                <a href="<?php echo site_url('satelitvsat/edit/'.$model['id']);?>" class="btn btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('satelitvsat/delete/'.$model['id']);?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              </td>
            </th>
          </tr>

        </table>

  				<a href="<?php echo site_url('satelitvsat/index');?>" class="btn btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>