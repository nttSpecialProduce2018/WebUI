  <!-- Tables
  ================================================== -->

  <table class="schedule" id="nittei">
   <tr>
    <th style="text-align:left;border-bottom:1px solid #ddd" valign="top">1月　　</th>
      
      <?php
        for($i = 1; $i < 32; $i++){
            echo '<th valign="top" style="border-bottom:1px solid #ddd">'.str_pad($i, 2, 0, STR_PAD_LEFT).'　</th>';
        }
      ?>
              <?php
              
              $filepath = '01月.csv';
              
              $file = new SplFileObject($filepath);
              $file->setFlags(SplFileObject::READ_CSV);
              
              
              foreach ($file as $line) {
                $data = explode(",",$line[0]);
                $cnt_tmp = $cnt + 20;
                $test =  substr_count($data, ",");
                $name = $data[$cnt_tmp];
                    echo '<tr class="table-primary">';
                      for($i = -1; $i < 31; $i++){
                        if($i == -1){
                          echo '<td valign="top" style="border-bottom:1px solid #ddd">'.$name.$test.'</td>';
                        }elseif($i == $cnt_tmp){
                        }else{
                        
                         $date[$data[$i]] = $data[$i];
                        
                        }
                      }
                      for($k = 1; $k < 32; $k++){
                          if(isset($date[$k])){
                            echo '<td valign="top" style="border-bottom:1px solid #ddd" bgcolor="#87CEFA"></td>';
                      }else{
                            echo '<td valign="top" style="border-bottom:1px solid #ddd" bgcolor="#CCCCCC"></td>';
                           }
                      }
                      $date =  array();
                    echo '</tr>';
              }
               ?>
               


          <tr class="comment">
       </tr>
  </table>


  <table class="schedule2" id="nittei2">
   <tr>
    <th style="text-align:left;border-bottom:1px solid #ddd" valign="top">2月　　</th>
      
      <?php
        for($i = 1; $i < 29; $i++){
            echo '<th valign="top" style="border-bottom:1px solid #ddd">'.str_pad($i, 2, 0, STR_PAD_LEFT).'　</th>';
        }
      ?>
      
      <br><br>
      
              <?php
              
              $filepath = '02月.csv';
              
              $file = new SplFileObject($filepath);
              $file->setFlags(SplFileObject::READ_CSV);
              
              
              foreach ($file as $line) {
                $data = explode(",",$line[0]);
                $cnt_tmp = $cnt + 20;
                $test =  substr_count($data, ",");
                $name = $data[$cnt_tmp];
                    echo '<tr class="table-primary">';
                      for($i = -1; $i < 31; $i++){
                        if($i == -1){
                          echo '<td valign="top" style="border-bottom:1px solid #ddd">'.$name.$test.'</td>';
                        }elseif($i == $cnt_tmp){
                        }else{
                        
                         $date[$data[$i]] = $data[$i];
                        
                        }
                      }
                      for($k = 1; $k < 29; $k++){
                          if(isset($date[$k])){
                            echo '<td valign="top" style="border-bottom:1px solid #ddd" bgcolor="#87CEFA"></td>';
                      }else{
                            echo '<td valign="top" style="border-bottom:1px solid #ddd" bgcolor="#CCCCCC"></td>';
                           }
                      }
                      $date =  array();
                    echo '</tr>';
              }
               ?>
               


          <tr class="comment">
       </tr>
  </table>
