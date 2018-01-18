
		// validation form
		$("form").submit(function(e){
			var telMatch = /^\d{9}$/;
		  var erro = "";

		  if ($("#nome").val() == "") {
		    erro += "O Campo Nome é obrigatorio Preencha-o<br>";

		  }
			if ($("#telefone").val() == "")  {
		    erro += "O Campo Nº Telefone é obrigatorio Preencha-o<br>";

		  }
			if (!$("#telefone").val().match(telMatch))  {
		    erro += "O Campo Nº Telefone deve Ter apenas Nove numeros<br>";

		  }

		  if ($("#email").val() == "") {
		    erro += "O Campo de Email é obrigatorio Preencha-o<br>";

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
		});
