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



<div class="container">

  <!-- Tables
  ================================================== -->

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="tables">Tables</h1>
        </div>

        <div class="bs-component">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Word</th>
                <th scope="col">knowledge</th>
              </tr>
            </thead>

              <?php
              
              $filepath = 'knowledge.csv';
              
              $file = new SplFileObject($filepath);
              
              $file->setFlags(SplFileObject::READ_CSV);
              
              foreach ($file as $line) {
                
                $cnt = count($line);
                    echo '<tr class="table-primary">';
                      for($i = 0; $i < $cnt; $i++){
                        $data = explode(",",$line[$i]);
                        $cnt_data = count($data);
                        for($j = 0; $j < $cnt_data; $j++){
                        echo '<td>'.$data[$j].'</td>';
                        }
                      }
                    echo '</tr>';
              }
               ?>
 
          </table>
        </div>
      </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>

<script type="text/javascript">
  $('.bs-component [data-toggle="popover"]').popover();
  $('.bs-component [data-toggle="tooltip"]').tooltip();
</script>
</body>
</html>
