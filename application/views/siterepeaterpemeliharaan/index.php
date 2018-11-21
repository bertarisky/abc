  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Pemeliharaan
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">

            <?php if(isLoggedIn()):?>
              <p><a href="<?php echo site_url('siterepeaterpemeliharaan/add');?>" class="btn btn-sm btn-info pull-left">
              <i class="fas fa-plus"></i> Tambah</a></p>
            <?php endif; ?>
            
            <table class="table table-sm table-hover datatables table-striped table-bordered">
            <style type="text/css">
              td, th{
                white-space: nowrap;
                min-width: 100px;
              }
            </style>
              <thead class="thead-light">
                <tr class="info">
                  <th>No</th>
                  <th>Waktu</th>
                  <th>Kegiatan</th>
                  <th>Hasil</th>
                  <th>Personil Pelaksana</th>
                  <th width="200px">Aksi</th>
                </tr>
              </thead>

              <!-- <thead>
                <tr>
                <form id="search" method="get">
                  <td></td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="waktu" class="form-control form-control-sm" placeholder="waktu" value="<?php echo @$model['waktu'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kegiatan" class="form-control form-control-sm" placeholder="kegiatan" value="<?php echo @$model['kegiatan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="hasil" class="form-control form-control-sm" placeholder="hasil" value="<?php echo @$model['hasil'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="personil_pelaksana" class="form-control form-control-sm" placeholder="personil pelaksana" value="<?php echo @$model['personil_pelaksana'];?>">
                      </div>
                    </div>
                  </td>

                  <td>
                     <button type="submit" name="search" value="true" class="btn btn-sm btn-success"><span class="fas fa-search">
                     </span> Cari</button>
                  </td>
                </form>
                </tr>
              </thead>
              </thead> -->
              
              <tbody>

                <?php $n=0;
                  foreach($model as $u){ 
                  $n++;
                  ?>
                  <tr class="active">
                    <td><?php echo $n;?></td>
                    <td><?php echo $u['waktu'];?></td>
                    <td><?php echo $u['kegiatan'];?></td>
                    <td><?php echo $u['hasil'];?></td>
                    <td><?php echo $u['personil_pelaksana'];?></td>

                    <td>
                      <a href="<?php echo site_url('siterepeaterpemeliharaan/view/'.$u['id']);?>" class="btn btn-sm btn-info">
                      <i class="far fa-eye"></i></a>

                      <?php if(isLoggedIn()):?>
                        <a href="<?php echo site_url('siterepeaterpemeliharaan/edit/'.$u['id']);?>" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i></a>

                        <a href="<?php echo site_url('siterepeaterpemeliharaan/delete/'.$u['id']);?>" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash-alt"></i></a>
                      <?php endif; ?>

                    </td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        