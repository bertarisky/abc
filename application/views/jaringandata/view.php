  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Jaringan Data (ROUTER, CORE SWITCH, SWITCH, WLC, AP)
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
            <th width="200px">Nama Perangkat
              <td colspan="2"><?php echo $model['nama_perangkat'];?></td>
            </th>
          </tr>
          <tr class="info">
            <th width="200px">Merk
              <td colspan="2"><?php echo $model['merk'];?></td>
            </th>
          </tr>
          <tr class="info">
            <th width="200px">Jenis/Type
              <td colspan="2"><?php echo $model['jenis'];?></td>
            </th>
          </tr>
          <tr class="info">
            <th width="200px">Nomor Seri
              <td colspan="2"><?php echo $model['seri'];?></td>
            </th>
          </tr>
          <tr class="info">
            <th width="200px">Versi Firmware
              <td colspan="2"><?php echo $model['versi'];?></td>
            </th>
          </tr>
          <tr class="info">
            <th width="200px">Posisi
              <td colspan="2"><?php echo $model['posisi'];?></td>
            </th>
          </tr>
          <tr class="info">
            <th width="200px">Nomor Rak
              <td colspan="2"><?php echo $model['rak'];?></td>
            </th>
          </tr>

          <!-- kondisi -->
          <tr class="info">
            <th rowspan="4">Kondisi</th>
              <tr>
                <td>BB</td>
                <td><?php if ($model['kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>RR</td>
                <td><?php if ($model['kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>RB</td>
                <td><?php if ($model['kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <tr class="info">
            <th rowspan="5">Pemeliharaan</th>
              <tr>
                <td width="200px">Waktu</td>
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
                <a href="<?php echo site_url('jaringandata/edit/'.$model['id']);?>" class="btn btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('jaringandata/delete/'.$model['id']);?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              </td>
            </th>
          </tr>

        </table>

  				<a href="<?php echo site_url('jaringandata/index');?>" class="btn btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>