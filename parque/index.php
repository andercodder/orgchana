<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'connect.php';
?>

<!--doctype html -->
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Parque!</title>
  <style>
  </style>
</head>
<body>
  <div class="row">
    <div class="heading">
      <h1>Parque Orgchana</h1>
    </div>
    <div class="col-md-12 col-sm-12">
      <div class="card">
        <div class="card-body" >
          <h2 class="card-title">LIVRES </h2>


          <!-- style='display:inline-block ' d-flex flex-row  card-text elementsLeft-->

          <p class="card-text">


            <?php
            //criar variaveis
            $livres = "";
            //selecionar dados
            if ($sql = "SELECT * FROM carros WHERE estado='livre'") {
              $resultado = $con->query($sql);

              if ($resultado->num_rows > 0) {
                //saida dos dados
                while ($row = $resultado->fetch_assoc()) {
                  $livres = "<p class=''><button type='button'class='btn btn-success' title='" .$row['estado']. "'> <img class='p-2' src='icon/icon.png'><br>"  .$row['id'].  " </button><p></br>";
                  echo $livres;

                }

              }
              else {
                echo "sem resultados";
              }
              # code...
            }
          //  $con->close();
            ?></p>

            <!-- <button type="button" id="button" class="btn btn-success" title="livre"> <img src="icon/icon.png" alt=""> <p>0</p> </button> -->
          </div>
        </div>
      </div>
      <!--end of the left column  -->
      <!-- start of the right column -->
      <div class="col-md-12 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">OCUPADOS</h2> <!-- i am using js to fill the div -->
            <p class="card-text"></p>
            <p class="card-text elementsRight">


              <?php
              //criar variaveis
              $ocupados = "";

              //selecionar dados
              if ($sql = "SELECT * FROM carros WHERE estado='ocupado'") {
                $resultado = $con->query($sql);

                if ($resultado->num_rows > 0) {
                  //saida dos dados
                  while ($row = $resultado->fetch_assoc()) {
                    $ocupados = "<p class=''><button type='button'class='btn btn-danger' title='" .($row['fornecedor']) . " ;" . ($row[ 'estado']). " " .($row['matricula']) . " ;" . ($row[ 'marca']). "'> <img class='p-2' src='icon/icon.png'><br>"  .$row['id'].  " </button><p></br>";
                    echo $ocupados;

                  }

                }
                else {
                  echo "sem resultados";
                }
                # code...
              }
              $con->close();
              ?>

              </p> <!--  i am usig javascript to fill the div -->


              </div>
              </div>
              </div>
              </div><!-- end of the right column -->
              </div><!--   close row -->
              </div><!--   close container -->


              <!-- Optional JavaScript -->
              <!-- jQuery first, then Popper.js, then Bootstrap JS -->
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <script src="custom.js"></script>
              </body>
              </html>
