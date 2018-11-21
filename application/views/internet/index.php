  <!-- table -->
  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i> Data Table Internet
      </div>

      <div class="card-body">
        <div class=""  style="overflow-x: scroll;">
          <p><a href="<?php echo site_url('internet/add');?>" class="btn btn-info pull-left">
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
                <th>No</th>
                <th>Kesatuan</th>
                <th>id Pelanggan</th>
                <th>Jenis</th>
                <th>Bandwidth</th>
                <th>Posisi Node</th>
                <th>Perangkat Last Mile Penyedia</th>
                <th>Biaya Bulanan</th>
                <th>Pemanfaatan</th>
                <th>Tanggungjawab Pembayaran</th>
                <th>Pemeliharaan/Perbaikan</th>
                <th width="200px">Aksi</th>
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
                      <input type="text" name="id_pelanggan" class="form-control" placeholder="id Pelanggan" value="<?php echo @$model['id_pelanggan'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="jenis" class="form-control" placeholder="Jenis" value="<?php echo @$model['jenis'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="bandwidth" class="form-control" placeholder="Bandwidthi" value="<?php echo @$model['bandwidth'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="posisi_node" class="form-control" placeholder="Posisi Node" value="<?php echo @$model['posisi_node'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="perangkat_last" class="form-control" placeholder="Perangkat Last Mile Penyedia" value="<?php echo @$model['perangkat_last'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="biaya_bulanan" class="form-control" placeholder="Biaya Bulanan" value="<?php echo @$model['biaya_bulanan'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="pemanfaatan" class="form-control" placeholder="Pemanfaatan" value="<?php echo @$model['pemanfaatan'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="tanggungjwb_pembayaran" class="form-control" placeholder="Tanggungjawab Pembayaran" value="<?php echo @$model['tanggungjwb_pembayaran'];?>">
                    </div>
                  </div>
                </td>

                <td>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="text" name="pemeliharaan" class="form-control" placeholder="Pemeliharaan/Perbaikan" value="<?php echo @$model['pemeliharaan'];?>">
                    </div>
                  </div>
                </td>

                <td>
                   <button type="submit" name="search" value="true" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Search</button>
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
                  <td><?php echo $u['id_pelanggan'];?></td>
                  <td><?php echo $u['jenis'];?></td>
                  <td><?php echo $u['bandwidth'];?></td>
                  <td><?php echo $u['posisi_node'];?></td>
                  <td><?php echo $u['perangkat_last'];?></td>
                  <td><?php echo $u['biaya_bulanan'];?></td>
                  <td><?php echo $u['pemanfaatan'];?></td>
                  <td><?php echo $u['tanggungjwb_pembayaran'];?></td>
                  <td><?php echo $u['pemeliharaan'];?></td>
                  <td>
                    <a href="<?php echo site_url('internet/view/'.$u['id']);?>" class="btn btn-info"><i class="fas fa-eye"></i></a>

                    <a href="<?php echo site_url('internet/edit/'.$u['id']);?>" class="btn btn-success"><i class="fas fa-edit"></i></a>

                    <a href="<?php echo site_url('internet/delete/'.$u['id']);?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
              <?php } ?>

            </tbody>

          </table>
            
        </div>
      </div>

  </div>      