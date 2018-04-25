<?php

include_once 'php/connect.php';

//create variable to update to the database

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$sucesso = "";
$erro = "";
$numLugar = $_POST['numLugar'];
$estado = $_POST['estado'];



if ($numLugar === NULL or $nome === NULL or $matricula === NULL or $marca === NULL or $modelo === NULL or $cor === NULL ) {
  $erro .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">  numero de entrada ou outros dados estao vazios preencha todos os campos
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div> ';
}
// some updates security check if lugar esta ocupado if true display troca de lugar
if ($sql = "SELECT * FROM carros WHERE id='$numLugar'") {
  $resultado = $con->query($sql);
  if ($resultado->num_rows > 0 ) {
    while ($row = $resultado->fetch_assoc()) {
      if ($row["estado"] === "ocupado") {
        $erro .='<div class="alert alert-danger alert-dismissible fade show" role="alert"> o Lugar Ja se Encontra Ocupado deve fazer primeiro uma saida
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div> ';
      }
      // se lugar nao esta ocupado then update table
      else {
        //update datas to the database
        $sql = "UPDATE carros SET estado ='ocupado',
        fornecedor = '$nome',
        matricula = '$matricula',
        marca = '$marca',
        modelo = '$modelo',
        cor = '$cor'
        WHERE id = '$numLugar'";
        if ($con->query($sql) === TRUE ) {
          $sucesso  .= '<div class="alert alert-success alert-dismissible fade show" role="alert"> Viatura deu entrada no lugar ' . $numLugar .
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
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="icon/favicon.png">
  <title>Entrada de Viatura!</title>
  <style>





  </style>
</head>
<body class="text-center">
  <!-- <h1 class="heading">Parque OrgChana Entrada!</h1> -->
  <form class="form-signin" method="post">
    <img class="mb-4" src="icon/logo.jpg" alt="chana logo" width="200" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Entrada de Viatura</h1>
    <div class="mb-2">
      <?php echo $sucesso, $erro; ?>
    </div>
    <!-- nome do fornecedor -->
    <label for="nome" class="sr-only">nome</label>
    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome :" required  autofocus >
    <!-- end -->
    <!-- nome do fornecedor -->
    <label for="Matricula" class="sr-only">matricula</label>
    <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Matricula :" required  autofocus >
    <!-- end -->
    <!-- marca do carro -->
    <label for="marca" class="sr-only">marca</label>
    <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca :" required  autofocus >
    <!-- end -->
    <!-- modelo do carro -->
    <label for="modelo" class="sr-only">modelo</label>
    <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Modelo :" required  autofocus >
    <!-- end -->
    <!-- cor do carro -->
    <label for="Cor" class="sr-only">cor</label>
    <input type="text" name="cor" id="cor" class="form-control" placeholder="Cor :" required  autofocus >
    <!-- end -->
    <!-- lugar numero  -->
    <label for="numeroDeLugar" class="sr-only">Lugar numero</label>
    <input type="number" name="numLugar" id="numLugar" class="form-control" placeholder="Número de Lugar" required  autofocus min="1" max="623">
    <!-- end -->
    <!-- estado -->
    <label for="Estado" class="sr-only">Estado</label>
    <input type="text" id="estado" name="estado" class="form-control" placeholder="Entrada" disabled >
    <!-- estado -->
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" class="sr-only" value="remember-me">
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrada</button>
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
