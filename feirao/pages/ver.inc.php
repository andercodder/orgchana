<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include_once 'php/connect.php';
//criar variaveis


$erro = "";
$lugar = "";
$ver = " ";
if (isset($_POST['numLugar'])) {
  $numLugar = $_POST['numLugar'];

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
  }
  else {
  $erro .= "<p class=''><button type='button'class='btn btn-danger'><br> ESCOLHA O LUGAR SEM RESULTADOS DE PESQUISA </button><p></br>";

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
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="icon/favicon.png">

  <title>ver</title>
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


          <form class="form-signin" id="formid" method="post">
            <img class="mb-4" src="icon/logo.jpg" alt="chana logo" width="200" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Dados</h1>
            <div class="mb-2">
              <?php echo $lugar, $erro; ?>
            </div>

            <label for="numeroDeLugar" class="sr-only">Lugar numero</label>
            <input type="number" name="numLugar" id="numLugar" class="form-control" placeholder="Número de Lugar" required  autofocus min="1" max="623">
            <!-- end -->

            <button class="btn btn-lg btn-primary btn-block" id="buttonVer" type="submit">ver</button>
            <button class="btn btn-lg btn-primary btn-block" id="buttonGuardar" type="">Guardar / Imprimir</button>
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

              <script type="text/javascript">
              $(function(){
                $('#buttonGuardar').on('click', function(){
                  $('#buttonVer, #numLugar').hide();
                   $(this).hide();
                      window.print();

                }) //end of button function
              }) // end of $(function)

              </script>
              </body>
              </html>
