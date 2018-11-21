  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Sistem Informasi - Security
    </div>

    <div class="card-body">
      <div class="col-md-12">
                 
        <table class="table table-hover table-bordered">

          <tr class="info">
            <th width="200px">Kesatuan
              <td colspan="2"><?php echo $scurity['kesatuan'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Merk
              <td colspan="2"><?php echo $scurity['merk'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Jenis/Type
              <td colspan="2"><?php echo $scurity['type_scurity'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Nomor Seri
              <td colspan="2"><?php echo $scurity['no_seri'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Fungsi
              <td colspan="2"><?php echo $scurity['fungsi'];?></td>
            </th>
          </tr>


          <tr class="info">
          <th rowspan="4">Kondisi</th>

             <tr>
              <td>BB</td>
              <td><?php if ($scurity['kondisi_bb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
            </tr>

            <tr>
              <td>RR</td>
              <td><?php if ($scurity['kondisi_rr']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
            </tr>

            <tr>
              <td>RB</td>
              <td><?php if ($scurity['kondisi_rb']) {echo "<i class='fas fa-check icon_success'></i>";}?></td>
            </tr>


          <tr class="info">
          <th rowspan="4">Akses</th>
            <tr>
              <td width="200px">Waktu</td>
              <td><?php echo $scurity['akses_waktu'];?></td>
            </tr>
            <tr>
              <td>Kegiatan</td>
              <td><?php echo $scurity['akses_kegiatan'];?></td>
            </tr>
            <tr>
              <td>Pers Pelaksana</td>
              <td><?php echo $scurity['akses_pelaksana'];?></td>
            </tr>
          </tr>

          <tr class="info">
            <th width="200px">Kontrak
              <td colspan="2"><?php echo $scurity['kontrak'];?></td>
            </th>
          </tr>

          <tr>
            <th width="200px">Aksi</th>
              <td colspan="2">
                <a href="<?php echo site_url('scurity/edit/'.$scurity['id']);?>" class="btn btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('scurity/delete/'.$scurity['id']);?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              </td>
          </tr>

        </table>

		            <a href="<?php echo site_url('scurity/index');?>" class="btn btn-danger">
		            <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>