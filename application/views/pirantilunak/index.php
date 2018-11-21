  <!-- table -->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Data Table Piranti Lunak
        </div>

        <div class="card-body">
          <div class=""  style="overflow-x: scroll;">
            <p><a href="<?php echo site_url('PirantiLunak/add');?>" class="btn btn-info pull-left">
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
                  <th>No</th>
                  <th>Jenis</th>
                  <th>Nama</th>
                  <th>Tentang</th>
                  <th>Tanggal Pembuatan</th>
                  <th>Pejabat Penanda Tangan</th>
                  <th>Dokumen</th>
                  <th>Keterangan</th>
                  <th width="200px">Aksi</th>
                </tr>

                <thead>
                <tr>
                <form id="search" method="get">
                  <td></td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="jenis" class="form-control" placeholder="jenis" value="<?php echo @$model['jenis'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo @$model['nama'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="tentang" class="form-control" placeholder="tentang" value="<?php echo @$model['tentang'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="tgl_pembuatan" class="form-control" placeholder="tanggal pembuatan" value="<?php echo @$model['tgl_pembuatan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="penanda_tangan" class="form-control" placeholder="pejabat penanda tangan" value="<?php echo @$model['penanda_tangan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="dokumen" class="form-control" placeholder="dokumen" value="<?php echo @$model['dokumen'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" name="keterangan" class="form-control" placeholder="keterangan" value="<?php echo @$model['keterangan'];?>">
                      </div>
                    </div>
                  </td>
                  <td>
                     <button type="submit" name="search" value="true" class="btn btn-success">
                     <span class="fas fa-search"></span> Search</button>
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
                    <td><?php echo $u['jenis'];?></td>
                    <td><?php echo $u['nama'];?></td>
                    <td><?php echo $u['tentang'];?></td>
                    <td><?php echo $u['tgl_pembuatan'];?></td>
                    <td><?php echo $u['penanda_tangan'];?></td>
                    <td><?php echo $u['dokumen'];?></td>
                    <td><?php echo substr($u['keterangan'], 0,10) ;?></td>
                    <td>
                      <a href="<?php echo site_url('PirantiLunak/view/'.$u['id']);?>" class="btn btn-info">
                      <i class="far fa-eye"></i></a>

                      <a href="<?php echo site_url('PirantiLunak/edit/'.$u['id']);?>" class="btn btn-success">
                      <i class="fas fa-edit"></i></a>

                      <a href="<?php echo site_url('PirantiLunak/delete/'.$u['id']);?>" class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        