  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Site Repeater
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">

            <?php if(isLoggedIn()):?>
              <p><a href="<?php echo site_url('siterepeater/add');?>" class="btn btn-info pull-left btn-sm">
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
                  <th>Nama Site</th>
                  <th>Alamat</th>
                  <th>Koordinat</th>
                  <th>Elevasi</th>
                  <th>Jalan Akses</th>
                  <th>Grounding</th>
                  <th>Coverage</th>
                  <th>Selter</th>
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
                        <input type="text" name="nama_site" class="form-control form-control-sm" placeholder="nama site" value="<?php echo @$model['nama_site'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="alamat" class="form-control form-control-sm" placeholder="alamat" value="<?php echo @$model['alamat'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="koordinat" class="form-control form-control-sm" placeholder="koordinat" value="<?php echo @$model['koordinat'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="elevasi" class="form-control form-control-sm" placeholder="elevasi" value="<?php echo @$model['elevasi'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="jln_akses" class="form-control form-control-sm" placeholder="jalan akses" value="<?php echo @$model['jln_akses'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="grounding" class="form-control form-control-sm " placeholder="grounding" value="<?php echo @$model['grounding'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="coverage" class="form-control form-control-sm" placeholder="coverage" value="<?php echo @$model['coverage'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="selter" class="form-control form-control-sm" placeholder="selter" value="<?php echo @$model['selter'];?>">
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
                    <td><?php echo $u['nama_site'];?></td>
                    <td><?php echo $u['alamat'];?></td>
                    <td><?php echo $u['koordinat'];?></td>
                    <td><?php echo $u['elevasi'];?></td>
                    <td><?php echo $u['jln_akses'];?></td>
                    <td><?php echo $u['grounding'];?></td>
                    <td><?php echo $u['coverage'];?></td>
                    <td><?php echo $u['selter']['jenis'];?></td>

                    <td>
                      <a href="<?php echo site_url('siterepeater/view/'.$u['id']);?>" class="btn btn-info btn-sm">
                      <i class="far fa-eye"></i></a>

                      <?php if(isLoggedIn()):?>
                      <a href="<?php echo site_url('siterepeater/edit/'.$u['id']);?>" class="btn btn-success btn-sm">
                      <i class="fas fa-edit"></i></a>

                      <a href="<?php echo site_url('siterepeater/delete/'.$u['id']);?>" class="btn btn-danger btn-sm">
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

        