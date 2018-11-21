  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Center
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">

          <p>
            <?php if(isLoggedIn()):?>
              <a href="<?php echo site_url('datacenter/add');?>" class="btn btn-info pull-left btn-sm">
              <i class="fas fa-plus"></i> Tambah</a>
            <?php endif; ?>

              <a href="<?php echo site_url('datacenter/pdf');?>" class="btn btn-success pull-left btn-sm">
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
                  <th>Grounding</th>
                  <th>Bangunan</th>
                  <th>AC</th>
                  <th>Kamera CCTV</th>
                  <th>DVR</th>
                  <th>Genset</th>
                  <th>UPS</th>
                  <th>Batere</th>
                  <th>Rak</th>
                  <th>Pemeliharaan</th>
                  <th>Kontak Person</th>
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
                        <input type="text" name="grounding" class="form-control form-control-sm" placeholder="grounding" value="<?php echo @$model['grounding'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="bangunan" class="form-control form-control-sm" placeholder="bangunan" value="<?php echo @$model['bangunan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="ac" class="form-control form-control-sm" placeholder="ac" value="<?php echo @$model['ac'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="cctv" class="form-control form-control-sm" placeholder="cctv" value="<?php echo @$model['cctv'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="dvr" class="form-control form-control-sm" placeholder="dvr" value="<?php echo @$model['dvr'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="genset" class="form-control form-control-sm " placeholder="genset" value="<?php echo @$model['genset'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="ups" class="form-control form-control-sm" placeholder="ups" value="<?php echo @$model['ups'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="batere" class="form-control form-control-sm" placeholder="batere" value="<?php echo @$model['batere'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rak" class="form-control form-control-sm" placeholder="rak" value="<?php echo @$model['rak'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="pemeliharaan" class="form-control form-control-sm" placeholder="pemeliharaan" value="<?php echo @$model['pemeliharaan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kontak" class="form-control form-control-sm" placeholder="kontak" value="<?php echo @$model['kontak'];?>">
                      </div>
                    </div>
                  </td>

                  <td>
                     <button type="submit" name="search" value="true" class="btn btn-success btn-sm"><span class="fas fa-search">
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
                    <td><?php echo $u['grounding'];?></td>
                    <td><?php echo $u['bangunan']['jenis'];?></td>
                    <td><?php echo $u['ac']['nomor'];?></td>
                    <td><?php echo $u['cctv']['nomor'];?></td>
                    <td><?php echo $u['dvr']['nomor'];?></td>
                    <td><?php echo $u['genset']['kontrak'];?></td>
                    <td><?php echo $u['ups']['kontrak'];?></td>
                    <td><?php echo $u['batere']['kontrak'];?></td>
                    <td><?php echo $u['rak']['nomor'];?></td>
                    <td><?php echo $u['pemeliharaan']['waktu'];?></td>
                    <td><?php echo $u['kontak']['nama'];?></td>                    

                    <td>
                      <a href="<?php echo site_url('datacenter/view/'.$u['id']);?>" class="btn btn-info btn-sm">
                      <i class="far fa-eye"></i></a>

                      <?php if(isLoggedIn()):?>
                      <a href="<?php echo site_url('datacenter/edit/'.$u['id']);?>" class="btn btn-success btn-sm">
                      <i class="fas fa-edit"></i></a>

                      <a href="<?php echo site_url('datacenter/delete/'.$u['id']);?>" class="btn btn-danger btn-sm">
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

        