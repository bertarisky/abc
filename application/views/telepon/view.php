  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Telepon
    </div>

    <div class="card-body">
      <div class="col-md-12">
                 
        <table class="table table-hover table-bordered">
          
            <tr class="info">
              <th>Kesatuan
                <td><?php echo $telepon['kesatuan'];?></td>
              </th>
            </tr>

            <tr>
              <th>Nomor Telepon
                <td><?php echo $telepon['no_telepon'];?></td>
              </th> 
            </tr>

            <tr>
              <th>Nomor Telepon
                <td><?php echo $telepon['no_telepon'];?></td>
              </th> 
            </tr>

            <tr>
              <th>Pengguna
                <td><?php echo $telepon['pengguna'];?></td>
              </th> 
            </tr>

            <tr>
              <th>Posisi Node
                <td><?php echo $telepon['posisi_node'];?></td>
              </th> 
            </tr>

            <tr>
              <th>Perawatan/Perbaikan
                <td><?php echo $telepon['perawatan'];?></td>
              </th> 
            </tr>

            <tr>
              <th width="200px">Aksi</th>
                <td>
                  <a href="<?php echo site_url('telepon/edit/'.$telepon['id']);?>" class="btn btn-success">
                  <i class="fas fa-edit"></i></a>

                  <a href="<?php echo site_url('telepon/delete/'.$telepon['id']);?>" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>

        </table>

		              <a href="<?php echo site_url('telepon/index');?>" class="btn btn-danger">
		              <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>