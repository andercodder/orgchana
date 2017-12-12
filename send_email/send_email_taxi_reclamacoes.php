<?php
$erroRecl = "";
$sucessosmsRecl = "";
if (isset($_POST['enviarReclamacoes'])) {
if ($_POST) {
  if (!$_POST['nomeReclamacoes']) {
    $erroRecl .= "O campo Nome é obrigatorio preencha-o .<br>";
  }
  if (!$_POST['emailReclamacoes']) {
    $erroRecl .= "O campo de Email é obrigatorio preencha-o .<br>";
  }
  if (!$_POST['telefoneReclamacoes']) {
     $erroRecl .= "O campo Telefone do Carro é obrigatorio preencha-o .<br>";
  }

  if (!$_POST['mensagemReclamacoes']) {
    $erroRecl .= "O campo de Mensagem é obrigatorio preencha-o .<br>";
  }
   //verificar o email
  if (!$_POST['emailReclamacoes'] && filter_var($_POST["emailReclamacoes"], FILTER_VALIDATE_EMAIL) === false){
    $erroRecl .= "O seu endereço de Email é invalido .<br>";
  }
  //verificar se Existem erros na variavel erro
  if ($erroRecl != "") {
    $erroRecl = '<div class="alert alert-danger" role="alert"><p>Existem erros no seu formulario</p>' . $erroRecl . '<div>';
  }
  /*se a conexão estiver boa enviar o email */
  else {
    $emailTo = "alertas.chana@gmail.com";
    $nome = $_POST['nomeReclamacoes'];
    $headers = "From:".$_POST['emailReclamacoes'];
    $telefone = " Numero de Telefone do Sr.: " .$_POST['nomeReclamacoes']. " : " .$_POST['telefoneReclamacoes'];

    $subject = "Mensagem de Reclamação  Pagina Meu Taxi " . $_POST['mensagemReclamacoes'];
    $mailBody = "Nome: $nome\n $telefone\n";
    if(mail($emailTo, $headers, $mailBody, $subject)){
      $sucessosmsRecl = '<div class="alert alert-success alert-dismissable" role="alert">
      <strong>A sua mensagem foi enviada com sucesso</strong>
      <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      </div>';
    }
    else {
      $erroRecl = '<div class=alert alert-danger role="alert">A sua mensagem não pode ser enviada </div>';
    }
  }
}  
}
?>
