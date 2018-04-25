<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'connect.php';
//criar variaveis
$numLugar = $_POST['numLugar'];
$erro = "";
$ver = " ";

//selecionar dados
if ($sql = "SELECT * FROM carros WHERE id='$numLugar'") {
  $resultado = $con->query($sql);

  if ($resultado->num_rows > 0) {
    //saida dos dados
    while ($row = $resultado->fetch_assoc()) {
      $lugar = "<p class=''><button type='button'class='btn btn-success'><br>" . " LUGAR: "  .$row['id']. "<br> ESTADO: " .$row['estado']. "<br> NOME: ".$row['fornecedor'].
"<br> Matricula: ".$row['matricula']. "<br> MARCA:  ".$row['marca']. "<br> MODELO: ".$row['modelo'].  " </button><p></br>";



    //  echo $ver;

    }

  }
  else {
    echo "sem resultados";
  }
  # code...
}
//  $con->close();
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
          <h2 class="card-title"></h2>


          <form class="form-signin" method="post">
            <img class="mb-4" src="icon/logo.jpg" alt="chana logo" width="200" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Ver Dados</h1>
            <div class="mb-2">
              <?php echo $lugar, $erro; ?>
            </div>

            <label for="numeroDeLugar" class="sr-only">Lugar numero</label>
            <input type="number" name="numLugar" id="numLugar" class="form-control" placeholder="Número de Lugar" required  autofocus min="1" max="623">
            <!-- end -->

            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrada</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
          </form>


          </div>
        </div>
      </div>

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
