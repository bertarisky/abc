  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Table Profile Personil
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">
            <p><a href="<?php echo site_url('profile/add');?>" class="btn btn-info pull-left">
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
                  <th>Nama</th>
                  <th>Pangkat</th>
                  <th>NRP</th>
                  <th>Pendidikan Umum</th>
                  <th>Kejuruan/Khursus</th>
                  <th>Kompetensi</th>
                  <th>Keterangan</th>
                  <th width="300px">Aksi</th>
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
                        <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo @$model['nama'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="pangkat" class="form-control" placeholder="pangkat" value="<?php echo @$model['pangkat'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="nrp" class="form-control" placeholder="nrp" value="<?php echo @$model['nrp'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="pendidikan" class="form-control" placeholder="pendidikan" value="<?php echo @$model['pendidikan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kejuruan" class="form-control" placeholder="kejuruan" value="<?php echo @$model['kejuruan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kompetensi" class="form-control" placeholder="kompetensi" value="<?php echo @$model['kompetensi'];?>">
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
                    <td><?php echo $u['nama'];?></td>
                    <td><?php echo $u['pangkat'];?></td>
                    <td><?php echo $u['nrp'];?></td>
                    <td><?php echo $u['pendidikan'];?></td>
                    <td><?php echo $u['kejuruan'];?></td>
                    <td><?php echo $u['kompetensi'];?></td>
                    <td><?php echo substr($u['keterangan'], 0,10);?></td>
                    <td>
                      <a href="<?php echo site_url('profile/view/'.$u['id']);?>" class="btn btn-info">
                      <i class="far fa-eye"></i></a>

                      <a href="<?php echo site_url('profile/edit/'.$u['id']);?>" class="btn btn-success">
                      <i class="fas fa-edit"></i></a>

                      <a href="<?php echo site_url('profile/delete/'.$u['id']);?>" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        