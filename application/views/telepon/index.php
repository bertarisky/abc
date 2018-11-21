  <!-- table -->
  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i> Data Table Telepon
      </div>
      
      <div class="card-body">
        <div class=""  style="overflow-x: scroll;">
          <p><a href="<?php echo site_url('telepon/add');?>" class="btn btn-info pull-left">
          <i class="fas fa-plus"></i> Tambah</a></p>
      
          <table class="table table-hover datatables table-striped table-bordered">
          <style type="text/css">
          td, th{
            white-space: nowrap;
            min-width: 100px;
          }
          </style>

            <thead>
              <tr class="info">
                <th>No</th>
                <th>Kesatuan</th>
                <th>Nomor Telepon</th>
                <th>Pengguna</th>
                <th>Posisi Node</th>
                <th>Perawatan/Perbaikan</th>
                <th width="200px">Aksi</th>
              </tr>

              <thead>
              <tr>
              <form id="search" method="get">
                <td></td>
                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="kesatuan" class="form-control" placeholder="Kesatuan" value="<?php echo @$model['kesatuan'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="no_telepon" class="form-control" placeholder="Nomor Telepon" value="<?php echo @$model['no_telepon'];?>">
                    </div>
                  </div>
                </td> 

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="pengguna" class="form-control" placeholder="Pengguna" value="<?php echo @$model['pengguna'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="posisi_node" class="form-control" placeholder="Posisi Node" value="<?php echo @$model['posisi_node'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="perawatan" class="form-control" placeholder="Perawatan/Perbaikan" value="<?php echo @$model['perawatan'];?>">
                    </div>
                  </div>
                </td>
                    
                <td>
                   <button type="submit" name="search" value="true" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Search</button>
                </td>
              
              </form>
              </tr>
              </thead>

            </thead>
                
            <tbody>
              <?php $n=0;
                foreach($model as $u){ 
                $n++;
                ?>
                <tr class="active">
                  <td><?php echo $n;?></td>
                  <td><?php echo $u['kesatuan'];?></td>
                  <td><?php echo $u['no_telepon'];?></td>
                  <td><?php echo $u['pengguna'];?></td>
                  <td><?php echo $u['posisi_node'];?></td>
                  <td><?php echo $u['perawatan'];?></td>
                  <td>
                  <a href="<?php echo site_url('telepon/view/'.$u['id']);?>" class="btn btn-info"><i class="fas fa-eye"></i></a>

                    <a href="<?php echo site_url('telepon/edit/'.$u['id']);?>" class="btn btn-success"><i class="fas fa-edit"></i></a>

                    <a href="<?php echo site_url('telepon/delete/'.$u['id']);?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>

            </tbody>

          </table>

        </div>
      </div>

  </div>   