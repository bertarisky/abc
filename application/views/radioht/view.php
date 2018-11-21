  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Radio HT
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
            <th rowspan="10">Radio</th>
              <tr>
                <td width="200px">Merk</td>
                <td><?php echo $model['radio_merk'];?></td>
              </tr>
              <tr>
                <td>Jenis/Type</td>
                <td><?php echo $model['radio_jenis'];?></td>
              </tr>
              <tr>
                <td>Nomor Seri</td>
                <td><?php echo $model['radio_seri'];?></td>
              </tr>
              <tr>
                <td>Radio ID</td>
                <td><?php echo $model['radio_id'];?></td>
              </tr>
              <tr>
                <td>Daya Pancar</td>
                <td><?php echo $model['radio_dayapancar'];?></td>
              </tr>
              <tr>
                <td>Sensitivitas</td>
                <td><?php echo $model['radio_sensitivitas'];?></td>
              </tr>
              <!-- kondisi radio -->
              <tr>
                <td>Kondisi BB</td>
                <td><?php if ($model['radio_kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RR</td>
                <td><?php if ($model['radio_kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
              <tr>
                <td>Kondisi RB</td>
                <td><?php if ($model['radio_kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
              </tr>
          </tr>

          <tr class="info">
            <th width="200px">Pemegang
              <td colspan="2"><?php echo $model['pemegang'];?></td>
            </th>
          </tr>
          <tr class="info">
            <th width="200px">Call Sign
              <td colspan="2"><?php echo $model['call_sign'];?></td>
            </th>
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
                <a href="<?php echo site_url('radioht/edit/'.$model['id']);?>" class="btn btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('radioht/delete/'.$model['id']);?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              </td>
            </th>
          </tr>

        </table>

  				<a href="<?php echo site_url('radioht/index');?>" class="btn btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>