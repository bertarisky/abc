  <!-- table -->
  <h2 text-align="center">Data Pemeliharaan</h2>
  <div class="" >

        

        <div class="card-body">
          <div class="">

            <table class="table" text-align="center">
            
              <thead class="">
                <tr class="info">
                  <th>No</th>
                  <th>Waktu</th>
                  <th>Kegiatan</th>
                  <th>Hasil</th>
                  <th>Personil Pelaksana</th>
                </tr>
              </thead>
              
              <tbody>
                <?php $n=0;
                  foreach($model as $u){ 
                  $n++;
                  ?>
                  <tr class="active">
                    <td><?php echo $n;?></td>
                    <td><?php echo $u['waktu'];?></td>
                    <td><?php echo $u['kegiatan'];?></td>
                    <td><?php echo $u['hasil'];?></td>
                    <td><?php echo $u['personil_pelaksana'];?></td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        