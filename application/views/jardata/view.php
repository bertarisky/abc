  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Jaringan Data
    </div>

    <div class="card-body">
      <div class="col-md-12">
                 
        <table class="table table-hover table-bordered">

            <tr class="info">
              <th>Nama Barang
                <td><?php echo $jardata['nama_barang'];?></td>
              </th>
            </tr>

            <tr>
              <th>Merk
                <td><?php echo $jardata['merk'];?></td>
              </th>
            </tr>

            <tr>
              <th>Jenis/Type
                <td><?php echo $jardata['type_jardata'];?></td>
              </th>
            </tr>

            <tr>
              <th>Nomor Seri
                <td><?php echo $jardata['no_seri'];?></td>
              </th>
            </tr>

            <tr>
              <th>Versi Firmware
                <td><?php echo $jardata['versi_firmware'];?></td>
              </th>
            </tr>

            <tr>
              <th>Keterangan
                <td><?php echo $jardata['keterangan'];?></td>
              </th>
            </tr>

            <tr>
              <th width="200px">Aksi</th>
                <td>
                  <a href="<?php echo site_url('jardata/edit/'.$jardata['id']);?>" class="btn btn-success">
                  <i class="fas fa-edit"></i></a>

                  <a href="<?php echo site_url('jardata/delete/'.$jardata['id']);?>" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>

        </table>

		              <a href="<?php echo site_url('jardata/index');?>" class="btn btn-danger">
		              <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>