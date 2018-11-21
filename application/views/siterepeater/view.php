  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Site Repeater
    </div>

    <div class="card-body">
      <div class="col-md-12">          
        <table class="table table-bordered tablesite">
          <tr class="info">
            <th>Nama Site</th>
              <td colspan="2"><?php echo $model['nama_site'];?></td>
          </tr>
          <tr>
            <th>Alamat</th>
              <td colspan="2"><?php echo $model['alamat'];?></td>
          </tr>
          <tr>
            <th>Koordinat</th>
              <td colspan="2"><?php echo $model['koordinat'];?></td>
          </tr>
          <tr>
            <th>Elevasi</th>
              <td colspan="2"><?php echo $model['elevasi'];?></td>
          </tr>
          <tr>
            <th>Jalan Akses</th>
              <td colspan="2"><?php echo $model['jln_akses'];?></td>
          </tr>
          <tr>
            <th>Selter</th>
              <td colspan="2"><?php echo $model['selter']['jenis'];?></td>
          </tr>
          <tr>
            <th>Tower</th>
              <td colspan="2"><?php echo $model['tower']['jenis'];?></td>
          </tr>
          <tr>
            <th>Genset</th>
              <td colspan="2"><?php echo $model['genset']['merk'];?></td>
          </tr>
          <tr>
            <th>UPS</th>
              <td colspan="2"><?php echo $model['ups']['merk'];?></td>
          </tr>
          <tr>
            <th>Batere</th>
              <td colspan="2"><?php echo $model['batere']['merk'];?></td>
          </tr>
          <tr>
            <th>Rak</th>
              <td colspan="2"><?php echo $model['rak']['nomor'];?></td>
          </tr>
          <tr>
            <th>Kontak</th>
              <td colspan="2"><?php echo $model['kontak']['nama'];?></td>
          </tr>
          <tr>
            <th>Pemeliharaan</th>
              <td colspan="2"><?php echo $model['pemeliharaan']['waktu'];?></td>
          </tr>

          <tr>
            <th width="200px">Aksi
              <td colspan="2">

              <?php if(isLoggedIn()):?>
                <a href="<?php echo site_url('siterepeater/edit/'.$model['id']);?>" class="btn btn-success btn-sm">
                <i class="fas fa-edit"></i></a>

                <a href="<?php echo site_url('siterepeater/delete/'.$model['id']);?>" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i></a>
              <?php endif; ?>
              
            </td>
            </th>
          </tr>
        </table>

  				<a href="<?php echo site_url('siterepeater/index');?>" class="btn btn-danger btn-sm">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>