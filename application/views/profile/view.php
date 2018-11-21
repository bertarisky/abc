  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Profile Personil
    </div>

    <div class="card-body">
      <div class="col-md-12">        
        <table class="table table-hover table-bordered">
          <tr class="info">
            <th>Kesatuan
              <td><?php echo $profile['kesatuan'];?></td>
            </th>
          </tr>
          <tr>
            <th>Nama
              <td><?php echo $profile['nama'];?></td>
            </th>
          </tr>
          <tr>
            <th>Pangkat
              <td><?php echo $profile['pangkat'];?></td>
            </th>
          </tr>
          <tr>
            <th>NRP
              <td><?php echo $profile['nrp'];?></td>
            </th>
          </tr>
          <tr>
            <th>Pendidikan Umum
              <td><?php echo $profile['pendidikan'];?></td>
            </th>
          </tr>
          <tr>
            <th>Kejuruan/Khursus
              <td><?php echo $profile['kejuruan'];?></td>
            </th>
          </tr>
          <tr>
            <th>Kompetensi
              <td><?php echo $profile['kompetensi'];?></td>
            </th>
          </tr>
          <tr>
            <th>Keterangan
              <td><?php echo $profile['keterangan'];?></td>
            </th>
          </tr>
          <tr>
            <th width="200px">Aksi
              <td>
              <a href="<?php echo site_url('profile/edit/'.$profile['id']);?>" class="btn btn-success">
              <i class="fas fa-edit"></i></a>

              <a href="<?php echo site_url('profile/delete/'.$profile['id']);?>" class="btn btn-danger">
              <i class="fas fa-trash-alt"></i></a>
            </td>
            </th>
          </tr>
        </table>

  				<a href="<?php echo site_url('profile/index');?>" class="btn btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>