		<?php
		/*using php to send email validation*/

 	// 	ini_set('display_errors', 'On');
    // error_reporting(E_ALL);

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
		<meta name="description" content="meu taxi">
		<meta name="author" content="DSI - orgchana">
		<title>meuTAXI</title>
		<link rel="shortcut icon" href="img/logo.svg">


		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">

						<!--My Style-->
						<style>
						.header .top-bar {
								background: #000000 !important;
								color: #ffffff;
						}
						.pattern #header-image {
				        stroke: none;
				        fill: #ffce00 !important;
				         mask: url(#header-mask) !important;

				    }
						.header .nav-bar {
		      background: #ffce00 !important;
		  }
			.social-links li a {
						color: #ffce00 !important;

			}
			.header .phone-trigger {
				background: #ffce00 !important;
					color: #ffce00 !important;
			}

			.phones li a span {
					color: #ffce00 !important; //changed
			}
			.main-nav ul li a,
			.main-nav ul li a:link,
			.main-nav ul li a:focus,
			.main-nav ul li a:visited {
					color: #000000 !important; //changed

			}
			.main-nav ul li.active a {
					color: #FFFFFF !important;
			}
			.main-nav ul li ul {
					background: #000000 !important;
				}
				/* changing the color of the drop down link to white */
				.main-nav ul li ul li a,
				.main-nav ul li ul li a:link,
				.main-nav ul li ul li a:focus,
				.main-nav ul li ul li a:visited {
						color: #ffffff !important;
					}
					/* changing the color of the drop down link on hover to yellow  */
					.main-nav ul li ul li a:hover,
					.main-nav ul li ul li a:link:hover,
					.main-nav ul li ul li a:focus:hover,
					.main-nav ul li ul li a:visited:hover {
							color: #ffce00 !important;
					}

					/*COLOR ON HOVER */
					.main-nav ul li a:before,
					.main-nav ul li a:link:before,
					.main-nav ul li a:focus:before,
					.main-nav ul li a:visited:before {
							background: #ffffff;
							content: "";
							display: block;
							height: 2px;
							left: 50%;
							position: absolute;
							top: 20px;
							width: 0;
							transform: translateX(-50%);
							-moz-transform: translateX(-50%);
							-webkit-transform: translateX(-50%);
							-o-transform: translateX(-50%);
							transition: all 0.3s ease;
							-moz-transition: all 0.3s ease;
							-webkit-transition: all 0.3s ease;
							-o-transition: all 0.3s ease;
					}
					.main-nav ul li a:hover:before {
							width: 100%;
					}

					.main-nav ul li.active a {
							color: #14387E;
					}

					/* END OF ON HOVER*/

					/* changing buttons color in slider */
					.btn.btn-primary {
							background: #ffce00 !important;
							border: #ffce00 !important;
							color: #000000;
					}

						.btn.btn-primary:hover {
								background:#e6b900 !important;
								border: #e6b900 !important;
						}
						#ligou{
							color: red;
						}
						#chegou{
							color: #ffce00;
						}
						.title h6 {
								color: #000000 !important;
								margin: 0.5em 0 0;
						}
						.title:before {
								background: #000000 !important;
							}
							/*adding square above the footer */
							.pattern #footer-image {
					        stroke: none;
					        fill: #000;
					        mask: url(#footer-mask);
					    }
							/* chaging links color in footer*/
							a:link,
						  a:focus,
						  a:visited {
						      color:#ffce00!important; /*changed*/

						  }
							a:hover {
									color: #FFFFFF !important; /*changed*/
							}
							/*change color on button reservas */
							.btn.btn-danger {
									background: #FF0000 !important;
									border: #FF0000!important;
									color: #000000;
							}
							input[type=text]:focus,
					    input[type=email]:focus,
					    input[type=date]:focus,
					    input[type=time]:focus,
					    input[type=number]:focus,
					    input[type=file]:focus,
					    input[type=url]:focus,
					    select:focus,
					textarea:focus {
									outline: #ffce00 auto 5px;
							}



						</style>


	</head>

	<body>

        <!-- Header start -->
        <header class="header">
            <div class="top-bar" >
                <div class="container">
                    <ul class="social-links">
                        <li><a href="
https://web.facebook.com/MEU-TAXI-706842149407828/" target="_blank">Facebook</a></li>
                        <li><a href="http://twitter.com">Twitter</a></li>
                        <li><a href="http://linkedin.com">LinkedIn</a></li>
                        <li><a href="http://instagram.com">Instagram</a></li>
                    </ul>
                    <button id="phone-trigger" class="phone-trigger ion-android-call"></button>
                    <ul class="phones">
                        <li><a href="tel:992-007-000" style="color:#ffffff!important;"><span>Call Center </span> 992 007 000 </a></li>
                    </ul>
                </div>
            </div>
            <div id="nav-bar" class="nav-bar">
                <div class="container">
                    <a href="index.html" class="logo"><img src="img/logo.svg" alt="" /></a>
                    <button id="nav-trigger" class="nav-trigger ion-android-menu"></button>
										<nav class="main-nav">
												<ul>
														<li ><a href="index.html">Home</a></li>
														<li class="active"><a href="taxi.php">TÁXIS</a></li>
														<li><a href="rent.php">RENTACAR</a></li>
														<li><a href="veiculos.php">VEÍCULOS</a></li>
														<li><a href="oficina.php">OFICINA</a></li>
														<li><a href="localizacao.html">LOCALIZAÇÃO</a></li>
														<li><a href="#!">Outros</a>
																<ul>
																	<li><a href="sobrenos.html">SOBRE NÓS</a></li>

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
				<!-- adding slide to meuTaxi Page -->

				<div class="content">

					<!-- using vbg video starts here -->
					<!-- <video poster="" id="bgvid" playsinline autoplay muted loop> -->
<!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
							<!-- <source src="videos/meutaxi.mov" type="video/webm">
							<source src="videos/meutaxi.mp4" type="video/mp4">
					</video> -->
									<!-- <div id="polina">
									<h1></h1>
									<p>

									<p></p>
									<button>Parar</button>
									<div class="slider-button"><a href="#reservas" class="btn btn-primary" style="color:#000000!important;">Reservas </a></div>

									</div> -->


					<!-- bg video ends here -->

					<!-- Slider start -->
					 <div class="slider owl-carousel">
						<div class="slide">
							<img src="img/mt3.jpg" alt="" class="slider-image" />
							<div class="slider-subtitle">A Maior Frota de Táxis </div>
							<div class="slider-title"> 938 007 000</div>
							<div class="slider-button"><a href="#reservas" class="btn btn-primary" style="color:#000000!important;">Reservas </a></div>
						</div>
						<div class="slide">
							<img src="img/mt5.jpg" alt="" class="slider-image" />
							<div class="slider-subtitle">CallCenter 24 horas</div>
							<div class="slider-title"> 992 007 000!</div>
							<div class="slider-button"><a href="#reservas" class="btn btn-primary" style="color:#000000!important;">Reservas</a></div>
						</div>
						<div class="slide">
							<img src="img/mt1.jpg" alt="" class="slider-image" />
							<div class="slider-subtitle">Os Melhores Chauffers!</div>
							<div class="slider-title">peça já</div>
							<div class="slider-button"><a href="#reservas" class="btn btn-primary" style="color:#000000!important;">Reservas</a></div>
						</div>

					</div>


				<!--  end of slide -->
        <!-- Header end -->

		<!-- Content start -->


			<!-- Main start -->
			<section class="intro">
				<div class="container" >
					<div class="row">
						<div class="col-sm-12">
							<div class="title">
								<h1><span id="ligou">LIGOU</span>, <span id="chegou">CHEGOU!</span>	</h1>
								<h6>garantimos prontidão na resposta do seu pedido</h6>
								<p>
								<div class="slider-button"><a href="#reservas" class="btn btn-primary" style="color:#000000!important;">reservas online</a></div>
							</div>
							<p class="text-center"><big>Estamos ao seu dispor 24 horas por dia, por telefone, pelas redes sociais ou numa das nossas multiplas praças de táxis, ofereçemos-lhe prontidão na resposta, a maior frota de táxis de Angola, estamos em Luanda, Malange, Kwanza Sul e Brevemente em Benguela.</big></p>
							<hr class="blank">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 text-center">
							<p><i class="icon-road-pin icon-circle icon-big"></i></p>
							<h6>Em qualquer lugar</h6>
							<p>Estamos onde você esta, centro da cidade, novas centralidades,  centros comerciais, nos musseques, onde você chamar a gente chega lá.</p>
							<p>&nbsp;</p>
						</div>
						<div class="col-sm-4 text-center">
							<p><i class="icon-airplane-1 icon-circle icon-big"></i></p>
							<h6>Viagens</h6>
							<p> Reserve já um táxi a partir do nosso portal online, e tenha transporte garantido ao Chegar de viagem ou a Embarcar, a equipa meuTAXI, deseja-lhe boa viagem.</p>
							<p>&nbsp;</p>
						</div>
						<div class="col-sm-4 text-center">
							<p><i class="icon-business-man-3 icon-circle icon-big"></i></p>
							<h6>Negócios</h6>
							<p>Preocupado com estacionamento no centro da Cidade? deixe que nós demos boleia até ao seu local de serviço, eficiência no transporte, pontualidade garantida.</p>
							<p>&nbsp;</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 text-center">
							<p><i class="icon-car-four-wheel icon-circle icon-big"></i></p>
							<h6>VIP taxi</h6>
							<p>Grandes Clientes, Grandes Serviços, Clientes Especiais, Serviços Especiais, entregamos para si viatura top de gama e não personalizada, com os melhores chouffer da cidade.</p>
							<p>&nbsp;</p>
						</div>
						<div class="col-sm-4 text-center">
							<!-- <img src="icon/duracao.png" alt=""></a> -->
							 <p><i class=" icon-circle icon-big"><img src="icon/duracao.png" alt=""></a></i></p>
							<h6>Longa Duração</h6>
							<p>Faça um contracto de longa duração e garante o transporte de seu filho, irmão, pai e outros, sem stress e sem preocupações</p>
							<p>&nbsp;</p>
						</div>
						<div class="col-sm-4 text-center">
							<p><i class="icon-truck-2 icon-circle icon-big"></i></p>
							<h6>Serviços Adicionais</h6>
							<p>Tenha um leque de serviços adicionais dentro das nossas viaturas, carregamento de televisão, seguros, diversidade na forma de pagamento. Esperamos por si.</p>
							<p>&nbsp;</p>
						</div>
					</div>
				</div>
			</section>
			<!-- reservas -->

			<section class="intro" id="reservas">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title">
						<h1>Reserva</h1>
						<h6>Envie Já a Sua Reserva</h6>
					</div>
					<!--<p class="text-center"><big>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget porttitor massa. Nullam elit turpis, eleifend sit amet felis quis, auctor tempus felis. Vivamus tristique felis est, a scelerisque magna egestas at. Donec ultricies porta ante, vitae rhoncus purus ullamcorper vel. Ut mattis aliquam purus, ac sollicitudin elit porta quis. Aliquam fermentum, nibh scelerisque rutrum ultricies, felis elit commodo nisl, a lacinia dui odio vel velit. Curabitur vitae enim ullamcorper, rutrum dolor eu, pharetra odio.</big></p> -->
					<hr class="blank">
				</div>
			</div>
			<form class="booking-form" name="reserva" id="reservaForm" method="post">
				<div id="erro">
					<?php
					include_once 'send_email/send_email_taxi.php';
					echo $erro.$sucessosms; ?>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<fieldset>
							<input type="text" name="nome" id="nome" placeholder="Nome" />
						</fieldset>
						<fieldset>
							<input type="email" name="email" id="email" placeholder="Email" />
						</fieldset>
					</div>
					<div class="col-sm-2">
						<fieldset>
							<input type="number" name="telefone" id="telefone" placeholder="Nº Telefone" />
						</fieldset>
						<fieldset>
							<input type="number" name="tAlternativo" id="tAlternativo" placeholder="Nº Alternativo " />
						</fieldset>
					</div>
					<div class="col-sm-4">
						<fieldset>
							<input type="text" name="partida" id="partida" placeholder="Descreva de Onde Partira" />
						</fieldset>
						<fieldset>
							<input type="text" name="chegada" id="chegada" placeholder="Descreva aonde será o seu destino " />
						</fieldset>
					</div>

					<div class="col-sm-2">
						<fieldset>
							<input type="text" name="data" id="data" placeholder="Data" class="datepicker" />
						</fieldset>
						<fieldset>
							<input type="time" name="hora" id="hora" placeholder="Hora" class="timepicker" />
						</fieldset>
					</div>

				</div>
				<div class="row">
					<div class="col-sm-12">
						<fieldset>
							<textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
						</fieldset>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center" style="color:#FF0000!important;">
						<button class="btn btn-danger" type="submit" id="reservaBtn" name="reservar" value="reservar">Reservar</button>
					</div>
				</div>
			</form>
		</div>
	</section>

  <!-- Reclamações -->
  <section class="intro" id="reclamacoes">
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="title">
        <h1>Reclamações</h1>
        <h6>Envie a Sua Reclamação</h6>
      </div>

      <hr class="blank">
    </div>
  </div>
  <form class="booking-form" name="reclamacoes" id="reclamacoesForm" method="post">
    <div id="erroRecl">
      <?php
			include_once 'send_email/send_email_taxi_reclamacoes.php';
			 echo $erroRecl.$sucessosmsRecl; ?>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <fieldset>
          <input type="text" name="nomeReclamacoes" id="nomeReclamacoes"  placeholder="Seu Nome" />
        </fieldset>
        <fieldset>
          <input type="email" name="emailReclamacoes" id="emailReclamacoes" oninvalid="this.setCustomValidity('Por favor introduza um endereço de email valido')" oninput="setCustomValidity('')" placeholder="Seu Email" />
        </fieldset>
      </div>
      <div class="col-sm-12">
        <fieldset>
          <input type="number" name="telefoneReclamacoes" id="telefoneReclamacoes"  placeholder="Seu Nº Telefone" />
        </fieldset>

    <div class="row">
      <div class="col-sm-12">
        <fieldset>
          <textarea name="mensagemReclamacoes" id="mensagemReclamacoes"  placeholder="Sua Mensagem de Reclamação"></textarea>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 text-center" style="color:#FF0000!important;">
        <button class="btn btn-danger" type="submit" id="enviarReclamacoesBtn" name="enviarReclamacoes" value="enviarReclamacoes"  >Enviar Reclamação</button>
      </div>
    </div>
  </form>
</div>
</section>

			<!-- end of reclamações -->

			<!--Main end -->

			<!-- Promo start -->
			<section class="promo">
				<img src="img/mt4.jpg" alt="" />
				<div class="tint from-left"></div>
				<div class="container">
					<div class="row">
						<div class="col-sm-5">
							<hgroup>
								<h3>meuTAXI</h3>
								<h6>Angola</h6>
							</hgroup>
							<p>Meu Táxi é uma marca registada do Grupo Organizações Chana. Todos os direitos reservados..</p>
							<a href="index.html" class="btn btn-secondary">OrgChana</a>
						</div>
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
								<h6>Produtos e Serviços</h6>
								<p>Propomos um serviço de parceria com empresas para transporte dos seus colaboradores. Este momento abre um formulário para que o Meu Taxi faça posteriormente um contacto comercial com o utilizador..</p>
								<p>Temos um leque de serviços adicionais em nossas viaturas, no conforto habitual, tenha disponibilidade imediata de poder carregar serviço de televisão, telefones e seguro a qualquer hora nas nossas viaturas</p>
								<p>Carregamos a marca da sua empresa, publicite dentro e fora das viaturas do meuTAXI, a publicidade movel tem maior impacto que a publicidade estatica, não perca tempo, fale connosco </p>
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
									<li class="hotline"><a href="tel:992 007 000">992 007 000</a></li>
									<li class="phone"><a href="tel:938 007 000">938 007 000</a></li>
									<li class="email"><a href="#">callcenter@meutaxi.co.ao</a></li>
									<li class="address">Estrada Lar Patriota<br>Luanda</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="credits">
				<div class="container">
					<div class="copyright">&copy;meuTaxi</div>
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
		<!-- Javascripts end -->

				<!-- start my javascript  -->
						<script type="text/javascript">

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
									 if ($("#telefone").val() == "") {
								     erro += "O Campo Nº Telefone é obrigatorio Preencha-o<br>";

								   }
			  						if ($("#tAlternativo").val() == "") {
											erro += "O Campo Telefone Alternativo é obrigatorio Preencha-o<br>";

										}
										if (!$("#telefone, #tAlternativo").val().match(telMatch))  {
											erro += "O Campo Nº Telefone deve Ter apenas Nove numeros<br>";

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
										var telMatch = /^\d{9}$/;
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
										 if (!$("##telefoneReclamacoes").val().match(telMatch))  {
								   		erro += "O Campo Nº Telefone Alternativo deve Ter apenas Nove numeros<br>";

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
						//close function
						<!-- Javascripts end -->
						</script>


				<!-- ends here  -->

	</body>
</html>
