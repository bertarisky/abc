  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> View Data Table Antena
        </div>

        <div class="card-body">
          <div class="col-md-12">       
            <table class="table table-hover table-bordered">
              <tr class="info">
                <th>Merk
                  <td><?php echo $antena['merk'];?></td>
                </th>
              </tr>
              <tr>
                <th>Type
                  <td><?php echo $antena['type_antena'];?></td>
                </th>
              </tr>
              <tr>
                <th>Nomor Seri
                  <td><?php echo $antena['nomor_seri'];?></td>
                </th>
              </tr>
              <tr>
                <th>Gain
                  <td><?php echo $antena['gain'];?></td>
                </th>
              </tr>
              <tr>
                <th>Kontrak
                  <td><?php echo $antena['kontrak'];?></td>
                </th>
              </tr>
              <tr> 
                <th width="200px">Aksi
                  <td>
                  <a href="<?php echo site_url('antena/edit/'.$antena['id']);?>" class="btn btn-success">
                  <i class="fas fa-edit"></i></a>

                  <a href="<?php echo site_url('antena/delete/'.$antena['id']);?>" class="btn btn-danger">
                  <i class="fas fa-trash-alt"></i></a>
                </td>
                </th>
              </tr>
            </table>

              <a href="<?php echo site_url('antena/index');?>" class="btn btn-danger">
              <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

          </div>

        </div>

  </div>