  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Internet
    </div>

    <div class="card-body">
      <div class="col-md-12">
                     
        <table class="table table-hover table-bordered">
                
            <tr class="info">
              <th>Kesatuan
                <td><?php echo $internet['kesatuan'];?></td>
              </th>
            </tr>

            <tr>
              <th>id Pelanggan
                <td><?php echo $internet['id_pelanggan'];?></td>
              </th>
            </tr>

            <tr>
              <th>Jenis
                <td><?php echo $internet['jenis'];?></td>
              </th>
            </tr>

            <tr>
              <th>Bandwidth
                <td><?php echo $internet['bandwidth'];?></td>
              </th>
            </tr>

            <tr>
              <th>Posisi Node
                <td><?php echo $internet['posisi_node'];?></td>
              </th>
            </tr>

            <tr>
              <th>Perangkat Last Mile Penyedia
                <td><?php echo $internet['perangkat_last'];?></td>
              </th>
            </tr>

            <tr>
              <th>Biaya Bulanan
                <td><?php echo $internet['biaya_bulanan'];?></td>
              </th>
            </tr>

            <tr>
              <th>Pemanfaatan
                <td><?php echo $internet['pemanfaatan'];?></td>
              </th>
            </tr>

            <tr>
              <th>Tanggungjawab Pembayaran
                <td><?php echo $internet['tanggungjwb_pembayaran'];?></td>
              </th>
            </tr>

            <tr>
              <th>Pemeliharaan/Perbaikan
                <td><?php echo $internet['pemeliharaan'];?></td>
              </th>
            </tr>

            <tr>
              <th width="200px">Aksi</th>
                <td>
                  <a href="<?php echo site_url('internet/edit/'.$internet['id']);?>" class="btn btn-success">
                  <i class="fas fa-edit"></i></a>

                  <a href="<?php echo site_url('internet/delete/'.$internet['id']);?>" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>

        </table>

				          <a href="<?php echo site_url('internet/index');?>" class="btn btn-danger">
				          <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>