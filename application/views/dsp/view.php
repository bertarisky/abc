  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table DSP Personil
    </div>

    <div class="card-body">
      <div class="col-md-12">          
        <table class="table table-hover table-bordered">
          <tr class="info">
            <th>Kesatuan
              <td><?php echo $dsp['kesatuan'];?></td>
            </th>
          </tr>
          <tr>
            <th>DSP
              <td><?php echo $dsp['dsp'];?></td>
            </th>
          </tr>
          <tr>
            <th>Riil
              <td><?php echo $dsp['riil'];?></td>
            </th>
          </tr>
          <tr>
            <th>Keterangan
              <td><?php echo $dsp['keterangan'];?></td>
            </th>
          </tr>
          <tr>
            <th width="200px">Aksi
              <td>
              <a href="<?php echo site_url('dsp/edit/'.$dsp['id']);?>" class="btn btn-success">
              <i class="fas fa-edit"></i></a>

              <a href="<?php echo site_url('dsp/delete/'.$dsp['id']);?>" class="btn btn-danger">
              <i class="fas fa-trash-alt"></i></a>
            </td>
            </th>
          </tr>
        </table>

  				<a href="<?php echo site_url('dsp/index');?>" class="btn btn-danger">
  				<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>

    </div>

  </div>