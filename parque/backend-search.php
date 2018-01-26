<?=
include_once 'connect.php';

if (isset($_REQUEST['term'])) {
  //prepare a select statement
  $sql = "SELECT * FROM carros WHERE fornecedor LIKE ?";

  if ($stmt = mysqli_prepare($con, $sql)) {
    # code...
    // Bind variables to the prepared statement as pg_parameter_
    mysqli_stmt_bind_param($stmt, "s", $param_term);

    //set pg_parameter
    $param_term = $REQUEST['term'] . '%';

    // attempt to execute the prepared statementif
    if (mysqli_stmt_execute($stmt)) {
      $result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
  # code...

      //check number of rows as an associative ArrayAccess
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<P>" .$row['fornecedor']. "</p>";
       }
      }else {
        echo "nome não encontrado";
      }
      # code...
    }else {
      echo "ERRO: erro na base de dados $sql.";
      mysqli_error($link);
    }
  }
  mysqli_stmt_close($stmt);
}
mysqli_close($con);
?>
