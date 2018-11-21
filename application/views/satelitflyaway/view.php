  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Satelit Flyaway
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

          <!-- Disk -->
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
              <!-- kondisi Disk -->
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
          <!-- Disk End -->

          <!-- Antena Controller -->
          <tr class="info">
            <th rowspan="7">Antena Controller</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['antena_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['antena_jenis'];?></td>
              </tr>
              <tr>
                <td>Ukuran</td>
                <td><?php echo $model['antena_ukuran'];?></td>
              </tr>
              <!-- kondisi Antena Controller -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['antena_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['antena_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['antena_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>
          <!-- Antena Controller End -->

          <!-- SSPA/BUC -->
          <tr class="info">
            <th rowspan="9">SSPA/BUC</th>
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
              <!-- kondisi SSPA/BUC -->
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
          <!-- SSPA/BUC End -->

          <!-- UP/DOWN Converter -->
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
              <!-- kondisi UP/DOWN Converter -->
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
          <!-- UP/DOWN Converter End -->

          <!-- LNA/LNB -->
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
              <!-- kondisi LNA/LNB -->
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
          <!-- LNA/LNB End -->

          <!-- Feedhorn -->
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
              <!-- kondisi Feedhorn -->
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
          <!-- Feedhorn End -->

          <!-- Modem -->
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
              <!-- kondisi Modem -->
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
          <!-- Modem End -->

          <!-- Codec -->
          <tr class="info">
            <th rowspan="7">Codec</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['codec_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['codec_jenis'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['codec_seri'];?></td>
              </tr>
              <!-- kondisi Codec -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['codec_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['codec_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['codec_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>
          <!-- Codec End -->

          <!-- Kamera -->
          <tr class="info">
            <th rowspan="7">Kamera</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['kamera_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['kamera_jenis'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['kamera_seri'];?></td>
              </tr>
              <!-- kondisi Kamera -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['kamera_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['kamera_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['kamera_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>
          <!-- Kamera End -->

          <!-- Televisi -->
          <tr class="info">
            <th rowspan="7">Televisi</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['televisi_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['televisi_jenis'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['televisi_seri'];?></td>
              </tr>
              <!-- kondisi Televisi -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['televisi_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['televisi_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['televisi_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>
          <!-- Televisi End -->

          <!-- Laptop -->
          <tr class="info">
            <th rowspan="7">Laptop</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['televisi_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['televisi_jenis'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['televisi_seri'];?></td>
              </tr>
              <!-- kondisi Laptop -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['televisi_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['televisi_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['televisi_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>
          <!-- Laptop End -->

          <!-- Pemeliharaan -->
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
          <!-- Pemeliharaan end -->

          <tr>
            <th>Aksi
              <td colspan="2">
                <a href="<?php echo site_url('satelitflyaway/edit/'.$model['id']);?>" class="btn btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('satelitflyaway/delete/'.$model['id']);?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              </td>
            </th>
          </tr>

        </table>

  				<a href="<?php echo site_url('satelitflyaway/index');?>" class="btn btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>