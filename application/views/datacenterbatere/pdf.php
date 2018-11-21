  <!-- table -->
  <h2 text-align="center">Data Batere</h2>
  <div class="" >

        

        <div class="card-body">
          <div class="">

            <table class="table" text-align="center">
            
              <thead class="">
                <tr class="info">
                  <th>No</th>
                  <th>Kontrak</th>
                  <th>Merk</th>
                  <th>Jenis</th>
                  <th>Nomor Seri</th>
                  <th>Kapasitas</th>
                  <th>Milik</th>
                </tr>
              </thead>
              
              <tbody>
                <?php $n=0;
                  foreach($model as $u){ 
                  $n++;
                  ?>
                  <tr class="active">
                    <td><?php echo $n;?></td>
                    <td><?php echo $u['kontrak'];?></td>
                    <td><?php echo $u['merk'];?></td>
                    <td><?php echo $u['jenis'];?></td>
                    <td><?php echo $u['seri'];?></td>
                    <td><?php echo $u['kapasitas'];?></td>
                    <td><?php echo $u['milik'];?></td>
                  </tr>
                <?php }?>
              </tbody>

            </table>

          </div>

        </div>
        
  </div>

        