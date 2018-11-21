  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Kontak Person
    </div>

    <div class="card-body">
      <div class="col-md-12">          
        <table class="table table-bordered">
          <tr class="info">
            <th>Nomor
              <td colspan="2"><?php echo $model['nama'];?></td>
            </th>
          </tr>
          <tr>
            <th>Kontrak
              <td colspan="2"><?php echo $model['nomor'];?></td>
            </th>
          </tr>

          <tr>
            <th width="200px">Aksi
              <td colspan="2">

              <?php if(isLoggedIn()):?>
                <a href="<?php echo site_url('siterepeaterkontak/edit/'.$model['id']);?>" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('siterepeaterkontak/delete/'.$model['id']);?>" class="btn btn-sm btn-danger">
                <i class="fas fa-trash-alt"></i></a>
              <?php endif; ?>

            </td>
            </th>
          </tr>
        </table>

  				<a href="<?php echo site_url('siterepeaterkontak/index');?>" class="btn btn-sm btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>