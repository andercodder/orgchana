<?php
/* dados do servidor */
  $server = "localhost";
  $username = "chana";
  $password = "";
  $db = "parque";

// criar conexão
  $con = new mysqli($server, $username, $password, $db);

  // verificar conexão
  if ($con->connect_error) {
    die("conexão falhada: " . $con->connect_error);
  }
//  echo "conexão bem sucedida ";

 ?>
