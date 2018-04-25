<?php
/*using php to send email validation*/
include_once 'send_email/send_email_oficina.php';
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
		<meta name="description" content="organizacoes chana - oficina">
		<meta name="author" content="DSI - orgchana">
		<title>oficina</title>
		<link rel="shortcut icon" href="img/favicon.png">

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">

		<style>
		.icon-circle {
				border: 2px solid #14387E;

		}
		section {
 padding: 0px 0;
}
		</style>
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
                        <li><a href="tel:225 200 300"><span>CallCenter</span> 227 100 300</a></li>
                    </ul>
                </div>
            </div>
            <div id="nav-bar" class="nav-bar">
                <div class="container">
                    <a href="index.html" class="logo"><img src="img/logo.jpg" alt="Chana Logo" /></a>
                    <button id="nav-trigger" class="nav-trigger ion-android-menu"></button>
										<nav class="main-nav">
												<ul>
														<li><a href="index.html">HOME</a></li>
														<li><a href="taxi.php">TÁXIS</a></li>
														<li><a href="rent.php">RENTACAR</a></li>
														<li><a href="veiculos.php">VEÍCULOS</a></li>
														<li class="active"><a href="oficina.php">OFICINA</a></li>
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
								<h2>Oficina</h2>
								<h6>Auto</h6>
							</div>
							<p class="text-center"><big>Apaixonados por mecânica, encaramos sempre qualquer avaria como um novo desafio e devolvemos ao seu veículo o desempenho e a afinação do primeiro dia.</big></p>
							<hr class="blank">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6 col-sm-4 col-md-2 text-center">
							<p><i class="icon-car-check icon-circle icon-big"></i></p>
							<h6>Inspecção</h6>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 text-center">
							<p><i class="icon-oil-gauge icon-circle icon-big"></i></p>
							<h6>Filtros</h6>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 text-center">
							<p><i class="icon-signal-warning icon-circle icon-big"></i></p>
							<h6>Travões</h6>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 text-center">
							<p><i class="icon-car-battery icon-circle icon-big"></i></p>
							<h6>Bateria</h6>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 text-center">
							<p><i class="icon-gearbox icon-circle icon-big"></i></p>
							<h6>Caixa</h6>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2 text-center">
							<p><i class="icon-headlight-low icon-circle icon-big"></i></p>
							<h6>Luzes</h6>
  					</div>
					</div>

			<!--Garage map end -->

			<!-- fotos -->

			<section class="intro">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="title">
								<h1>Oficina Patriota</h1>
								<!--<h6>See what we drive</h6>-->
							</div>
							<p class="text-center"><big>Serviços Rápidos. Inspecções, Alinhamento do Direcção, Manutenções Preventivas.</big></p>
							<hr class="blank">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<ul class="cars inline three-columns">
								<li>
									<img src="img/recepcao5.jpg" alt="" />
									<h6>Recepção</h6>
								</li>
								<li>
									<img src="img/calibragem.jpg" alt="" />
									<h6>Calibragem</h6>
								</li>
								<li>
									<img src="img/oficina_revisao.jpg" style="height:280px;" alt=""/>
									<h6>Revisão</h6>
								</li>
								<li>
									<img src="img/oficina_armazem.jpg" alt="" />
									<h6>Armazém de Peças</h6>
									</li>

								<li>
									<img src="img/oficina_mecanica.jpg" alt="" />
									<h6>Mecânica</h6>
								</li>
								<li>
									<img src="img/oficina_alinhamento.jpg" alt="" />
									<h6>Alinhamento</h6>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</section>

			<!--end of fotos -->

			<!-- Booking start -->
			<section class="booking">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="title">
								<h2>MARCAÇÕES</h2>
								<h6>Descreve aqui a sua necessidade</h6>
							</div>
						</div>
					</div>
					<div id="erro">
						<?php echo $erro.$sucessosms; ?>
					</div>
					<form class="booking-form" name="sentMessage" id="contactForm" method="post">
						<div class="row">
							<div class="col-sm-3">
								<fieldset>
									<input type="text" name="nome" id="nome" placeholder="Nome" />
								</fieldset>
							</div>
							<div class="col-sm-3">
								<fieldset>
									<input type="number" name="telefone" id="telefone" placeholder="telefone" />
								</fieldset>
							</div>
							<div class="col-sm-3">
								<fieldset>
									<input type="email" name="email" id="email" placeholder="Email" />
								</fieldset>
							</div>
							<div class="col-sm-3">
								<fieldset>
									<input type="text" name="data" id="data" placeholder="Data" class="datepicker" />
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<fieldset>
									<textarea name="mensagem" placeholder="Mensagem"></textarea>
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<button class="btn btn-primary">Marcar</button>  <p><br></p>
							</div>
						</div>
					</form>
				</div>
			</section>
			<!-- Booking end -->

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
								<h6>Produtos e Serviços</h6>
								<p>Para que esteja sempre descansado quanto ao estado de saúde do seu veículo, detectamos qualquer problema e aconselhamos as melhores soluções.</p>
								<p>Supere os obstáculos do dia-a-dia e encontre a suavidade e o conforto que procura na sua condução com os melhores equipamentos do mercado.</p>
								<p>Caso o seu veículo avarie, temos uma frota de musculados reboques, prontos para lhe dar uma boleia, 24 horas por dia, 7 dias por semana.</p>
								<p>Dispomos de todo o tipo de soluções luminosas para que veja bem o seu caminho e seja sempre bem visto por todos os que se cruzam consigo. .</p>

							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="widget">

								</ul>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="widget">
								<h6>Contactos</h6>
								<ul class="contact">
									<li class="hotline"><a href="tel:225 100 300">227 100 300</a></li>
									<li class="phone"><a href="tel:923 291 935"> 923 291 935</a></li>
									<li class="email"><a href="#">callcenter@orgchana.com</a></li>
									<li class="address">Estrada do Lar do Patriota<br>Luanda</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="credits">
				<div class="container">
					<div class="copyright">&copy; Serviço Pós Venda </div>
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
    $(function() {
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
			})
    });
</script>
		<!-- Javascripts end -->

	</body>
</html>
