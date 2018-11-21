  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Table Jaringan Data (ROUTER, CORE SWITCH, SWITCH, WLC, AP)
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">
            <p><a href="<?php echo site_url('jaringandata/add');?>" class="btn btn-info pull-left">
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
                  <th rowspan="2">No</th>
                  <th rowspan="2">Kesatuan</th>
                  <th rowspan="2">Nama Perangkat</th>
                  <th rowspan="2">Merk</th>
                  <th rowspan="2">Jenis/Type</th>
                  <th rowspan="2">Nomor Seri</th>
                  <th rowspan="2">Versi Firmware</th>
                  <th rowspan="2">Posisi</th>
                  <th rowspan="2">Nomor Rak</th>
                  <th colspan="3" align="center">Kondisi</th>
                  <th colspan="4" align="center">Pemeliharaan</th>
                  <th rowspan="2" width="200px">Aksi</th>
                </tr>

                  <tr>
                    <!-- tabel kondisi -->
                    <th>BB</th>
                    <th>RR</th>
                    <th>RB</th>

                    <!-- tabel Pemeliharaan -->
                    <th>Waktu</th>
                    <th>Kegiatan</th>
                    <th>Hasil</th>
                    <th>Pers Pelaksana</th>
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
                        <input type="text" name="nama_perangkat" class="form-control" placeholder="nama perangkat" value="<?php echo @$model['nama_perangkat'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="merk" class="form-control" placeholder="merk" value="<?php echo @$model['merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['seri'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="versi" class="form-control" placeholder="versi firmware" value="<?php echo @$model['versi'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="posisi" class="form-control" placeholder="posisi" value="<?php echo @$model['posisi'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rak" class="form-control" placeholder="nomor rak" value="<?php echo @$model['rak'];?>">
                      </div>
                    </div>
                  </td>

                  <!-- tabel kondisi radio -->
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

                  <!-- tabel pemeliharaan -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="waktu" class="form-control" placeholder="waktu" value="<?php echo @$model['waktu'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kegiatan" class="form-control" placeholder="kegiatan" value="<?php echo @$model['kegiatan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="hasil" class="form-control" placeholder="hasil" value="<?php echo @$model['hasil'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="personil_pelaksana" class="form-control" placeholder="pers pelakasana" value="<?php echo @$model['personil_pelaksana'];?>">
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

                    <!-- tabel Utama -->
                    <td><?php echo $u['kesatuan'];?></td>
                    <td><?php echo $u['nama_perangkat'];?></td>
                    <td><?php echo $u['merk'];?></td>
                    <td><?php echo $u['jenis'];?></td>
                    <td><?php echo $u['seri'];?></td>
                    <td><?php echo $u['versi'];?></td>
                    <td><?php echo $u['posisi'];?></td>
                    <td><?php echo $u['rak'];?></td>

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

                      <!-- tabel pemeliharaan -->
                    <td><?= @$pemeliharaan[$u['id']]['waktu']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['kegiatan']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['hasil']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['personil_pelaksana']?></td>

                    <!-- <td><?php echo substr($u['keterangan'], 0,10) ;?></td> -->
                    <td>
                      <a href="<?php echo site_url('jaringandata/view/'.$u['id']);?>" class="btn btn-info">
                      <i class="far fa-eye"></i></a>

                      <a href="<?php echo site_url('jaringandata/edit/'.$u['id']);?>" class="btn btn-success">
                      <i class="fas fa-edit"></i></a>

                      <a href="<?php echo site_url('jaringandata/delete/'.$u['id']);?>" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        