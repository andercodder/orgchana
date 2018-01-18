<?php
/*using php to send email validation*/
include_once 'send_email/send_email_veiculos.php';
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
		<meta name="description" content="Organizações Chana - Blog">
		<meta name="author" content="DSI - orgchana">
		<title>chanauto</title>
		<link rel="shortcut icon" href="img/favicon.png">

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>

        <!-- Header start -->
        <header class="header">
            <div class="top-bar">
                <div class="container">
                    <ul class="social-links">
                        <li><a href="http://facebook.com">Facebook</a></li>
                        <li><a href="http://twitter.com">Twitter</a></li>
                        <li><a href="http://linkedin.com">LinkedIn</a></li>
                        <li><a href="http://instagram.com">Instagram</a></li>
                    </ul>
                    <button id="phone-trigger" class="phone-trigger ion-android-call"></button>
                    <ul class="phones">
                        <li><a href="255 200 300"><span> Call Center </span> 227 100 300 </a></li>
                    </ul>
                </div>
            </div>
            <div id="nav-bar" class="nav-bar">
                <div class="container">
                    <a href="index.html" class="logo"><img src="img/logo.jpg" alt="veiculos orgChana" /></a>
                    <button id="nav-trigger" class="nav-trigger ion-android-menu"></button>
										<nav class="main-nav">
												<ul>
														<li ><a href="index.html">HOME</a></li>
														<li><a href="taxi.php">TÁXIS</a></li>
														<li><a href="rent.php">RENTACAR</a></li>
														<li class="active"><a href="veiculos.php">VEÍCULOS</a></li>
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

		<!-- Content start -->
		<div class="content">

			<!-- Main start -->
			<section class="intro">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="title">
								<h1>NOVOS</h1>
								<!--<h6>See what we drive</h6>-->
							</div>
							<p class="text-center"><big>Seja qual for a marca que pretende, o carro dos seus sonhos espera por si na Chana! automóveis multimarcas em stock. Entrega imediata Serviço completo de Assistência e Garantia pós-venda..</big></p>
							<hr class="blank">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<ul class="cars inline three-columns">

								<li>
									<img src="img/kicks.jpg" alt="" />
									<h6>Nissan</h6>
									<p>Kicks</p>
								</li>
								<li>
									<img src="img/lexus.jpg" alt="" />
									<h6>Lexus</h6>
									<p>Lexus</p>
								</li>
								<li>
									<img src="img/rio.jpg" alt="" />
									<h6>KIA</h6>
									<p>Rio</p>
								</li>
								<li>
									<img src="img/toyota.jpg" alt="" />
									<h6>Toyota</h6>
									<p>Land Cruiser</p>
								</li>

								<li>
									<img src="img/kia.jpg" alt="" />
									<h6>Kia</h6>
									<p>Sportage</p>
								</li>

								<li>
									<img src="img/bmw.jpg" alt="" />
									<h6>BMW</h6>
									<p>X5</p>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</section>
			<!--Main end -->
			<!-- Main start -->

		<!-- Content end -->

		<section class="booking">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h2>FALE CONNOSCO</h2>
							<h6>Descreve aqui a sua necessidade</h6>
						</div>
					</div>
				</div>
				<div id="erro">
					<?php echo $erro.$sucessosms; ?>
				</div>
				<form class="booking-form" name="sentMessage" id="contactForm" method="post">
					<div class="row">
						<div class="col-sm-4">
							<fieldset>
								<input type="text" name="nome" id="nome" placeholder="Nome" />
							</fieldset>
						</div>
						<div class="col-sm-4">
							<fieldset>
								<input type="number" name="telefone" id="telefone" placeholder="Telefone" />
							</fieldset>
						</div>
						<div class="col-sm-4">
							<fieldset>
								<input type="email" name="email" id="email" placeholder="Email" />
							</fieldset>
						</div>
					<div class="row">
						<div class="col-sm-12">
							<fieldset>
								<textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
							</fieldset>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<button class="btn btn-primary">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</section>

			<div class="credits">
				<div class="container">
					<div class="copyright">&copy; Chana Automóveis </div>
					<ul class="social-links">
						<li><a href="htp://facebook.com">Facebook</a></li>
						<li><a href="htp://twitter.com">Twitter</a></li>
						<li><a href="htp://linkedin.com">LinkedIn</a></li>
						<li><a href="htp://instagram.com">Instagram</a></li>
					</ul>
				</div>
			</div>
		</footer>
		<!-- Footer end -->

		<!-- Javascripts start -->
		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/picker.js"></script>
		<script src="js/picker.date.js"></script>
		<script src="js/picker.time.js"></script>
		<script src="js/uber-google-maps.js"></script>
		<script src="js/settings.js"></script>

		<script>

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


</script>
		<!-- Javascripts end -->

	</body>
</html>
