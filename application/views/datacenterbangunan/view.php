  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Bangunan
    </div>

    <div class="card-body">
      <div class="col-md-12">          
        <table class="table table-bordered">
          <tr class="info">
            <th>Jenis
              <td colspan="2"><?php echo $model['jenis'];?></td>
            </th>
          </tr>
          <tr>
            <th>Ukuran
              <td colspan="2"><?php echo $model['ukuran'];?></td>
            </th>
          </tr>
          <tr>
            <th>Milik
              <td colspan="2"><?php echo $model['kontrak'];?></td>
            </th>
          </tr>

          <tr>
            <th width="200px">Aksi
              <td colspan="2">

              <?php if(isLoggedIn()):?>
                <a href="<?php echo site_url('datacenterbangunan/edit/'.$model['id']);?>" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('datacenterbangunan/delete/'.$model['id']);?>" class="btn btn-sm btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              <?php endif; ?>
              
            </td>
            </th>
          </tr>
        </table>

  				<a href="<?php echo site_url('datacenterbangunan/index');?>" class="btn btn-sm btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>