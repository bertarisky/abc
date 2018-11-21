  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Table RPT Convensional
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">
            <p><a href="<?php echo site_url('rptconvensional/add');?>" class="btn btn-info pull-left">
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
                  <th rowspan="3">Site</th>
                  <th colspan="19" align="center">RPT/BS</th>
                  <th rowspan="2" colspan="5" align="center">Antena</th>
                  <th rowspan="2" colspan="4" align="center">Kabel Feeder</th>
                  <th rowspan="2" colspan="4" align="center">Pemeliharaan</th>
                  <th rowspan="3" width="200px">Aksi</th>
                </tr>

                <!-- tabel RPT/BS -->
                <tr>
                  <th rowspan="2">Nomor/Nama</th>
                  <th rowspan="2">No. KontraK</th>
                  <th rowspan="2">Nama RPT/BS</th>
                  <th rowspan="2">Merk</th>
                  <th rowspan="2">Jenis/Type</th>
                  <th rowspan="2">Teknologi</th>
                  <th rowspan="2">Nomor Seri</th>
                  <th rowspan="2">Versi Firmware</th>
                  <th rowspan="2">Frek RX</th>
                  <th rowspan="2">Frek TX</th>
                  <th rowspan="2">Tone RX</th>
                  <th rowspan="2">Tone TX</th>
                  <th rowspan="2">Sensitivitas</th>
                  <th rowspan="2">Daya Pancar</th>
                  <th rowspan="2">Power Listrik</th>
                  <th rowspan="2">Nomor Rak</th>
                  <th colspan="3">Kondisi</th>
                </tr>

                  <tr>
                    <!-- tabel kondisi rpt/bs -->
                    <th>BB</th>
                    <th>RR</th>
                    <th>RB</th>

                    <!-- tabel antena -->
                    <th>Merk</th>
                    <th>Jenis</th>
                    <th>Gain</th>
                    <th>Posisi</th>
                    <th>No. Kontrak</th>

                    <!-- tabel kabel feeder -->
                    <th>Merk</th>
                    <th>Jenis/Type</th>
                    <th>Panjang</th>
                    <th>No. Kontrak</th>

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
                        <input type="text" name="site" class="form-control" placeholder="site" value="<?php echo @$model['site'];?>">
                      </div>
                    </div>
                  </td>

                  <!-- tabel RPT -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_nomor" class="form-control" placeholder="nomor" value="<?php echo @$model['rpt_nomor'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_kontrak" class="form-control" placeholder="kontrak" value="<?php echo @$model['rpt_kontrak'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_nama" class="form-control" placeholder="nama" value="<?php echo @$model['rpt_nama'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_merk" class="form-control" placeholder="merk" value="<?php echo @$model['rpt_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['rpt_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_teknologi" class="form-control" placeholder="teknologi" value="<?php echo @$model['rpt_teknologi'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['rpt_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_versi" class="form-control" placeholder="versi firmware" value="<?php echo @$model['rpt_versi'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_frek_rx" class="form-control" placeholder="frek rx" value="<?php echo @$model['rpt_frek_rx'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_frek_tx" class="form-control" placeholder="frek tx" value="<?php echo @$model['rpt_frek_tx'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_tone_rx" class="form-control" placeholder="tone rx" value="<?php echo @$model['rpt_tone_rx'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_tone_tx" class="form-control" placeholder="tone tx" value="<?php echo @$model['rpt_tone_tx'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_sensitivitas" class="form-control" placeholder="sensitivitas" value="<?php echo @$model['rpt_sensitivitas'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_dayapancar" class="form-control" placeholder="daya pancar" value="<?php echo @$model['rpt_dayapancar'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_power" class="form-control" placeholder="power listrik" value="<?php echo @$model['rpt_power'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="rpt_rak" class="form-control" placeholder="nomor rak" value="<?php echo @$model['rpt_rak'];?>">
                      </div>
                    </div>
                  </td>
                  <!-- tabel kondisi rpt/bs -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="rpt_kondisi_bb" class="form-control" placeholder="BB" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="rpt_kondisi_rr" class="form-control" placeholder="RR" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="rpt_kondisi_rb" class="form-control" placeholder="RB" value=1>
                      </div>
                    </div>
                  </td>

                  <!-- tabel antena -->
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
                        <input type="text" name="antena_jenis" class="form-control" placeholder="jenis" value="<?php echo @$model['antena_jenis'];?>">
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
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="antena_posisi" class="form-control" placeholder="posisi" value="<?php echo @$model['antena_posisi'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="antena_kontrak" class="form-control" placeholder="no kontrak" value="<?php echo @$model['antena_kontrak'];?>">
                      </div>
                    </div>
                  </td>

                  <!-- tabel kabel feeder -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kabel_merk" class="form-control" placeholder="merk" value="<?php echo @$model['kabel_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kabel_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['kabel_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kabel_panjang" class="form-control" placeholder="panjang" value="<?php echo @$model['kabel_panjang'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="kabel_kontrak" class="form-control" placeholder="no kontrak" value="<?php echo @$model['kabel_kontrak'];?>">
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
                    <td><?php echo $u['site'];?></td>

                    <!-- tabel RPT/BS -->
                    <td><?php echo $u['rpt_nomor'];?></td>
                    <td><?php echo $u['rpt_kontrak'];?></td>
                    <td><?php echo $u['rpt_nama'];?></td>
                    <td><?php echo $u['rpt_merk'];?></td>
                    <td><?php echo $u['rpt_jenis'];?></td>
                    <td><?php echo $u['rpt_teknologi'];?></td>
                    <td><?php echo $u['rpt_seri'];?></td>
                    <td><?php echo $u['rpt_versi'];?></td>
                    <td><?php echo $u['rpt_frek_rx'];?></td>
                    <td><?php echo $u['rpt_frek_tx'];?></td>
                    <td><?php echo $u['rpt_tone_rx'];?></td>
                    <td><?php echo $u['rpt_tone_tx'];?></td>
                    <td><?php echo $u['rpt_sensitivitas'];?></td>
                    <td><?php echo $u['rpt_dayapancar'];?></td>
                    <td><?php echo $u['rpt_power'];?></td>
                    <td><?php echo $u['rpt_rak'];?></td>
                    <!-- tabel kondisi rpt/bs -->
                    <td><?php if ($u['rpt_kondisi_bb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['rpt_kondisi_rr']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['rpt_kondisi_rb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>

                    <!-- tabel antena -->
                    <td><?php echo $u['antena_merk'];?></td>
                    <td><?php echo $u['antena_jenis'];?></td>
                    <td><?php echo $u['antena_gain'];?></td>
                    <td><?php echo $u['antena_posisi'];?></td>
                    <td><?php echo $u['antena_kontrak'];?></td>

                    <!-- tabel kabel feeder -->
                    <td><?php echo $u['kabel_merk'];?></td>
                    <td><?php echo $u['kabel_jenis'];?></td>
                    <td><?php echo $u['kabel_panjang'];?></td>
                    <td><?php echo $u['kabel_kontrak'];?></td>

                    <!-- tabel pemeliharaan -->
                    <td><?= @$pemeliharaan[$u['id']]['waktu']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['kegiatan']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['hasil']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['personil_pelaksana']?></td>

                    <!-- <td><?php echo substr($u['keterangan'], 0,10) ;?></td> -->
                    <td>
                      <a href="<?php echo site_url('rptconvensional/view/'.$u['id']);?>" class="btn btn-info">
                      <i class="far fa-eye"></i></a>

                      <a href="<?php echo site_url('rptconvensional/edit/'.$u['id']);?>" class="btn btn-success">
                      <i class="fas fa-edit"></i></a>

                      <a href="<?php echo site_url('rptconvensional/delete/'.$u['id']);?>" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        