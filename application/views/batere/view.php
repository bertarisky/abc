  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Batere HT
    </div>

    <div class="card-body">
      <div class="col-md-12">
                     
        <table class="table table-hover table-bordered">
              
            <tr class="info">
              <th>Merk
                <td><?php echo $batere['merk'];?></td>
              </th>
            </tr>

            <tr>
              <th>Jenis/Type
                <td><?php echo $batere['type'];?></td>
              </th>
            </tr>

            <tr>
              <th>Nomor Seri
                <td><?php echo $batere['no_seri'];?></td>
              </th>
            </tr>

            <tr>
              <th>Arus
                <td><?php echo $batere['arus'];?></td>
              </th>
            </tr>

            <tr>
              <th>Tahun Pembuatan
                <td><?php echo $batere['thn_pembuatan'];?></td>
              </th>
            </tr>

            <tr>
              <th>Kontrak
                <td><?php echo $batere['kontrak'];?></td>
              </th>
            </tr>

            <tr>
              <th width="200px">Aksi</th>
                <td>
                  <a href="<?php echo site_url('batere/edit/'.$batere['id']);?>" class="btn btn-success">
                  <i class="fas fa-edit"></i></a>

                  <a href="<?php echo site_url('batere/delete/'.$batere['id']);?>" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>

        </table>

				          <a href="<?php echo site_url('batere/index');?>" class="btn btn-danger">
				          <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>
  </div>