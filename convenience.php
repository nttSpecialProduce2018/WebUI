<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>U.S.A.</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <style type="text/css">
  .bs-component + .bs-component {
    margin-top: 1rem;
  }
  @media (min-width: 768px) {
    .bs-docs-section {
      margin-top: 8em;
    }
    .bs-component {
      position: relative;
    }
    .bs-component .modal {
      position: relative;
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
      z-index: 1;
      display: block;
    }
    .bs-component .modal-dialog {
      width: 90%;
    }
    .bs-component .popover {
      position: relative;
      display: inline-block;
      width: 220px;
      margin: 20px;
    }
    .nav-tabs {
      margin-bottom: 15px;
    }
    .progress {
      margin-bottom: 10px;
    }
  }
  </style>
</head>
<body>

<!--header部分-->
<header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="./">
        <img src="image/usa.png" width="30" height="30" class="d-inline-block align-top mr-1" alt="U.S.A.">
        
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.html">Top <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Live demo
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./tables.php">Tables Page</a>
              <a class="dropdown-item" href="./convenience.html">Convenience Store</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="convenience.html">Convenience Store</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./tables.php">Tables</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/nttSpecialProduce2018/WebUI/wiki">Wiki</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>




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


  <table class="schedule" id="nittei">
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
</html>