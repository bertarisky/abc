  <!-- table -->
  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i> Data Table Batere HT
      </div>  

      <div class="card-body">
        <div class=""  style="overflow-x: scroll;">
          <p><a href="<?php echo site_url('batere/add');?>" class="btn btn-info pull-left">
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
                <th>Nomor Seri</th>
                <th>Arus</th>
                <th>Tahun Pembuatan</th>
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
                      <input type="text" name="type" class="form-control" placeholder="Jenis/Type" value="<?php echo @$model['type'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="no_seri" class="form-control" placeholder="Nomor Seri" value="<?php echo @$model['no_seri'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="arus" class="form-control" placeholder="Arus" value="<?php echo @$model['arus'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="thn_pembuatan" class="form-control" placeholder="Tahun Pembuatan" value="<?php echo @$model['thn_pembuatan'];?>">
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
                  <td><?php echo $u['type'];?></td>
                  <td><?php echo $u['no_seri'];?></td>
                  <td><?php echo $u['arus'];?></td>
                  <td><?php echo $u['thn_pembuatan'];?></td>
                  <td><?php echo $u['kontrak'];?></td>
                  <td>
                    <a href="<?php echo site_url('batere/view/'.$u['id']);?>" class="btn btn-info"><i class="fas fa-eye"></i></a>

                    <a href="<?php echo site_url('batere/edit/'.$u['id']);?>" class="btn btn-success"><i class="fas fa-edit"></i></a>

                    <a href="<?php echo site_url('batere/delete/'.$u['id']);?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>

            </tbody>

          </table>

        </div>
      </div>

  </div>