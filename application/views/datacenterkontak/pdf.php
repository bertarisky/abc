  <!-- table -->
  <h2 text-align="center">Data Kontak</h2>
  <div class="" >

        

        <div class="card-body">
          <div class="">

            <table class="table" text-align="center">
            
              <thead class="">
                <tr class="info">
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nomor Telepon</th>
                </tr>
              </thead>
              
              <tbody>
                <?php $n=0;
                  foreach($model as $u){ 
                  $n++;
                  ?>
                  <tr class="active">
                    <td><?php echo $n;?></td>
                    <td><?php echo $u['nama'];?></td>
                    <td><?php echo $u['no_telepon'];?></td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        