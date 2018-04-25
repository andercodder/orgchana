$(function(){


// validation form reservas
$("#reservaBtn").click(function(){
  // reclamacõesBtn.disabled=true;
  $("#reservaForm").submit(function(e){
    var telMatch = /^\d{9}$/;
    var erro = "";

    if ($("#nome").val() == "") {
      erro += "O Campo Nome é obrigatorio Preencha<br>";

    }
    if ($("#email").val() == "") {
     erro += "O Campo de Email é obrigatorio Preencha-o<br>";

   }

    if ($("#tAlternativo").val() == "") {
      erro += "O Campo Telefone Alternativo é obrigatorio Preencha-o<br>";

    }
    if (!$("#tAlternativo").val().match(telMatch))  {
  		erro += "O Campo Nº Telefone Alternativo deve Ter apenas Nove numeros<br>";

  	}

    if ($("#partida").val() == "") {
      erro += "O Campo de partida é obrigatorio Preencha-o<br>";

    }
    if ($("#chegada").val() == "") {
      erro += "O Campo de Chegada é obrigatorio Preencha-o<br>";

    }
    if ($("#carro").val() == "") {
      erro += "O Campo Carros é obrigatorio Preencha-o<br>";

    }
    if ($("#data").val() == "") {
      erro += "O Campo Data é obrigatorio Preencha-o<br>";

    }
    if ($("#time").val() == "") {
      erro += "O Campo Hora é obrigatorio Preencha-o<br>";

    }
    if ($("#mensagem").val() == "") {
      erro += "O Campo mensagem é obrigatorio Preencha-o<br>";

    }
    if (erro != "") {
      $("#erro").html('<div class="alert alert-danger role=alert"><p><strong>Existem erros no seu formulario:</strong></p>' + erro + '</div>');
      return false;

    }else {
      return true;
    }
    event.preventDefault();
  });

})
})
</script>
<script type="text/javascript">
// form reclamacões
$("#enviarReclamacoesBtn").click(function(){
  $("#reclamacoesForm").submit(function(e){
     var erroRecl = "";

     if ($("#nomeReclamacoes").val() == "" ) {
       erroRecl += "o campo Nome esta vazio Preencha-o<br>";
     }
     if ($("#emailReclamacoes").val() == "" ) {
       erroRecl += "o campo Email esta vazio Preencha-o<br>";
     }
     if ($("#telefoneReclamacoes").val() == "" ) {
       erroRecl += "o campo Telefone esta vazio Preencha-o<br>";
     }
     if ($("#mensagemReclamacoes").val() == "" ) {
       erroRecl += "o campo Mensagem esta vazio Preencha-o<br>";
     }
     if (erroRecl != "") {
       $("#erroRecl").html('<div class="alert alert-danger role=alert"><p><strong>	Existem erros no seu formulario:</strong></p>' + erroRecl + '</div>');
       return false;

     }else {
      return true;
     }
     event.preventDefault();
  })

})
