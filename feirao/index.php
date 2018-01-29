<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include_once 'php/connect.php';
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

  <title>Parque!</title>
  <style>
  body {
  padding-top: 5rem;
}
.starter-template {
  padding: 3rem 1.5rem;
  text-align: center;
}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">OrgChana</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?p=home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=entrada">Entrada</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=livre">Livre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=ocupado">ocupado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=saida">saida</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=ver">ver</a>
          </li>

        </ul>

         </div>
         </nav>
    <main role="main" class="container">

      <div class="starter-template">
        <h1></h1>
        <p class="lead"><br></p>

      <?php

    $pages_dir = 'pages';
    if (!empty($_GET['p'])) {

      $pages = scandir($pages_dir, 0);
      unset($pages[0], $pages[1]);
      //print_r ($pages);

    $p = $_GET['p'];

    if (in_array($p.'.inc.php',$pages)) {
      # code...
      include ($pages_dir.'/'.$p.'.inc.php');
    }else {
      echo "Pagina nao encontrada";
     }
      //echo $p;
    } else {
      include ($pages_dir.'/home.inc.php');
    }

    ?>
  </div>

    </main><!-- /.container -->


              <!-- Optional JavaScript -->
              <!-- jQuery first, then Popper.js, then Bootstrap JS -->
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <script src="custom.js"></script>
              </body>
              </html>
