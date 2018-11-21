  <!-- table -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> View Data Table Piranti Lunak
    </div>

    <div class="card-body">
      <div class="col-md-12">      
        <table class="table table-hover table-bordered">
          <tr class="info">
            <th>Jenis
              <td><?php echo $piranti_lunak['jenis'];?></td>
            </th>
          </tr>
          <tr>
            <th>Nama
              <td><?php echo $piranti_lunak['nama'];?></td>
            </th>
          </tr>
          <tr>
            <th>Tentang
              <td><?php echo $piranti_lunak['tentang'];?></td>
            </th>
          </tr>
          <tr>
            <th>Tanggal Pembuatan
              <td><?php echo $piranti_lunak['tgl_pembuatan'];?></td>
            </th>
          </tr>
          <tr>
            <th>Pejabat Penanda Tangan
              <td><?php echo $piranti_lunak['penanda_tangan'];?></td>
            </th>
          </tr>
          <tr>
            <th>Dokumen
              <td><?php echo $piranti_lunak['dokumen'];?></td>
            </th>
          </tr>
          <tr>
            <th>Keterangan
              <td><?php echo $piranti_lunak['keterangan'];?></td>
            </th>
          </tr>
          <tr>
            <th width="200px">Aksi
              <td>
              <a href="<?php echo site_url('PirantiLunak/edit/'.$piranti_lunak['id']);?>" class="btn btn-success">
              <i class="fas fa-edit"></i></a>

              <a href="<?php echo site_url('PirantiLunak/delete/'.$piranti_lunak['id']);?>" class="btn btn-danger">
              <i class="fas fa-trash-alt"></i></a>
            </td>
            </th>
          </tr>
        </table>

      		<a href="<?php echo site_url('PirantiLunak/index');?>" class="btn btn-danger">
      		<span class="glyphicon glyphicon-chevron-left"></span> kembali</a>

      </div>
    </div>

  </div>