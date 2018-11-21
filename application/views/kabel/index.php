  <!-- table -->
  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i> Data Table Kabel Feeder
      </div>
      
      <div class="card-body">
        <div class=""  style="overflow-x: scroll;">
          <p><a href="<?php echo site_url('kabel/add');?>" class="btn btn-info pull-left">
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
                <th>Merk</th>
                <th>Jenis/Type</th>
                <th>Panjang</th>
                <th>Roll</th>
                <th>Kontrak</th>
                <th width="200px">Aksi</th>
              </tr>

              <thead>
              <tr>
              <form id="search" method="get">
                <td></td>
                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="merk" class="form-control" placeholder="Merk" value="<?php echo @$model['merk'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="type_kabel" class="form-control" placeholder="Jenis/Type" value="<?php echo @$model['type_kabel'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="panjang" class="form-control" placeholder="Panjang" value="<?php echo @$model['panjang'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="roll" class="form-control" placeholder="Roll" value="<?php echo @$model['roll'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="kontrak" class="form-control" placeholder="Kontrak" value="<?php echo @$model['kontrak'];?>">
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
                  <td><?php echo $u['merk'];?></td>
                  <td><?php echo $u['type_kabel'];?></td>
                  <td><?php echo $u['panjang'];?></td>
                  <td><?php echo $u['roll'];?></td>
                  <td><?php echo $u['kontrak'];?></td>
                  <td>
                    <a href="<?php echo site_url('kabel/view/'.$u['id']);?>" class="btn btn-info"><i class="fas fa-eye"></i></a>

                    <a href="<?php echo site_url('kabel/edit/'.$u['id']);?>" class="btn btn-success"><i class="fas fa-edit"></i></a>

                    <a href="<?php echo site_url('kabel/delete/'.$u['id']);?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>

            </tbody>

          </table>

        </div>
      </div>

  </div>        