<?php
// ini_set('display_errors', 'On');
// error_reporting(E_ALL);
$erro = "";
$sucessosms = "";
if (isset($_POST['reservar'])) {
  if (!$_POST['nome']) {
    $erro .= "O campo nome é obrigatorio preencha-o .<br>";
  }
  if (!$_POST['email']) {
    $erro .= "O campo de email é obrigatorio preencha-o .<br>";
  }
  if (!$_POST['telefone']) {
     $erro .= "O campo Nº Telefone  é obrigatorio preencha-o .<br>";
  }
  if (!$_POST['tAlternativo']) {
    $erro .= "O campo Telefone Alternativo é obrigatorio preencha-o .<br>";
  }

   if (!$_POST['partida']) {
     $erro .= "O campo local de Partida é obrigatorio preencha-o .<br>";
   }
   if (!$_POST['chegada']) {
    $erro .= "O campo Local de Destino é obrigatorio preencha-o .<br>";
   }

   if (!$_POST['data']) {
     $erro .= "O campo Data da Reserva é obrigatorio preencha-o .<br>";
   }
   if (!$_POST['hora']) {
    $erro .= "O campo Data FInal da Reserva é obrigatorio preencha-o .<br>";
  }
  if (!$_POST['mensagem']) {
    $erro .= "O campo de mensagem é obrigatorio preencha-o .<br>";
  }
   //verificar o email
  if (!$_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
    $erro .= "O seu endereço de email é invalido .<br>";
  }
  //verificar se Existem erros na variavel erro
  if ($erro != "") {
    $erro = '<div class="alert alert-danger" role="alert"><p>Existem erros no seu formulario, corriga-os e tente de novo</p>' . $erro . '<div>';
  }

  /*se a conexão estiver boa enviar o email */
  else {
    $emailTo = "alertas.chana@gmail.com";
    $nome = $_POST['nome'];
    $headers = "From:".$_POST['email'];
    $telefone = " Numero de Telefone do Sr.: " .$_POST['nome']. " : " .$_POST['telefone'];
    $tAlternativo = " O Telefone Alternatvo é : " .$_POST['tAlternativo'];
    $partida = " Local de Partida : " .$_POST['partida'];
    $chegada = "Local de chegada : " .$_POST['chegada'];
    $data = "Data Final da Reserva: " .$_POST['data'];
    $hora = "A Reserva começa a partir das " .$_POST['hora']. " Horas";
    $subject = $_POST['mensagem'];
    $mailBody = "Nome: $nome\n $telefone\n $tAlternativo\n $partida\n $chegada\n $data\n $hora";
    if(mail($emailTo, $headers, $mailBody, $subject)){
      $sucessosms = '<div class="alert alert-success alert-dismissable" role="alert">
      <strong>A sua mensagem foi enviada com sucesso</strong>
      <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      </div>';
    }

    else {
      $erro = '<div class=alert alert-danger role="alert">A sua mensagem não pode ser enviada 1</div>';
    }
  }
}


?>
