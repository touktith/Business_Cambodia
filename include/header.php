<p class="mt-4">អត្ថបទប្រចាំថ្ងៃថ្មីៗ </p>
       <h3>ដើម្បីបង្កើនចំណេះដឹងក្នុងការធ្វើអាជីវកម្ម</h3>
       <div class="big-photo">
         <!-- <img src="https://via.placeholder.com/255x200" alt=""> -->
         <?php
              $sql    = "SELECT * FROM tbl_slide";
              $rs     = $cn->query($sql);
              if($rs->num_rows > 0){
                while($row = $rs->fetch_array()){
                  ?>
                      <img src="../upload/<?php echo $row['photo']; ?>" alt="">
                  <?php
                }
              }

        ?>
         
              <!-- date  -->
              <?php
                  $sql    = "SELECT * FROM tbl_slide";
                  $rs     = $cn->query($sql);
                  if($rs->num_rows > 0){
                      while($row = $rs->fetch_array()){
                        ?>
                              <small class="pl-5"><?php echo $row['date']; ?></small>
                        <?php
                      }
                  }
              ?>
          <!-- date  -->
          <!-- title -->
                  <?php 
                      $sql    = "SELECT * FROM tbl_slide";
                      $rs     = $cn->query($sql);
                      if($rs->num_rows > 0){
                        while($row=$rs->fetch_array()){
                          ?>
                                 <h2 class="pl-5"><?php echo $row['title']; ?></h2>
                          <?php
                        }
                      }
                  ?>
          <!-- title -->
      
        <!-- button -->
                  <?php 
                      $sql    = "SELECT * FROM tbl_slide";
                      $rs     = $cn->query($sql);
                      if($rs->num_rows > 0){
                        while($row = $rs->fetch_array()){
                          ?>
                              <button><?php echo $row['btn_title']; ?></button>
                          <?php
                        }
                      }
                  ?>
        <!-- button -->
        </div>
        <p class="mt-3">ពាណិជ្ជកម្ម</p>
        <?php
            $sql    = "SELECT * FROM tbl_types_photo WHERE type='ads'";
            $rs     = $cn->query($sql);
            if($rs->num_rows > 0){
              while($row=$rs->fetch_array()){
                ?>
                    <img style="width: 400px; height:300px;" src="../upload/<?php echo $row['photo']; ?>" alt="">
                <?php
              }
            }

        ?>
        
