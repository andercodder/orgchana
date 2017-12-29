<?php
/*using php to send email validation*/
include_once  'send_email/send_email_rent.php';
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="description" content="organizações Chana - Rent a car">
		<meta name="author" content="DSI - orgchana">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">


		<title>rent</title>
		<link rel="shortcut icon" href="img/favicon.png">

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">
		<style>
		.booking-form .car-type label {
			background: #14387E ;

		}

		.picker__header  {
			background-color:#14387E;
		}
		.picker__table th {
			background-color:#14387E;
		}
		.picker__button--today,.picker__button--close, .picker__button--clear{
			background-color:#14387E;

		}
		.picker__day--today{
			border: 1px solid #14387E;
		}
		.picker__day:hover{
			color:#14387E;
		}
		.picker__day picker__day--infocus{
			color:#14387E;
		}
		.picker__list li:hover{
			color:#14387E;
		}

		.fechar{
			text-align: right;
			margin-top: -40px;
		}
		</style>
	</head>

	<body>

        <!-- Header start -->
        <header class="header">
            <div class="top-bar">
                <div class="container">
                    <ul class="social-links">
                        <li><a href="https://web.facebook.com/orgchana/" target="_blank">Facebook</a></li>
                        <li><a href="https://twitter.com/Orgchana" target="_blank">Twitter</a></li>
                        <li><a href="http://linkedin.com">LinkedIn</a></li>
                        <li><a href="http://instagram.com">Instagram</a></li>
                    </ul>
                    <button id="phone-trigger" class="phone-trigger ion-android-call"></button>
                    <ul class="phones">
                        <li><a href="tel:225 200 300"><span>Call Center</span> 227 100 300</a></li>
                    </ul>
                </div>
            </div>
            <div id="nav-bar" class="nav-bar">
                <div class="container">

                    <a href="index.html" class="logo"><img src="img/logo.jpg" alt="Chana logo" /></a>

                    <button id="nav-trigger" class="nav-trigger ion-android-menu"></button>

										<nav class="main-nav">
												<ul>
														<li ><a href="index.html">Home</a></li>
														<li><a href="taxi.php">TÁXIS</a></li>
														<li class="active"><a href="rent.php">RENTACAR</a></li>
														<li><a href="veiculos.php">VEÍCULOS</a></li>
														<li><a href="oficina.php">OFICINA</a></li>
														<li><a href="pecas.html">PEÇAS</a></li>
														<li><a href="feirao.html">FEIRÃO</a></li>
														<li><a href="lobito.html">LOBITO</a></li>
														<li><a href="localizacao.html">LOCALIZAÇÃO</a></li>
														<li><a href="sobrenos.html">SOBRE NÓS</a>
																<ul>
																	<li></li>


																	<!-- <li><a href="blog.html">BLOG</a></li> -->

																</ul>
														</li>
												</ul>
										</nav>

                </div>
            </div>

            <svg height="20" width="2560" class="pattern">
            <defs>
            <pattern id="header-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect width="10" height="10" />
                <rect x="10" y="10" width="10" height="10" />
            </pattern>
            <mask id="header-mask" x="0" y="0" width="2560" height="20" >
                <rect x="0" y="0"  width="2560" height="20" />
            </mask>
            </defs>
            <rect x="0" y="0" width="2560" height="20" id="header-image" />
            </svg>

        </header>
        <!-- Header end -->
				<!-- slide -->

				<div class="content">

					<!-- Slider start -->
					<div class="slider owl-carousel">
						<div class="slide">
							<img src="img/sunny.jpg" alt="" class="slider-image" />
							<div class="slider-subtitle">Viaturas a partir de </div>
							<div class="slider-title"> 19.950 AOA! </div>
							<div class="slider-button"><a href="#reservas" class="btn btn-primary">FAÇA A SUA RESERVA</a></div>
						</div>
						<div class="slide">
							<img src="img/fmarca.jpg" alt="" class="slider-image" />
							<div class="slider-subtitle">Frota</div>
							<div class="slider-title">Multimarca!</div>
							<div class="slider-button"><a href="#reservas" class="btn btn-primary">FAÇA A SUA RESERVA</a></div>
						</div>
						<div class="slide">
							<img src="img/casamento.jpg" alt="" class="slider-image" />
							<div class="slider-subtitle">A Melhor viatura para o Seu</div>
							<div class="slider-title">CASAMENTO</div>
							<div class="slider-button"><a href="#reservas" class="btn btn-primary">FAÇA A SUA RESERVA</a></div>
						</div>
					</div>
					<!-- Slider end -->

				<!-- end of slide -->

		<!-- Content start -->
		<div class="content">

			<!-- Main start -->
			<section class="intro" id="reservas">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="title">
								<h1>Grandes Marcas</h1>
								<h6>Ao seu dispor</h6>
							</div>
							<p class="text-center"><big>Bem-vindo à Chana Rent. O maior stock de aluguer em Luanda. Qualidade aos melhores preços. Temos para si uma frota Multimarca, com Assistência técnic e Qualidade na Entrega</big></p>
							<hr class="blank">
						</div>
					</div>
					<form class="booking-form" name="sentMessage" id="contactForm" method="post">
						<div class="row">

							<div class="col-xs-6 col-sm-2 panel" data-panelid="panel1" value="19950" title="clique para preencher o valor">
								<fieldset class="car-type">
									<input type="checkbox" name="car-type" id="econo" />

									<label for="econo"><img src="icon/economico.png"  style="margin-top:-20px;"><p style="margin-top:-20px;"> económico </p> <p style="margin-top:-25px;">A partir 19.950 AKZ </p></label>
								</fieldset>
							</div>
							<div class="col-xs-6 col-sm-2 panel" data-panelid="panel2" value="36750" title="clique para preencher o valor">
								<fieldset class="car-type">
									<input type="checkbox" name="car-type" id="suv" class="panel" data-panelid="panel2" />
									<label for="suv"><img src="icon/suv.png" alt=""style="margin-top:-20px;"> <p style="margin-top:-20px;">  SUV </p> <p style="margin-top:-25px;">A partir 36.750 AKZ </p> </label>
								</fieldset>
							</div>
							<div class="col-xs-6 col-sm-2 panel" data-panelid="panel3" value="36750" title="clique para preencher o valor">
								<fieldset class="car-type">
									<input type="checkbox" name="car-type" id="minivan" class="panel" data-panelid="panel3" value="57750" />
									<label for="minivan"><img src="icon/pick-up.png" alt=""style="margin-top:-20px;"> <p style="margin-top:-20px;" >Pick Up</p><p style="margin-top:-25px;"> A partir 36.750 AKZ </p> </label>
								</fieldset>
							</div>
							<div class="col-xs-6 col-sm-2 panel" data-panelid="panel4" value="57750" title="clique para preencher o valor">
								<fieldset class="car-type">
									<input type="checkbox" name="car-type" id="wagon" class="panel" data-panelid="panel4" />
									<label for="wagon"><img src="icon/suv-executivo.png" alt=""style="margin-top:-20px;"> <p style="margin-top:-20px;"> Suv Executivo </p> <p style="margin-top:-25px;"> A partir 57.750 AKZ </p>  </label>
								</fieldset>
							</div>
							<div class="col-xs-6 col-sm-2 panel" data-panelid="panel5" value="68250" title="clique para preencher o valor">
								<fieldset class="car-type">
									<input type="checkbox" name="car-type" id="limousine" class="panel" data-panelid="panel5" />
									<label for="limousine"><img src="icon/executivo.png" alt=""style="margin-top:-20px;"> <p style="margin-top:-20px;">Executivo</p> <p style="margin-top:-25px;"> A partir 68.250 AKZ </p> </label>
								</fieldset>
							</div>

							<div class="col-xs-6 col-sm-2 panel" data-panelid="panel6" value="57750" title="clique para preencher o valor">
								<fieldset class="car-type">
									<input type="checkbox" name="car-type" id="classic" class="panel" data-panelid="panel6" />
									<label for="classic"><img src="icon/classico.png" alt=""style="margin-top:-20px;"> <p style="margin-top:-20px;"> Clássico </p> <p style="margin-top:-25px;"> A partir 57.750 AKZ </p> </label>
								</fieldset>
							</div>
						</div>

								<!-- /******************/  Previsão do valor -->
								<h2 style="text-align:center;">Simule o Valor a Pagar</h2>

								<div class="row">
									<br>
								<div class="col-sm-12">
										<div class="row">

								<div id="resultado">
								</div>
								<div class="col-sm-6">
									<fieldset>
										Valor Da Categoria <input type="number" name="valorDaCategoria" id="valorDaCategoria" placeholder="valor Da Categoria" />
									</fieldset></div>
										<div class="col-sm-6">
										<fieldset>
											Numero de Dias<input type="number" name="numeroDeDias" id="numeroDeDias" placeholder="numero De Dias" />
										</fieldset></div>

								</div>


								<div class="row">
									<div class="col-sm-12 text-center">
										<input type="button" class="btn btn-primary" id="prevButton" value="Previsão" >
									</div>
								</div>
								<br>
								<!-- /*****************/ -->
						<div class="row">
							<div id="erro">
				        <?php echo $erro.$sucessosms; ?>
				      </div>
							<h2 style="text-align:center;">Preencha o formulario</h2>
							<div class="col-sm-3">
								<fieldset>
									<input type="text" name="nome" placeholder="Nome *" required="Preencha o Campo nome." id="nome"/>
								</fieldset>
								<fieldset>
									<input type="email" name="email" placeholder="Email *" required data-validation-required-message="Preencha o Campo Email." id="email" />
								</fieldset>
							</div>
							<div class="col-sm-3">
								<fieldset>
									<input type="text" name="marca" placeholder="Valor da Categoria *" required data-validation-required-message="Preencha o Campo Marca do carro." id="marca"/>
								</fieldset>
								<fieldset>
										<input type="text" name="time" placeholder="Hora do aluguel *" class="timepicker" required  id="time"/>
								</fieldset>
							</div>
							<div class="col-sm-3">
								<fieldset>
									<input type="text" name="date" placeholder="Data da inicial Reserva *" class="datepicker" required data-validation-required-message="Preencha o Campo Data Inicial da Reserva." id="date"/>
								</fieldset>
								<fieldset required>
									<input type="text" name="dateFinal" placeholder="Data Final da Reserva *" class="datepicker" required data-validation-required-message="Preencha o Campo Data Final da Reserva ." id="dateFinal"/>
								</fieldset>
							</div>
							<div class="col-sm-3">
								<fieldset>
									<select  id="carros">
										<option name="1" value="1" selected>1</option>
										<option name="2" value="2">2</option>
										<option name="3" value="3">3</option>
										<option name="4" value="4">4</option>
									</select>
								</fieldset>
									<fieldset>
										<input type="number" name="numero" placeholder="Nº Telefone" required="este campo é obrigatorio" id="numero" />
									</fieldset>
								</div>

						<div class="row">
							<div class="col-sm-12">
								<fieldset>
									<textarea name="mensagem" placeholder="Mensagem" id="mensagem"></textarea>
								</fieldset>
							</div>

						<div class="row">
							<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-primary" style="margin-bottom:25px;">FAÇA A SUA RESERVA</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</section>
			<!--Promo end -->
		</div>

		<!-- Content end -->

		<!-- Footer start -->
		<footer class="footer">

			<svg height="20" width="2560" class="pattern">
				<defs>
					<pattern id="footer-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
						<rect width="10" height="10" />
						<rect x="10" y="10" width="10" height="10" />
					</pattern>
					<mask id="footer-mask" x="0" y="0" width="2560" height="20" >
						<rect x="0" y="0"  width="2560" height="20" />
					</mask>
				</defs>
				<rect x="0" y="0" width="2560" height="20" id="footer-image" />
			</svg>

			<div class="widgets">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="widget">
								<h6>Sobre nós</h6>
								<p>Constitui a missão das Organizações Chana ser líder a nível nacional na comercialização de automóveis multimarcas, novos e de retoma, prestar serviços atendendo a todo o consumidor de automóveis, aprimorando permanentemente a nossa equipe de colaboradores, com foco na satisfação de nossos clientes, com comprometimento no relacionamento comercial e no resultado para todos os envolvidos.</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="widget">

							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="widget">
								<h6>Contact</h6>
								<ul class="contact">
									<li class="hotline"><a href="tel:+244 991 001 000">+244 991 001 000</a></li>
									<li class="phone"><a href="tel:+244 913 767 901">+244 913 767 901</a></li>
									<li class="email"><a href="mailto:rentacar@orgchana.com">rentacar@orgchana.com</a></li>
									<li class="address">Estrada Lar do Patriota<br>Luanda</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="credits">
				<div class="container">
					<div class="copyright">&copy; Rent a car - Orgchana </div>
					<ul class="social-links">
						<li><a href="https://web.facebook.com/orgchana/" target="_blank">Facebook</a></li>
						<li><a href="https://twitter.com/Orgchana">Twitter</a></li>
						<li><a href="htp://linkedin.com">LinkedIn</a></li>
						<li><a href="htp://instagram.com">Instagram</a></li>
					</ul>
				</div>
			</div>
		</footer>
		<!-- Footer end -->

		<!-- Javascripts start -->

		<script src="js/jquery-3.1.1.js"></script>
		 <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/picker.js"></script>
		<script src="js/picker.date.js"></script>
		<script src="js/picker.time.js"></script>
		<script src="js/uber-google-maps.js"></script>
		<script src="js/settings.js"></script>

		<script type="text/javascript">
		// pure js to find to  simulate
		//var previsaoDoValor;
		//var resultado = "";
		// document.getElementById("prevButton").onclick = pagar;
		// function pagar(previsaoDoValor){
		// 	var valorDaCategoria = parseInt(document.getElementById("valorDaCategoria").value);
		// 	var numeroDeDias = parseInt(document.getElementById("numeroDeDias").value);
		// 	// var carros = parseInt(document.getElementById("carros").value);
		//
		//
		// 	if (typeof valorDaCategoria && numeroDeDias && carros !== 'null'){
		//
		// 	//var taxaDeAluguer = 1;
		// 	 previsaoDoValor = valorDaCategoria * numeroDeDias;
		// 		if(typeof  previsaoDoValor !== 'undefined'){
		//
		// 			//alert("O valor da Previsão  : " + previsaoDoValor);
		// 			//class="close" data-dismiss="alert" aria-label="close"></a>
		// 			resultado = "o valor da previsão sem caução incluida é : " + previsaoDoValor;
		// 			document.getElementById("resultado").innerHTML = "<div class='alert alert-success alert-dismissable' role='alert' class='close' aria-label='Close'><p><strong>" + resultado + "</strong></p><a href='javascript:void(0)'><span class='close fechar'>&times;</span></a></div>"
		// 			return previsaoDoValor;
		// 		}
		//
		// 	}else {
		// 		alert("Dados errados");
		// 		document.getElementById("resultado").innerHTML = "<div class='alert alert-danger role=alert'><p><strong>Dados errados</strong></p></strong></p> <a href='javascript:void(0)' ><span class='close fechar' >&times;</span></a></div>";
		//
		// 	}
		// 	//return pagar();
		//
		// }

		/*********************************************making with jquery***************************************/
			$(function(){
				var valorDaCategoria = $("#valorDaCategoria").val();

				$("#prevButton").click(function(){
					var valorDaCategoria = $("#valorDaCategoria").val();
					var numeroDeDias =  $("#numeroDeDias").val();
					if(valorDaCategoria === "null" && numeroDeDias == "null" && valorDaCategoria == "" && numeroDeDias == "" ) {
						// if variable iqual zero when clicked the button make action for it
						alert("dados errados");

					}
					else if  (valorDaCategoria !== "null" && numeroDeDias !== "null" && valorDaCategoria !== "" && numeroDeDias !== "" ) {
               var resultado = valorDaCategoria * numeroDeDias;
							 $("#resultado").html("<div class='alert alert-success alert-dismissable' role='alert' class='close' aria-label='Close'><p><strong> O valor Simulado sem caução incluida" + resultado + "</strong></p><a href='javascript:void(0)'><span class='close fechar'>&times;</span></a></div>")

							alert(valorDaCategoria);
							alert(numeroDeDias);
							alert(resultado);

					}
					// alert(valorDaCategoria);
					// alert($("#valorDaCategoria").val());
					// console.log(valorDaCategoria);
				});
			});

						//alert(valorDaCategoria);

		/********************************************end of simular valor jquery******************************/

</script>
<script type="text/javascript">

// validation form
$("form").submit(function(e){

  var erro = "";

  if ($("#nome").val() == "") {
    erro += "O Campo Nome é obrigatorio Preencha-o<br>";

  }
  if ($("#email").val() == "") {
    erro += "O Campo de Email é obrigatorio Preencha-o<br>";

  }
	if ($("#marca").val() == "") {
    erro += "O Campo Marca é obrigatorio Preencha-o<br>";

  }
  if ($("#date").val() == "") {
    erro += "O Campo Data Inicial da Reserva  é obrigatorio Preencha-o<br>";

  }
	if ($("#dateFinal").val() == "") {
    erro += "O Campo data Final da Reserva Numero é obrigatorio Preencha-o<br>";

  }
	if ($("#carro").val() == "") {
    erro += "O Campo Carros é obrigatorio Preencha-o<br>";

  }
	if ($("#time").val() == "") {
    erro += "O Campo Hora do Aluguel é obrigatorio Preencha-o<br>";

  }
	if ($("#numero").val() == "") {
    erro += "O Campo Nº Telefone é obrigatorio Preencha-o<br>";

  }
  if ($("#mensagem").val() == "") {
    erro += "O Campo mensagem é obrigatorio Preencha-o<br>";

  }
  if (erro != "") {
    $("#erro").html('<div class="alert alert-danger role=alert"><p><strong>Existem erros no seu formulario:</strong></p>' + erro + '  <a href="javascript:void(0)" class="close">&times;</a></div>');
    return false;
  }else {
    return true;
  }
})
		</script>
		<!-- Javascripts end -->

<script >
	$(function(){
    	$('.panel').on('click', function(){
			var panelId = $(this).attr('data-panelid')
				var value = $(this).attr('value');
				$('#'+panelId).toggle();
							$('#valorDaCategoria').val(value);
							$('#marca').val(value);

			//alert(value);

		//	alert(panelId);
		});
	});

	/*TOOLTIP*/
	 $( document ).tooltip({
  show: { effect: "shake", duration: 600 },
	position: { my: "top", at: "top-30" }
});
	// $(document).ready(function(){
	//         tooltip();
	//     });
/***********************************************************************/
	// autoplay owl
	/*AUTOPLAY FOR OWL */
	// smartSpeed: 1000,
	var owl = $('.owl-carousel');
	owl.owlCarousel({
	    items:1,
			dots: false,
	    loop:true,
	    margin:10,
	    autoplay:true,
			navText: [
					"<i class='ion-ios-arrow-left'></i>",
					"<i class='ion-ios-arrow-right'></i>"
			],
	    autoplayTimeout:5000,
			autoplaySpeed: 3000,
			smartSpeed: 2000,
	    autoplayHoverPause:true
	});
	$('.play').on('click',function(){
	    owl.trigger('play.owl.autoplay',[5000])
	})
	$('.stop').on('click',function(){
	    owl.trigger('stop.owl.autoplay')
	})

/**************************************************************************/
//hide the results on click
$(".alert").on('click', function(){
	alert("fechar");
	$(".alert").fadeOut();
});
</script>

	</body>
</html>
