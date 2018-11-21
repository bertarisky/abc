  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Table Radio Fixed
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">
            <p><a href="<?php echo site_url('radiofixed/add');?>" class="btn btn-info pull-left">
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
                  <th rowspan="3">No</th>
                  <th rowspan="3">Kesatuan</th>
                  <th colspan="9" align="center">Radio</th>
                  <th colspan="6" align="center">Power Supply</th>
                  <th colspan="7" align="center">Antena</th>
                  <th rowspan="3">Tempat Instal</th>
                  <th rowspan="2" colspan="4" align="center">Pemeliharaan</th>
                  <th rowspan="3" width="200px">Aksi</th>
                </tr>

                
                  <tr>
                    <!-- tabel Radio -->
                    <th rowspan="2">Merk</th>
                    <th rowspan="2">Jenis/Type</th>
                    <th rowspan="2">Nomor Seri</th>
                    <th rowspan="2">Radio ID</th>
                    <th rowspan="2">Daya Pancar</th>
                    <th rowspan="2">Sensitivitas</th>
                    <th colspan="3">Kondisi</th>

                    <!-- tabel Power Supply -->
                    <th rowspan="2">Merk</th>
                    <th rowspan="2">Jenis/Type</th>
                    <th rowspan="2">Nomor Seri</th>
                    <th colspan="3">Kondisi</th>

                    <!-- tabel Antena -->
                    <th rowspan="2">Merk</th>
                    <th rowspan="2">Jenis/Type</th>
                    <th rowspan="2">Nomor Seri</th>
                    <th rowspan="2">Gain</th>
                    <th colspan="3">Kondisi</th>
                  </tr>

                    <tr>
                      <!-- tabel kondisi Radio -->
                      <th>BB</th>
                      <th>RR</th>
                      <th>RB</th>

                      <!-- tabel kondisi Radio -->
                      <th>BB</th>
                      <th>RR</th>
                      <th>RB</th>

                      <!-- tabel kondisi Radio -->
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

                  <!-- tabel Radio -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="radio_merk" class="form-control" placeholder="merk" value="<?php echo @$model['radio_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="radio_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['radio_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="radio_seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['radio_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="radio_id" class="form-control" placeholder="radio id" value="<?php echo @$model['radio_id'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="radio_dayapancar" class="form-control" placeholder="daya pancar" value="<?php echo @$model['radio_dayapancar'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="radio_sensitivitas" class="form-control" placeholder="sensitivitas" value="<?php echo @$model['radio_sensitivitas'];?>">
                      </div>
                    </div>
                  </td>
                  <!-- tabel kondisi radio -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="radio_kondisi_bb" class="form-control" placeholder="BB" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="radio_kondisi_rr" class="form-control" placeholder="RR" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="radio_kondisi_rb" class="form-control" placeholder="RB" value=1>
                      </div>
                    </div>
                  </td>

                  <!-- tabel Power Supply -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="supply_merk" class="form-control" placeholder="merk" value="<?php echo @$model['supply_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="supply_jenis" class="form-control" placeholder="jenis" value="<?php echo @$model['supply_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="supply_seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['supply_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <!-- tabel kondisi power supply -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="supply_kondisi_bb" class="form-control" placeholder="BB" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="supply_kondisi_rr" class="form-control" placeholder="RR" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="supply_kondisi_rb" class="form-control" placeholder="RB" value=1>
                      </div>
                    </div>
                  </td>

                  <!-- tabel Antena -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="antena_merk" class="form-control" placeholder="merk" value="<?php echo @$model['antena_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="antena_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['antena_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="antena_seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['antena_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="antena_gain" class="form-control" placeholder="gain" value="<?php echo @$model['antena_gain'];?>">
                      </div>
                    </div>
                  </td>
                  <!-- tabel kondisi antena -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="antena_kondisi_bb" class="form-control" placeholder="BB" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="antena_kondisi_rr" class="form-control" placeholder="RR" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="antena_kondisi_rb" class="form-control" placeholder="RB" value=1>
                      </div>
                    </div>
                  </td>

                  <!-- tabel tempat instal -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="tempat_instal" class="form-control" placeholder="tempat instal" value="<?php echo @$model['tempat_instal'];?>">
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

                    <td><?php echo $u['kesatuan'];?></td>

                    <!-- tabel Radio -->
                    <td><?php echo $u['radio_merk'];?></td>
                    <td><?php echo $u['radio_jenis'];?></td>
                    <td><?php echo $u['radio_seri'];?></td>
                    <td><?php echo $u['radio_id'];?></td>
                    <td><?php echo $u['radio_dayapancar'];?></td>
                    <td><?php echo $u['radio_sensitivitas'];?></td>
                    <!-- tabel kondisi radio -->
                    <td><?php if ($u['radio_kondisi_bb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['radio_kondisi_rr']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['radio_kondisi_rb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>

                    <!-- tabel power supply -->
                    <td><?php echo $u['supply_merk'];?></td>
                    <td><?php echo $u['supply_jenis'];?></td>
                    <td><?php echo $u['supply_seri'];?></td>
                    <!-- tabel kondisi supply -->
                    <td><?php if ($u['supply_kondisi_bb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['supply_kondisi_rr']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['supply_kondisi_rb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>

                    <!-- tabel antena -->
                    <td><?php echo $u['antena_merk'];?></td>
                    <td><?php echo $u['antena_jenis'];?></td>
                    <td><?php echo $u['antena_seri'];?></td>
                    <td><?php echo $u['antena_gain'];?></td>
                    <!-- tabel kondisi supply -->
                    <td><?php if ($u['antena_kondisi_bb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['antena_kondisi_rr']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['antena_kondisi_rb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>

                    <!-- tabel tempat instal -->
                    <td><?php echo $u['tempat_instal'];?></td>

                    <!-- tabel pemeliharaan -->
                    <td><?= @$pemeliharaan[$u['id']]['waktu']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['kegiatan']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['hasil']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['personil_pelaksana']?></td>


                    <!-- <td><?php echo substr($u['keterangan'], 0,10) ;?></td> -->
                    <td>
                      <a href="<?php echo site_url('radiofixed/view/'.$u['id']);?>" class="btn btn-info">
                      <i class="far fa-eye"></i></a>

                      <a href="<?php echo site_url('radiofixed/edit/'.$u['id']);?>" class="btn btn-success">
                      <i class="fas fa-edit"></i></a>

                      <a href="<?php echo site_url('radiofixed/delete/'.$u['id']);?>" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        