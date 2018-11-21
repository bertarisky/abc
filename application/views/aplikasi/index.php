      <!-- table -->
  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i> Data Table Sistem Informasi - Aplikasi
      </div>
  
      <div class="card-body">
        <div class=""  style="overflow-x: scroll;">
          <p><a href="<?php echo site_url('aplikasi/add');?>" class="btn btn-info pull-left">
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
                <th rowspan="2" align="center">Nama</th>
                <th rowspan="2" align="center">Fiture Layanan</th>
                <th colspan="4" align="center">Perawatan</th>
                <th rowspan="2" align="center">Kontrak</th>
                <th rowspan="2" width="200px">Aksi</th>
              </tr>

              <tr>
                <!-- tabel perawatan -->
                <th>Waktu</th>
                <th>Kegiatan</th>
                <th>Hasil</th>
                <th>Personel Pelaksana</th>

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
                      <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo @$model['nama'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="fiture_layanan" class="form-control" placeholder="Fiture Layanan" value="<?php echo @$model['fiture_layanan'];?>">
                    </div>
                  </div>
                </td>


                <!-- tabel perawatan -->
                <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="waktu" class="form-control" placeholder="Waktu" value="<?php echo @$model['waktu'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan" value="<?php echo @$model['kegiatan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="hasil" class="form-control" placeholder="Hasil" value="<?php echo @$model['hasil'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="personil_pelaksana" class="form-control" placeholder="Pers Pelakasana" value="<?php echo @$model['personil_pelaksana'];?>">
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
                  <td><?php echo $u['nama'];?></td>
                  <td><?php echo $u['fiture_layanan'];?></td>
                      
                  <!-- tabel perawatan -->
                  <td><?= @$pemeliharaan[$u['id']]['waktu']?></td>
                  <td><?= @$pemeliharaan[$u['id']]['kegiatan']?></td>
                  <td><?= @$pemeliharaan[$u['id']]['hasil']?></td>
                  <td><?= @$pemeliharaan[$u['id']]['personil_pelaksana']?></td>

                  <td><?php echo $u['kontrak'];?></td>

                  <td>
                    <a href="<?php echo site_url('aplikasi/view/'.$u['id']);?>" class="btn btn-info"><i class="fas fa-eye"></i></a>

                    <a href="<?php echo site_url('aplikasi/edit/'.$u['id']);?>" class="btn btn-success"><i class="fas fa-edit"></i></a>

                    <a href="<?php echo site_url('aplikasi/delete/'.$u['id']);?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>

            </tbody>

          </table>

        </div>
      </div>

  </div>