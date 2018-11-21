  <!-- table -->
  <h2 text-align="center">Data Bangunan</h2>
  <div class="" >

        

        <div class="card-body">
          <div class="">

            <table class="table" text-align="center">
            
              <thead class="">
                <tr class="info">
                  <th>No</th>
                  <th>Jenis</th>
                  <th>Ukuran</th>
                  <th>Kontrak</th>
                </tr>
              </thead>
              
              <tbody>
                <?php $n=0;
                  foreach($model as $u){ 
                  $n++;
                  ?>
                  <tr class="active">
                    <td><?php echo $n;?></td>
                    <td><?php echo $u['jenis'];?></td>
                    <td><?php echo $u['ukuran'];?></td>
                    <td><?php echo $u['kontrak'];?></td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        