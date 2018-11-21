  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Bangunan
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">

          <p>
            <?php if(isLoggedIn()):?>
              <a href="<?php echo site_url('datacenterbangunan/add');?>" class="btn btn-sm btn-info pull-left">
              <i class="fas fa-plus"></i> Tambah</a>
            <?php endif; ?>
            
              <a href="<?php echo site_url('datacenterbangunan/pdf');?>" class="btn btn-sm btn-success pull-left">
              <i class="fas fa-print"></i> Cetak</a>
          </p>

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
                  <th>Jenis</th>
                  <th>Ukuran</th>
                  <th>Kontrak</th>
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
                        <input type="text" name="jenis" class="form-control form-control-sm" placeholder="jenis" value="<?php echo @$model['jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="ukuran" class="form-control form-control-sm" placeholder="nomor ukuran" value="<?php echo @$model['ukuran'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kontrak" class="form-control form-control-sm" placeholder="kontrak" value="<?php echo @$model['kontrak'];?>">
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
                    <td><?php echo $u['jenis'];?></td>
                    <td><?php echo $u['ukuran'];?></td>
                    <td><?php echo $u['kontrak'];?></td>

                    <td>
                      <a href="<?php echo site_url('datacenterbangunan/view/'.$u['id']);?>" class="btn btn-sm btn-info">
                      <i class="far fa-eye"></i></a>

                      <?php if(isLoggedIn()):?>
                        <a href="<?php echo site_url('datacenterbangunan/edit/'.$u['id']);?>" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i></a>

                        <a href="<?php echo site_url('datacenterbangunan/delete/'.$u['id']);?>" class="btn btn-sm btn-danger">
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

        