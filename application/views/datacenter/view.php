  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Center
    </div>

    <div class="card-body">
      <div class="col-md-12">          
        <table class="table table-bordered tablesite">

          <tr class="info">
            <th>Grounding</th>
              <td colspan="2"><?php echo $model['grounding'];?></td>
          </tr>
          
          <tr>
            <th>Bangunan</th>
              <td colspan="2"><?php echo $model['bangunan']['jenis'];?></td>
          </tr>

          <tr>
            <th>AC</th>
              <td colspan="2"><?php echo $model['ac']['nomor'];?></td>
          </tr>

          <tr>
            <th>Kamera CCTV</th>
              <td colspan="2"><?php echo $model['cctv']['nomor'];?></td>
          </tr>

          <tr>
            <th>DVR</th>
              <td colspan="2"><?php echo $model['dvr']['nomor'];?></td>
          </tr>

          <tr>
            <th>Genset</th>
              <td colspan="2"><?php echo $model['genset']['kontrak'];?></td>
          </tr>

          <tr>
            <th>UPS</th>
              <td colspan="2"><?php echo $model['ups']['kontrak'];?></td>
          </tr>

          <tr>
            <th>Batere</th>
              <td colspan="2"><?php echo $model['batere']['kontrak'];?></td>
          </tr>

          <tr>
            <th>Rak</th>
              <td colspan="2"><?php echo $model['rak']['nomor'];?></td>
          </tr>

          <tr>
            <th>Pemeliharaan</th>
              <td colspan="2"><?php echo $model['pemeliharaan']['waktu'];?></td>
          </tr>

          <tr>
            <th>Kontak Person</th>
              <td colspan="2"><?php echo $model['kontak']['nama'];?></td>
          </tr>

          <tr>
            <th width="200px">Aksi
              <td colspan="2">

              <?php if(isLoggedIn()):?>
                <a href="<?php echo site_url('datacenter/edit/'.$model['id']);?>" class="btn btn-success btn-sm">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('datacenter/delete/'.$model['id']);?>" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i></a>
              <?php endif; ?>

            </td>
            </th>
          </tr>
        </table>

          <a href="<?php echo site_url('datacenter/index');?>" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>