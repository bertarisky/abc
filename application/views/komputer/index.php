      <!-- table -->
  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i> Data Table Komputer-Laptop
      </div>
      
      <div class="card-body">
        <div class=""  style="overflow-x: scroll;">
          <p><a href="<?php echo site_url('komputer/add');?>" class="btn btn-info pull-left">
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
                <th>Jenis</th>
                <th>Nomor Seri</th>
                <th>CPU</th>
                <th>Memory</th>
                <th>Harddisk</th>
                <th>Kegunaan</th>
                <th>Posisi</th>
                <th>Kontrak</th>
                <th>Penanggung Jawab</th>
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
                      <input type="text" name="jenis" class="form-control" placeholder="Jenis" value="<?php echo @$model['jenis'];?>">
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
                      <input type="text" name="cpu" class="form-control" placeholder="CPU" value="<?php echo @$model['cpu'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="memory" class="form-control" placeholder="Memory" value="<?php echo @$model['memory'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="harddisk" class="form-control" placeholder="Harddisk" value="<?php echo @$model['harddisk'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="kegunaan" class="form-control" placeholder="Kegunaan" value="<?php echo @$model['kegunaan'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="posisi" class="form-control" placeholder="Posisi" value="<?php echo @$model['posisi'];?>">
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
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="penanggungjawab" class="form-control" placeholder="Penanggung Jawab" value="<?php echo @$model['penanggungjawab'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo @$model['keterangan'];?>">
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
                  <td><?php echo $u['jenis'];?></td>
                  <td><?php echo $u['no_seri'];?></td>
                  <td><?php echo $u['cpu'];?></td>
                  <td><?php echo $u['memory'];?></td>
                  <td><?php echo $u['harddisk'];?></td>
                  <td><?php echo $u['kegunaan'];?></td>
                  <td><?php echo $u['posisi'];?></td>
                  <td><?php echo $u['kontrak'];?></td>
                  <td><?php echo $u['penanggungjawab'];?></td>
                  <td><?php echo substr($u['keterangan'], 0,6);?></td>
                  <td>
                    <a href="<?php echo site_url('komputer/view/'.$u['id']);?>" class="btn btn-info"><i class="fas fa-eye"></i></a>

                    <a href="<?php echo site_url('komputer/edit/'.$u['id']);?>" class="btn btn-success"><i class="fas fa-edit"></i></a>

                    <a href="<?php echo site_url('komputer/delete/'.$u['id']);?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>

            </tbody>

          </table>

        </div>
      </div>

  </div>      