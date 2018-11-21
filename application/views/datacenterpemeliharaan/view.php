  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Pemeliharaan
    </div>

    <div class="card-body">
      <div class="col-md-12">          
        <table class="table table-bordered">
          <tr class="info">
            <th>Nomor
              <td colspan="2"><?php echo $model['waktu'];?></td>
            </th>
          </tr>
          <tr>
            <th>Merk
              <td colspan="2"><?php echo $model['kegiatan'];?></td>
            </th>
          </tr>
          <tr>
            <th>Jenis
              <td colspan="2"><?php echo $model['hasil'];?></td>
            </th>
          </tr>
          <tr>
            <th>Nomor Seri
              <td colspan="2"><?php echo $model['personil_pelaksana'];?></td>
            </th>
          </tr>

          <tr>
            <th width="200px">Aksi
              <td colspan="2">

              <?php if(isLoggedIn()):?>
                <a href="<?php echo site_url('datacenterpemeliharaan/edit/'.$model['id']);?>" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('datacenterpemeliharaan/delete/'.$model['id']);?>" class="btn btn-sm btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              <?php endif; ?>

            </td>
            </th>
          </tr>
        </table>

  				<a href="<?php echo site_url('datacenterpemeliharaan/index');?>" class="btn btn-sm btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>