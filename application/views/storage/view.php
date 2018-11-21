  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Sistem Informasi - Storage
    </div>

    <div class="card-body">
      <div class="col-md-12">
                 
        <table class="table table-hover table-bordered">

          <tr class="info">
            <th width="200px">Kesatuan
              <td colspan="2"><?php echo $storage['kesatuan'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Merk
              <td colspan="2"><?php echo $storage['merk'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Jenis/Type
              <td colspan="2"><?php echo $storage['type_storage'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Nomor Seri
              <td colspan="2"><?php echo $storage['no_seri'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">RPM
              <td colspan="2"><?php echo $storage['rpm'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Kapasitas
              <td colspan="2"><?php echo $storage['kapasitas'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Pemanfaatan
              <td colspan="2"><?php echo $storage['pemanfaatan'];?></td>
            </th>
          </tr>

          <tr class="info">
          <th rowspan="4">Kondisi</th>

            <tr>
              <td>BB</td>
              <td><?php if ($storage['kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
            </tr>

            <tr>
              <td>RR</td>
              <td><?php if ($storage['kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
            </tr>

            <tr>
              <td>RB</td>
              <td><?php if ($storage['kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
            </tr>


          <tr class="info">
          <th rowspan="4">Akses</th>

            <tr>
              <td width="200px">Waktu</td>
              <td><?php echo $storage['akses_waktu'];?></td>
            </tr>
            <tr>
              <td>Kegiatan</td>
              <td><?php echo $storage['akses_kegiatan'];?></td>
            </tr>
            <tr>
              <td>Pers Pelaksana</td>
              <td><?php echo $storage['akses_pelaksana'];?></td>
            </tr>
          </tr>

          <tr class="info">
            <th width="200px">Kontrak
              <td colspan="2"><?php echo $storage['kontrak'];?></td>
            </th>
          </tr>
          

          <tr>
            <th width="200px">Aksi</th>
              <td colspan="2">
                <a href="<?php echo site_url('storage/edit/'.$storage['id']);?>" class="btn btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('storage/delete/'.$storage['id']);?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              </td>
          </tr>

        </table>

		            <a href="<?php echo site_url('storage/index');?>" class="btn btn-danger">
		            <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>