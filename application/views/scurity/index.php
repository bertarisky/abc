  <!-- table -->
  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i> Data Table Sistem Informasi - Security
      </div>

      <div class="card-body">
        <div class=""  style="overflow-x: scroll;">
          <p><a href="<?php echo site_url('scurity/add');?>" class="btn btn-info pull-left">
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
                <th rowspan="2">No</th>
                <th rowspan="2" align="center">Kesatuan</th>
                <th rowspan="2" align="center">Merk</th>
                <th rowspan="2" align="center">Jenis/Type</th>
                <th rowspan="2" align="center">Nomor Seri</th>
                <th rowspan="2" align="center">Fungsi</th>
                <th colspan="3" align="center">Kondisi</th>
                <th colspan="3" align="center">Akses</th>
                <th rowspan="2" align="center">Kontrak</th>
                <th rowspan="2" width="200px">Aksi</th>
              </tr>

              <tr>
                <!-- tabel kondisi -->
                <th>BB</th>
                <th>RR</th>
                <th>RB</th>

                <!-- tabel akses -->
                <th>Waktu</th>
                <th>Kegiatan</th>
                <th>Pers Pelaksana</th>

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
                      <input type="text" name="merk" class="form-control" placeholder="Merk" value="<?php echo @$model['merk'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="type_scurity" class="form-control" placeholder="Jenis/Type" value="<?php echo @$model['type_scurity'];?>">
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
                      <input type="text" name="fungsi" class="form-control" placeholder="Fungsi" value="<?php echo @$model['fungsi'];?>">
                    </div>
                  </div>
                </td>


                <!-- tabel kondisi -->
                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                    <input type="checkbox" name="kondisi_bb" class="form-control" placeholder="BB" value=1>
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                    <input type="checkbox" name="kondisi_rr" class="form-control" placeholder="RR" value=1>
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                    <input type="checkbox" name="kondisi_rb" class="form-control" placeholder="RB" value=1>
                    </div>
                  </div>
                </td>

                <!-- tabel akses -->
                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="akses_waktu" class="form-control" placeholder="Waktu" value="<?php echo @$model['akses_waktu'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="akses_kegiatan" class="form-control" placeholder="Kegiatan" value="<?php echo @$model['akses_kegiatan'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="akses_pelaksana" class="form-control" placeholder="Pers Pelaksana" value="<?php echo @$model['akses_pelaksana'];?>">
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
                   <button type="submit" name="search" value="true" class="btn btn-success"><span class="fas fa-search"></span> Search</button>
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
                  <td><?php echo $u['merk'];?></td>
                  <td><?php echo $u['type_scurity'];?></td>
                  <td><?php echo $u['no_seri'];?></td>
                  <td><?php echo $u['fungsi'];?></td>

                  
                  <!-- tabel kondisi -->
                  <td><?php if ($u['kondisi_bb']) {
                  echo "<i class='fas fa-check icon_success'></i>";
                  }?></td>

                  <td><?php if ($u['kondisi_rr']) {
                  echo "<i class='fas fa-check icon_success'></i>";
                  }?></td>

                  <td><?php if ($u['kondisi_rb']) {
                  echo "<i class='fas fa-check icon_success'></i>";
                  }?></td>
                  

                  <!-- tabel akses -->
                  <td><?php echo $u['akses_waktu'];?></td>
                  <td><?php echo $u['akses_kegiatan'];?></td>
                  <td><?php echo $u['akses_pelaksana'];?></td>

                  <td><?php echo $u['kontrak'];?></td>

                  <td>
                    <a href="<?php echo site_url('scurity/view/'.$u['id']);?>" class="btn btn-info"><i class="fas fa-eye"></i></a>

                    <a href="<?php echo site_url('scurity/edit/'.$u['id']);?>" class="btn btn-success"><i class="fas fa-edit"></i></a>

                    <a href="<?php echo site_url('scurity/delete/'.$u['id']);?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>

            </tbody>

          </table>

        </div>
      </div>

  </div>