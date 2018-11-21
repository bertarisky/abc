  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data CCTV
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">

          <p>
            <?php if(isLoggedIn()):?>
              <a href="<?php echo site_url('datacentercctv/add');?>" class="btn btn-sm btn-info pull-left">
              <i class="fas fa-plus"></i> Tambah</a>
            <?php endif; ?>

              <a href="<?php echo site_url('datacentercctv/pdf');?>" class="btn btn-sm btn-success pull-left">
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
                  <th>Nomor</th>
                  <th>Merk</th>
                  <th>Jenis</th>
                  <th>Nomor Seri</th>
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
                        <input type="text" name="nomor" class="form-control form-control-sm" placeholder="nomor" value="<?php echo @$model['nomor'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="merk" class="form-control form-control-sm" placeholder="merk" value="<?php echo @$model['merk'];?>">
                      </div>
                    </div>
                  </td>
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
                        <input type="text" name="seri" class="form-control form-control-sm" placeholder="nomor seri" value="<?php echo @$model['seri'];?>">
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
                    <td><?php echo $u['nomor'];?></td>
                    <td><?php echo $u['merk'];?></td>
                    <td><?php echo $u['jenis'];?></td>
                    <td><?php echo $u['seri'];?></td>
                    <td><?php echo $u['kontrak'];?></td>

                    <td>
                      <a href="<?php echo site_url('datacentercctv/view/'.$u['id']);?>" class="btn btn-sm btn-info">
                      <i class="far fa-eye"></i></a>

                      <?php if(isLoggedIn()):?>
                        <a href="<?php echo site_url('datacentercctv/edit/'.$u['id']);?>" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i></a>

                        <a href="<?php echo site_url('datacentercctv/delete/'.$u['id']);?>" class="btn btn-sm btn-danger">
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

        