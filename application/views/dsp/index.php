  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Table DSP Personil
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">
            <p><a href="<?php echo site_url('dsp/add');?>" class="btn btn-info pull-left">
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
                  <th>Kesatuan</th>
                  <th>DSP</th>
                  <th>Riil</th>
                  <th>Keterangan</th>
                  <th width="200px">Aksi</th>
                </tr>

                <thead>
                <tr>
                <form id="search" method="get">
                  <td></td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kesatuan" class="form-control" placeholder="kesatuan" value="<?php echo @$model['kesatuan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="dsp" class="form-control" placeholder="dsp" value="<?php echo @$model['dsp'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="riil" class="form-control" placeholder="riil" value="<?php echo @$model['riil'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="keterangan" class="form-control" placeholder="keterangan" value="<?php echo @$model['keterangan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                     <button type="submit" name="search" value="true" class="btn btn-success"><span class="fas fa-search">
                     </span> Search</button>
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
                    <td><?php echo $u['dsp'];?></td>
                    <td><?php echo $u['riil'];?></td>
                    <td><?php echo substr($u['keterangan'], 0,10) ;?></td>
                    <td>
                      <a href="<?php echo site_url('dsp/view/'.$u['id']);?>" class="btn btn-info">
                      <i class="far fa-eye"></i></a>

                      <a href="<?php echo site_url('dsp/edit/'.$u['id']);?>" class="btn btn-success">
                      <i class="fas fa-edit"></i></a>

                      <a href="<?php echo site_url('dsp/delete/'.$u['id']);?>" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        