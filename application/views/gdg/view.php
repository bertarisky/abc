  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Repeater/Mobile/HT
    </div>

    <div class="card-body">
      <div class="col-md-12">
                     
        <table class="table table-hover table-bordered">

            <tr class="info">
              <th>Nama Barang
                <td><?php echo $gdg['nama_barang'];?></td>
              </th>
            </tr>

            <tr>
              <th>Merk
                <td><?php echo $gdg['merk'];?></td>
              </th>
            </tr>

            <tr>
              <th>Jenis/Type
                <td><?php echo $gdg['type_gdg'];?></td>
              </th>
            </tr>

            <tr>
              <th>Nomor Seri
                <td><?php echo $gdg['no_seri'];?></td>
              </th>
            </tr>

            <tr>
              <th>Versi Firmware
                <td><?php echo $gdg['versi_firmware'];?></td>
              </th>
            </tr>

            <tr>
              <th>Band
                <td><?php echo $gdg['band'];?></td>
              </th>
            </tr>

            <tr>
              <th>Daya
                <td><?php echo $gdg['daya'];?></td>
              </th>
            </tr>

            <tr>
              <th>Kontrak
                <td><?php echo $gdg['kontrak'];?></td>
              </th>
            </tr>

            <tr>
              <th>Keterangan
                <td><?php echo $gdg['keterangan'];?></td>
              </th>
            </tr>

            <tr>
              <th width="200px">Aksi</th>
                <td>
                  <a href="<?php echo site_url('gdg/edit/'.$gdg['id']);?>" class="btn btn-success">
                  <i class="fas fa-edit"></i></a>

                  <a href="<?php echo site_url('gdg/delete/'.$gdg['id']);?>" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
      
        </table>

                  <a href="<?php echo site_url('gdg/index');?>" class="btn btn-danger">
                  <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>