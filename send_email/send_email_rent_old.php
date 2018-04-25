<?php
$erro = "";
$sucessosms = "";
if ($_POST) {
  if (!$_POST['email']) {
    $erro .= "O campo de email é obrigatorio preencha-o .<br>";
  }
  if (!$_POST['nome']) {
    $erro .= "O campo nome é obrigatorio preencha-o .<br>";
  }
  // if (!$_POST['numero']) {
  //   $erro .= "O campo numero é obrigatorio preencha-o .<br>";
  // }
  if (!$_POST['mensagem']) {
    $erro .= "O campo de mensagem é obrigatorio preencha-o .<br>";
  }
   if (!$_POST['marca']) {
      $erro .= "O campo Marca do Carro é obrigatorio preencha-o .<br>";
   }
   if (!$_POST['carros']) {
     $erro .= "O campo numero é obrigatorio preencha-o .<br>";
   }
   if (!$_POST['date']) {
     $erro .= "O campo Data Inicial da Reserva é obrigatorio preencha-o .<br>";
   }
   if (!$_POST['dateFinal']) {
    $erro .= "O campo Data FInal da Reserva é obrigatorio preencha-o .<br>";
  }
   if (!$_POST['time']) {
    $erro .= "O campo Hora do Aluguel da Reserva é obrigatorio preencha-o .<br>";
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
    $numero = " Numero de Telefone do Sr.: " .$_POST['nome']. " : " .$_POST['numero'];
    $marca = " Pretendo alugar uma viatura de marca: " .$_POST['marca'];
    $carros = " Quantidade de carros : " .$_POST['carros'];
    $date = "Reservar o carro a partir da data : " .$_POST['date'];
    $dateFinal = "Data Final da Reserva: " .$_POST['dateFinal'];
    $time = "A Reserva começa a partir das " .$_POST['time']. " Horas";

    $subject = $_POST['mensagem'];
    $mailBody = "Nome: $nome\n $numero\n $marca\n $carros\n $date\n $dateFinal\n $time";
    if(mail($emailTo, $headers, $mailBody, $subject)){
      $sucessosms = '<div class="alert alert-success alert-dismissable" role="alert">
      <strong>A sua mensagem foi enviada com sucesso</strong>
      <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      </div>';
    }
    else {
      $erro = '<div class=alert alert-danger role="alert">A sua mensagem não pode ser enviada </div>';
    }
  }
}
?>
