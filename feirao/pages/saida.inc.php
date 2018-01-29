<?php

include_once 'php/connect.php';

//create variable to update to the database
$numLugar = $_POST['numLugar'];
$estado = $_POST['estado'];
$sucesso = "";
$erro = "";

if ($numLugar === NULL) {
  $erro .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">  numero de entrada se encontra vazio
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div> ';
}
if ($sql = "SELECT * FROM carros WHERE id='$numLugar'") {
  $resultado = $con->query($sql);
  if ($resultado->num_rows > 0 ) {
    while ($row = $resultado->fetch_assoc()) {
      if ($row["estado"] === "livre") {
        $erro .='<div class="alert alert-danger alert-dismissible fade show" role="alert"> O Lugar Ja se Encontra livre deve fazer primeiro uma Entrada
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div> ';
      }
      else {
        //update datas to the database
        $sql = "UPDATE carros SET estado ='livre' WHERE id = '$numLugar'";
        if ($con->query($sql) === TRUE ) {
          $sucesso  .= '<div class="alert alert-success alert-dismissible fade show" role="alert"> Viatura saiu do lugar ' . $numLugar .
          '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>';
        }else {
          $erro .='<div class="alert alert-danger alert-dismissible fade show" role="alert"> erro ao actualizar dados ' . $con->error .
          ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div> ';
        }
      }
    }
  }
}
$con->close();
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
  <!-- my css  -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="icon/favicon.png">

  <title>Saida de Viatura!</title>
  <style>





  </style>
</head>
<body class="text-center">
  <!-- <h1 class="heading">Parque OrgChana Entrada!</h1> -->
  <form class="form-signin" method="post">
    <img class="mb-4" src="icon/logo.jpg" alt="chana logo" width="200" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Saida de Viatura</h1>
    <div class="mb-2">
      <?php echo $sucesso, $erro; ?>
    </div>
    <label for="numeroDeLugar" class="sr-only">Lugar numero</label>
    <input type="number" name="numLugar" id="numLugar" class="form-control" placeholder="Lugar Número" required autofocus min="1" max="623">
    <label for="Estado" class="sr-only">Estado</label>
    <input type="text" id="estado" class="form-control" placeholder="Saída" disabled required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" class="sr-only" value="remember-me">
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Saida</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="custom.js"></script>
</body>
</html>
