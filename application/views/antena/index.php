  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Table Antena
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">
            <p><a href="<?php echo site_url('antena/add');?>" class="btn btn-info pull-left">
            <i class="fas fa-plus"></i> Tambah</a></p>
          
            <table class="table table-hover datatables table-striped table-bordered">
            <style type="text/css">
              td, th{
                white-space: nowrap;
                min-width: 100px;
              }
            </style>
              <thead class="thead-light">
                <tr class="info">
                  <th>No</th>
                  <th>Merk</th>
                  <th>Type</th>
                  <th>Nomor Seri</th>
                  <th>Gain</th>
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
                        <input type="text" name="merk" class="form-control" placeholder="merk" value="<?php echo @$model['merk'];?>">
                      </div>
                    </div>
                  </td>

                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                      <select class="selectpicker form-control" name="type_antena">
                          <option></option>
                          <option value="repeater">Repeater</option>
                          <option value="radio fixed">Radio Fixed</option>
                          <option value="radio mobile">Radio Mobile</option>
                          <option value="radio ht">Radio Ht</option>
                      </select>
                      </div>
                    </div>
                  </td>

                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="nomor_seri" class="form-control" placeholder="nomor_seri" value="<?php echo @$model['nomor_seri'];?>">
                      </div>
                    </div>
                  </td>

                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="gain" class="form-control" placeholder="gain" value="<?php echo @$model['gain'];?>">
                      </div>
                    </div>
                  </td>

                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kontrak" class="form-control" placeholder="kontrak" value="<?php echo @$model['kontrak'];?>">
                      </div>
                    </div>
                  </td>

                  <td>
                     <button type="submit" name="search" value="true" class="btn btn-success">
                     <span class="fas fa-search"></span> Search</button>
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
                  <td><?php echo $u['type_antena'];?></td>
                  <td><?php echo $u['nomor_seri'];?></td>
                  <td><?php echo $u['gain'];?></td>
                  <td><?php echo $u['kontrak'];?></td>
                  <td>
                    <a href="<?php echo site_url('antena/view/'.$u['id']);?>" class="btn btn-info">
                    <i class="far fa-eye"></i></a>

                    <a href="<?php echo site_url('antena/edit/'.$u['id']);?>" class="btn btn-success">
                    <i class="fas fa-edit"></i></a>

                    <a href="<?php echo site_url('antena/delete/'.$u['id']);?>" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>

            </table>

          </div>

        </div>

  </div>

        