  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Kabel Feeder
    </div>

    <div class="card-body">
      <div class="col-md-12">
                 
        <table class="table table-hover table-bordered">

            <tr class="info">
              <th>Merk
                <td><?php echo $kabel['merk'];?></td>
              </th>
            </tr>

            <tr>
              <th>Jenis/Type
                <td><?php echo $kabel['type_kabel'];?></td>
              </th>
            </tr>

            <tr>
              <th>Panjang
                <td><?php echo $kabel['panjang'];?></td>
              </th>
            </tr>

            <tr>
              <th>Roll
                <td><?php echo $kabel['roll'];?></td>
              </th>
            </tr>

            <tr>
              <th>Kontrak
                <td><?php echo $kabel['kontrak'];?></td>
              </th>
            </tr>

            <tr>
              <th width="200px">Aksi</th>
                <td>
                  <a href="<?php echo site_url('kabel/edit/'.$kabel['id']);?>" class="btn btn-success">
                  <i class="fas fa-edit"></i></a>

                  <a href="<?php echo site_url('kabel/delete/'.$kabel['id']);?>" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>

        </table>

		              <a href="<?php echo site_url('kabel/index');?>" class="btn btn-danger">
		              <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>