  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Sistem Informasi - Aplikasi
    </div>

    <div class="card-body">
      <div class="col-md-12">
                     
        <table class="table table-hover table-bordered">

          <tr class="info">
            <th width="200px">Kesatuan
              <td colspan="2"><?php echo $aplikasi['kesatuan'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Merk
              <td colspan="2"><?php echo $aplikasi['nama'];?></td>
            </th>
          </tr>

          <tr class="info">
            <th width="200px">Jenis/Type
              <td colspan="2"><?php echo $aplikasi['fiture_layanan'];?></td>
            </th>
          </tr>

          <tr class="info">
          <th rowspan="5">Perawatan</th>
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

          <tr class="info">
            <th width="200px">Kontrak
              <td colspan="2"><?php echo $aplikasi['kontrak'];?></td>
            </th>
          </tr>

          <tr>
            <th width="200px">Aksi</th>
              <td colspan="2">
                <a href="<?php echo site_url('aplikasi/edit/'.$aplikasi['id']);?>" class="btn btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('aplikasi/delete/'.$aplikasi['id']);?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              </td>
          </tr>

        </table>

				        <a href="<?php echo site_url('aplikasi/index');?>" class="btn btn-danger">
				        <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>