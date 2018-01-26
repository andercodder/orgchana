<?php
  include_once 'connect.php';

  //selecionar dados
  $sql = "SELECT * FROM carros WHERE estado='livre'";
  $resultado = $con->query($sql);

  if ($resultado->num_rows > 0) {
    //saida dos dados
      while ($row = $resultado->fetch_assoc()) {
        echo "<button type='button' class='btn btn-success'> <img src='icon/icon.png'> .$row['id']. '</button><br>";
      echo "<br>";
        echo "id: " . $row["id"];
        echo "<br>";
        echo "state: " . $row["estado"];
        echo "<br>";
        echo "cor: " . $row["cor"];
      }

  }else {
    echo "sem resultados";
  }
  $con->close

 ?>
