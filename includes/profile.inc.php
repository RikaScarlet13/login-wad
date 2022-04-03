<?php
            $query = 'SELECT * FROM users';
  
            $result = mysqli_query($conn, $query);
          
            $database = mysqli_fetch_all($result, MYSQLI_ASSOC);
          
            mysqli_free_result($result);
          
            mysqli_close($conn);            
            
            
?>


<?php foreach($database as $users) : ?>
              <html><tr class="table-row table-head-container">
                <th class="table-data"><?php echo $users['usersId'];?></th>
                
                <th class="table-data"><?php echo $users['usersFname'];?></th>
                <th class="table-data"><?php echo $users['usersLname'];?></th>
                <th class="table-data"><?php echo $users['usersAddress'];?></th>
                
                <th class="table-data"><?php echo $users['usersSalutation'];?></th>
                
                <th class="table-data"><?php echo $users['usersSuffix'];?></th>
                <th class="table-data"><?php echo $users['usersEmail'];?></th>

                <th class="table-data"><?php echo $users['usersUid'];?></th>
              </tr>
              </html>
            <?php endforeach; ?>

