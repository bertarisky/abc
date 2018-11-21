  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Table Satelit Vsat
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">
            <p><a href="<?php echo site_url('satelitvsat/add');?>" class="btn btn-info pull-left">
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
                  <th rowspan="3">Jenis Antena</th>
                  <th colspan="6" align="center">Disk</th>
                  <th colspan="8" align="center">SSPA/BUC</th>
                  <th colspan="8" align="center">UP/DOWN Converter</th>
                  <th colspan="7" align="center">LNA/LNB</th>
                  <th colspan="6" align="center">Feedhorn</th>
                  <th colspan="6" align="center">Modem</th>
                  <th rowspan="2" colspan="4" align="center">Pemeliharaan</th>
                  <th rowspan="3" width="200px">Aksi</th>
                </tr>

                
                  <tr>
                    <!-- tabel Disk -->
                    <th rowspan="2">Merk</th>
                    <th rowspan="2">Jenis/Type</th>
                    <th rowspan="2">Ukuran</th>
                    <th colspan="3">Kondisi</th>

                    <!-- tabel SSPA/BUC -->
                    <th rowspan="2">Merk</th>
                    <th rowspan="2">Jenis/Type</th>
                    <th rowspan="2">Nomor Seri</th>
                    <th rowspan="2">Frekuensi Kerja</th>
                    <th rowspan="2">Daya</th>
                    <th colspan="3">Kondisi</th>

                    <!-- tabel UP/DOWN Converter -->
                    <th rowspan="2">Merk</th>
                    <th rowspan="2">Jenis/Type</th>
                    <th rowspan="2">Nomor Seri</th>
                    <th rowspan="2">Frekuensi Kerja</th>
                    <th rowspan="2">Daya</th>
                    <th colspan="3">Kondisi</th>

                    <!-- tabel LNA/LNB -->
                    <th rowspan="2">Merk</th>
                    <th rowspan="2">Jenis/Type</th>
                    <th rowspan="2">Nomor Seri</th>
                    <th rowspan="2">Frekuensi Kerja</th>
                    <th colspan="3">Kondisi</th>

                    <!-- tabel Feedhorn -->
                    <th rowspan="2">Merk</th>
                    <th rowspan="2">Jenis/Type</th>
                    <th rowspan="2">Nomor Seri</th>
                    <th colspan="3">Kondisi</th>

                    <!-- tabel Modem -->
                    <th rowspan="2">Merk</th>
                    <th rowspan="2">Jenis/Type</th>
                    <th rowspan="2">Nomor Seri</th>
                    <th colspan="3">Kondisi</th>

                  </tr>

                    <tr>
                      <!-- tabel kondisi Disk -->
                      <th>BB</th>
                      <th>RR</th>
                      <th>RB</th>

                      <!-- tabel kondisi SSPA/BUC -->
                      <th>BB</th>
                      <th>RR</th>
                      <th>RB</th>

                      <!-- tabel kondisi UP/DOWN Converter -->
                      <th>BB</th>
                      <th>RR</th>
                      <th>RB</th>

                      <!-- tabel kondisi LNA/LNB -->
                      <th>BB</th>
                      <th>RR</th>
                      <th>RB</th>

                      <!-- tabel kondisi Feedhorn -->
                      <th>BB</th>
                      <th>RR</th>
                      <th>RB</th>

                      <!-- tabel kondisi Modem -->
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
                        <input type="text" name="jenis_antena" class="form-control" placeholder="jenis antena" value="<?php echo @$model['jenis_antena'];?>">
                      </div>
                    </div>
                  </td>

                  <!-- tabel Disk -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="disk_merk" class="form-control" placeholder="merk" value="<?php echo @$model['disk_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="disk_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['disk_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="disk_seri" class="form-control" placeholder="ukuran" value="<?php echo @$model['disk_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <!-- tabel kondisi Disk -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="disk_kondisi_bb" class="form-control" placeholder="BB" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="disk_kondisi_rr" class="form-control" placeholder="RR" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="disk_kondisi_rb" class="form-control" placeholder="RB" value=1>
                      </div>
                    </div>
                  </td>

                  <!-- tabel SSPA/BUC -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="sspa_merk" class="form-control" placeholder="merk" value="<?php echo @$model['sspa_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="sspa_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['sspa_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="sspa_seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['sspa_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="sspa_frekuensi" class="form-control" placeholder="frekuensi kerja" value="<?php echo @$model['sspa_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="sspa_daya" class="form-control" placeholder="daya" value="<?php echo @$model['sspa_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <!-- tabel kondisi SSPA/BUC -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="sspa_kondisi_bb" class="form-control" placeholder="BB" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="sspa_kondisi_rr" class="form-control" placeholder="RR" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="sspa_kondisi_rb" class="form-control" placeholder="RB" value=1>
                      </div>
                    </div>
                  </td>

                  <!-- tabel UP/DOWN Converter -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="up_merk" class="form-control" placeholder="merk" value="<?php echo @$model['up_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="up_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['up_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="up_seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['up_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="up_frekuensi" class="form-control" placeholder="frekuensi kerja" value="<?php echo @$model['up_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="up_daya" class="form-control" placeholder="daya" value="<?php echo @$model['up_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <!-- tabel kondisi UP/DOWN Converter -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="up_kondisi_bb" class="form-control" placeholder="BB" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="up_kondisi_rr" class="form-control" placeholder="RR" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="up_kondisi_rb" class="form-control" placeholder="RB" value=1>
                      </div>
                    </div>
                  </td>

                  <!-- tabel LNA/LNB -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="lna_merk" class="form-control" placeholder="merk" value="<?php echo @$model['lna_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="lna_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['lna_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="lna_seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['lna_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="lna_frekuensi" class="form-control" placeholder="frekuensi kerja" value="<?php echo @$model['lna_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <!-- tabel kondisi LNA/LNB -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="lna_kondisi_bb" class="form-control" placeholder="BB" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="lna_kondisi_rr" class="form-control" placeholder="RR" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="lna_kondisi_rb" class="form-control" placeholder="RB" value=1>
                      </div>
                    </div>
                  </td>

                  <!-- tabel Feedhorn -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="feedhorn_merk" class="form-control" placeholder="merk" value="<?php echo @$model['feedhorn_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="feedhorn_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['feedhorn_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="feedhorn_seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['feedhorn_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <!-- tabel kondisi Feedhorn -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="feedhorn_kondisi_bb" class="form-control" placeholder="BB" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="feedhorn_kondisi_rr" class="form-control" placeholder="RR" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="feedhorn_kondisi_rb" class="form-control" placeholder="RB" value=1>
                      </div>
                    </div>
                  </td>

                  <!-- tabel Modem -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="modem_merk" class="form-control" placeholder="merk" value="<?php echo @$model['modem_merk'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="modem_jenis" class="form-control" placeholder="jenis/type" value="<?php echo @$model['modem_jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="modem_seri" class="form-control" placeholder="nomor seri" value="<?php echo @$model['modem_seri'];?>">
                      </div>
                    </div>
                  </td>
                  <!-- tabel kondisi Modem -->
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="modem_kondisi_bb" class="form-control" placeholder="BB" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="modem_kondisi_rr" class="form-control" placeholder="RR" value=1>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="checkbox" name="modem_kondisi_rb" class="form-control" placeholder="RB" value=1>
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
                    <td><?php echo $u['jenis_antena'];?></td>

                    <!-- tabel disk -->
                    <td><?php echo $u['disk_merk'];?></td>
                    <td><?php echo $u['disk_jenis'];?></td>
                    <td><?php echo $u['disk_ukuran'];?></td>
                    <!-- tabel kondisi disk -->
                    <td><?php if ($u['disk_kondisi_bb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['disk_kondisi_rr']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['disk_kondisi_rb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>

                    <!-- tabel sspa/buc -->
                    <td><?php echo $u['sspa_merk'];?></td>
                    <td><?php echo $u['sspa_jenis'];?></td>
                    <td><?php echo $u['sspa_seri'];?></td>
                    <td><?php echo $u['sspa_frekuensi'];?></td>
                    <td><?php echo $u['sspa_daya'];?></td>
                    <!-- tabel kondisi sspa/buc -->
                    <td><?php if ($u['sspa_kondisi_bb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['sspa_kondisi_rr']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['sspa_kondisi_rb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>

                    <!-- tabel up/down -->
                    <td><?php echo $u['up_merk'];?></td>
                    <td><?php echo $u['up_jenis'];?></td>
                    <td><?php echo $u['up_seri'];?></td>
                    <td><?php echo $u['up_frekuensi'];?></td>
                    <td><?php echo $u['up_daya'];?></td>
                    <!-- tabel kondisi up/down -->
                    <td><?php if ($u['up_kondisi_bb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['up_kondisi_rr']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['up_kondisi_rb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>

                    <!-- tabel lna/lnb -->
                    <td><?php echo $u['lna_merk'];?></td>
                    <td><?php echo $u['lna_jenis'];?></td>
                    <td><?php echo $u['lna_seri'];?></td>
                    <td><?php echo $u['lna_frekuensi'];?></td>
                    <!-- tabel kondisi lna/lnb -->
                    <td><?php if ($u['lna_kondisi_bb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['lna_kondisi_rr']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['lna_kondisi_rb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>

                    <!-- tabel feedhorn -->
                    <td><?php echo $u['feedhorn_merk'];?></td>
                    <td><?php echo $u['feedhorn_jenis'];?></td>
                    <td><?php echo $u['feedhorn_seri'];?></td>
                    <!-- tabel kondisi feedhorn -->
                    <td><?php if ($u['feedhorn_kondisi_bb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['feedhorn_kondisi_rr']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['feedhorn_kondisi_rb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>

                    <!-- tabel modem -->
                    <td><?php echo $u['modem_merk'];?></td>
                    <td><?php echo $u['modem_jenis'];?></td>
                    <td><?php echo $u['modem_seri'];?></td>
                    <!-- tabel kondisi modem -->
                    <td><?php if ($u['modem_kondisi_bb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['modem_kondisi_rr']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>
                    <td><?php if ($u['modem_kondisi_rb']) {
                      echo "<i class='fas fa-check icon_success'></i>";
                      }?></td>

                    <!-- tabel pemeliharaan -->
                    <td><?= @$pemeliharaan[$u['id']]['waktu']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['kegiatan']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['hasil']?></td>
                    <td><?= @$pemeliharaan[$u['id']]['personil_pelaksana']?></td>


                    <!-- <td><?php echo substr($u['keterangan'], 0,10) ;?></td> -->
                    <td>
                      <a href="<?php echo site_url('satelitvsat/view/'.$u['id']);?>" class="btn btn-info">
                      <i class="far fa-eye"></i></a>

                      <a href="<?php echo site_url('satelitvsat/edit/'.$u['id']);?>" class="btn btn-success">
                      <i class="fas fa-edit"></i></a>

                      <a href="<?php echo site_url('satelitvsat/delete/'.$u['id']);?>" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        