  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table VPN-IP
    </div>

    <div class="card-body">
      <div class="col-md-12">
                 
        <table class="table table-hover table-bordered">
         
            <tr class="info">
              <th>Kesatuan
                <td><?php echo $vpn['kesatuan'];?></td>
              </th>
            </tr>

            <tr>
              <th>id Pelanggan
                <td><?php echo $vpn['id_pelanggan'];?></td>
              </th>
            </tr>

            <tr>
              <th>Jenis
                <td><?php echo $vpn['jenis'];?></td>
              </th>
            </tr>

            <tr>
              <th>Bandwidth
                <td><?php echo $vpn['bandwidth'];?></td>
              </th>
            </tr>

            <tr>
              <th>Posisi Node
                <td><?php echo $vpn['posisi_node'];?></td>
              </th>
            </tr>

            <tr>
              <th>Perangkat Last Mile Penyedia
                <td><?php echo $vpn['perangkat_last'];?></td>
              </th>
            </tr>

            <tr>
              <th>Biaya Bulanan
                <td><?php echo $vpn['biaya_bulanan'];?></td>
              </th>
            </tr>

            <tr>
              <th>Pemanfaatan
                <td><?php echo $vpn['pemanfaatan'];?></td>
              </th>
            </tr>

            <tr>
              <th>Tanggungjawab Pembayaran
                <td><?php echo $vpn['tanggungjwb_pembayaran'];?></td>
              </th>
            </tr>

            <tr>
              <th>Pemeliharaan/Perbaikan
                <td><?php echo $vpn['pemeliharaan'];?></td>
              </th>
            </tr>

            <tr>
              <th width="200px">Aksi</th>
                <td>
                  <a href="<?php echo site_url('vpn/edit/'.$vpn['id']);?>" class="btn btn-success">
                  <i class="fas fa-edit"></i></a>

                  <a href="<?php echo site_url('vpn/delete/'.$vpn['id']);?>" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i></a>
                </td> 
            </tr>
          
        </table>

		              <a href="<?php echo site_url('vpn/index');?>" class="btn btn-danger">
		              <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>