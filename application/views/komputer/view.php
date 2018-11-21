  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Komputer
    </div>

    <div class="card-body">
      <div class="col-md-12">
                 
        <table class="table table-hover table-bordered">

            <tr class="info">
              <th>Jenis
                <td><?php echo $komputer['jenis'];?></td>
              </th>
            </tr>

            <tr>
              <th>Nomor Seri
                <td><?php echo $komputer['no_seri'];?></td>
              </th>
            </tr>

            <tr>
              <th>CPU
                <td><?php echo $komputer['cpu'];?></td>
              </th>
            </tr>

            <tr>
              <th>Memory
                <td><?php echo $komputer['memory'];?></td>
              </th>
            </tr>

            <tr>
              <th>Harddisk
                <td><?php echo $komputer['harddisk'];?></td>
              </th>
            </tr>

            <tr>
              <th>Kegunaan
                <td><?php echo $komputer['kegunaan'];?></td>
              </th>
            </tr>

            <tr>
              <th>Posisi
                <td><?php echo $komputer['posisi'];?></td>
              </th>
            </tr>

            <tr>
              <th>Kontrak
                <td><?php echo $komputer['kontrak'];?></td>
              </th>
            </tr>

            <tr>
              <th>Penanggung Jawab
                <td><?php echo $komputer['penanggungjawab'];?></td>
              </th>
            </tr>

            <tr>
              <th>Keterangan
                <td><?php echo $komputer['keterangan'];?></td>
              </th>
            </tr>

            <tr>
              <th width="200px">Aksi</th>
              	<td>
                	<a href="<?php echo site_url('komputer/edit/'.$komputer['id']);?>" class="btn btn-success">
                	<i class="fas fa-edit"></i></a>

                	<a href="<?php echo site_url('komputer/delete/'.$komputer['id']);?>" class="btn btn-danger">
                	<i class="fas fa-trash-alt"></i></a>
              	</td>
            </tr>

        </table>

		              <a href="<?php echo site_url('komputer/index');?>" class="btn btn-danger">
		              <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>