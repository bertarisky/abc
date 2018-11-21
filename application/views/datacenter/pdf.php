  <!-- table -->
  <h2 text-align="center">Data Center</h2>
  <div class="" >

        

        <div class="card-body">
          <div class="">

            <table class="table" text-align="center">
            
              <thead class="">
                <tr class="info">
                  <th>No</th>
                  <th>Grounding</th>
                  <th>Bangunan</th>
                  <th>AC</th>
                  <th>Kamera CCTV</th>
                  <th>DVR</th>
                  <th>Genset</th>
                  <th>UPS</th>
                  <th>Batere</th>
                  <th>Rak</th>
                  <th>Pemeliharaan</th>
                  <th>Kontak Person</th>
                </tr>
              </thead>
              
              <tbody>
                <?php $n=0;
                  foreach($model as $u){ 
                  $n++;
                  ?>
                  <tr class="active">
                    <td><?php echo $n;?></td>
                    <td><?php echo $u['grounding'];?></td>
                    <td><?php echo $u['bangunan']['jenis'];?></td>
                    <td><?php echo $u['ac']['nomor'];?></td>
                    <td><?php echo $u['cctv']['nomor'];?></td>
                    <td><?php echo $u['dvr']['nomor'];?></td>
                    <td><?php echo $u['genset']['kontrak'];?></td>
                    <td><?php echo $u['ups']['kontrak'];?></td>
                    <td><?php echo $u['batere']['kontrak'];?></td>
                    <td><?php echo $u['rak']['nomor'];?></td>
                    <td><?php echo $u['pemeliharaan']['waktu'];?></td>
                    <td><?php echo $u['kontak']['nama'];?></td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        