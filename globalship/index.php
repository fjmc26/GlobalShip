<!DOCTYPE html>
<html lang="es">
	<head>		
		<link href="css/bootstrap.min.css" rel="stylesheet" />        
		<link href="css/font-awesome.min.css" rel="stylesheet" />
		<link href="css/bootstrap-theme.min.css" rel="stylesheet" />
		<link href="images/favicon.png" rel="icon" type="image/png" />
        <link href="css/style.css" rel="stylesheet" />
		<meta charset="utf-8" />
		<meta content="Global Ship Group LTS, C.A." name="author" />
		<meta content="Global Ship Group LTS, C.A." name="description" />
		<meta content="Global, Ship, Group, LTD, shipping, agency" name="keywords" />
		<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport" />
		<title>Global Ship Group LTD, C.A.</title>
	</head>
	<body data-spy="scroll" data-target="#navegacion">

		<!--MENU DE NAVEGACION-->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" data-target="#navegacion" data-toggle="collapse" type="button">
						<span class="sr-only">Menú Principal</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#" id="titulo">Global Ship Group LTD, C.A.</a>
				</div>
				<div class="collapse navbar-collapse" id="navegacion">
					<ul class="nav navbar-nav" role="tablist">
						<li><!--MISION-->
							<a href="#mission" class="enlace">Mission</a>
						</li>
						<li><!--VISION-->
							<a href="#vision" class="enlace">Vision</a>
						</li>
						<li><!--SERVICIOS-->
							<a href="#service" class="enlace">Services</a>
						</li>
						<li><!--VALORES-->
							<a href="#values" class="enlace">Values</a>
						</li>
						<li><!--CONTACTOS-->
							<a href="#contact" class="enlace">Contacts Us</a>
						</li>
					</ul>
					<form action="" class="navbar-form navbar-right" role="search"><!--FORMULARIO DE BUSQUEDA-->
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>
				</div>
			</div>
		</nav>
		<div class="carousel slide" data-ride="carousel" id="carousel-1"><!--CAROUSEL DE IMAGENES-->
			<ol class="carousel-indicators">
				<li class="active" data-target="#carousel-1" data-slide-to="0" id="indicador"></li>
				<li data-target="#carousel-1" data-slide-to="1" id="indicador"></li>
				<li data-target="#carousel-1" data-slide-to="2" id="indicador"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="img-responsive" src="images/puerto-carga-descarga.png" alt="First slide [1140x500]" />
					<div class="carousel-caption hidden-xs hidden-sm">
						<h3 class="mensaje-imagen"></h3>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/bg-bymar.png" alt="Second slide [1140x500]"/>
					<div class="carousel-caption hidden-xs hidden-sm">
						<h3 class="mensaje-imagen"></h3>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/regimenes-aduaneros.png" alt="Third slide [1140x500]"/>
					<div class="carousel-caption hidden-xs hidden-sm">
						<h3 class="mensaje-imagen"></h3>
					</div>
				</div>
			</div>
			<a class="left carousel-control" data-slide="prev" href="#carousel-1" role="button">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="right carousel-control" data-slide="next" href="#carousel-1" role="button">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>
		<!--CUERPO DE LA PAGINA-->

		<div class="container-fluid">
			<hr class="linea-divisoria"></hr>
			<!--MISION-->

			<div class="row" id="mission">
				<div class="col-md-7 cont">
					<h2 class="titulo-seccion">
						Mission
						<span class="text-muted"></span>
					</h2>
					<ul class="list-unstyled">
						<li class="vineta"><!--<i class="fa fa-ship"></i>--> To integrate professionalism and credibility to deliver the highest quality ship agency services to the maritime industry.</li>
						<li class="vineta"><!--<i class="fa fa-ship"></i>--> To ensure smooth operations in ship chandler and crew management services onshore and offshore, with a view towards successful completion and a continued professional relationship.</li>
						<li class="vineta"><!--<i class="fa fa-ship"></i>--> To manage business in a mutually profitable manner, without compromising on ethical or professional standards and to establish an infallible reputation for being a premier shipping agency and marine consultant.</li>
					</ul>
				</div>
				<div class="imagen col-md-5">
					<img alt="Imagen-Mission" class="img-thumbnail img-responsive center-block" src="images/remolcador-container.png" />
				</div>
			</div>
			<hr class="linea-divisoria"></hr>
			<!--VISION-->

			<div class="row" id="vision">
				<div class="col-md-7 col-md-push-5">
					<h2 class="titulo-seccion">
						Vision
						<span class="text-muted"></span>
					</h2>
					<ul class="list-unstyled">
						<li class="vineta"><!--<i class="fa fa-ship"></i>--> To provide leadership and innovation in global business by delivering a flexible portfolio of services built on quality, safety, honesty, and a commitment to long term business relationships.</li>
						<li class="vineta"><!--<i class="fa fa-ship"></i>--> To make a difference in the conduct of port agency services in all Venezuelan Ports, as the lead ship agency organization in the country.</li>
						<li class="vineta"><!--<i class="fa fa-ship"></i>--> To be a long-term partner for our customers, a home for our people and an asset in society.</li>
					</ul>
				</div>
				<div class="imagen col-md-5 col-md-pull-7">
					<img alt="Imagen-Vision" class="img-thumbnail img-responsive center-block" src="images/aduana2.png" />
				</div>
			</div>
			<hr class="linea-divisoria"></hr>
			<!--SERVICIOS-->

			<div class="row servicio" id="service">
				<h2 class="titulo-serv">Services</h2>
				<div class="serv-01">
					<h4 class="sub-serv">SHIP AGENT</h4>
					<ul>
						<li class="vineta">Our ship agent services include excellent berth services, completing customs, health formalities and immigration.</li>
						<li class="vineta">We offer comprehensive services that include delivering freshwater at docks and wharves, supplying bunkers and lubricants and much more.</li>
						<li class="vineta">Our strengths include symbiotic professional relationships with port authorities and other government departments to offer quick and efficient solutions.</li>
					</ul>
				</div>
				<div class="serv-02">
					<h4 class="sub-serv">SHIP CHANDLER</h4>
					<p>On shore or offshore, we are aware of just what your quire in terms of day-to-day goods. We suit our requirements, and your budget, offering new or refurbished instruments and goods of supreme quality.</p>
					<p>With vast experience in supply in provisions for vessels, we at Global Ship Group LTD C.A guarantee high quality and efficiency not only of our chandler services brutal so of each item we supply. We work to meet your requirements and your budget, with specialist ship chandler services.</p>
					<p>When you choose our services, you get:</p>
					<ul>
						<li class="vineta"> <i class="fa fa-ship"></i> The complete range of ship chandler services.</li>
						<li class="vineta"> <i class="fa fa-ship"></i> Competitive rates.</li>
						<li class="vineta"> <i class="fa fa-ship"></i> Professional services with flexible settlement terms.</li>
						<li class="vineta"> <i class="fa fa-ship"></i> And only the best supplies in the market.</li>
					</ul>
				</div>
			</div>
			<hr class="linea-divisoria"></hr>
			<!--VALORES-->

			<div class="row" id="values">
				<div class="col-md-7">
					<h2 class="titulo-seccion">
						Values
						<span class="text-muted"></span>
					</h2>
					<ul class="list-unstyled">
						<li class="vineta"><i class="fa fa-ship"></i> Integrity and Responsibility.</li>
						<li class="vineta"><i class="fa fa-ship"></i> Customer appreciation.</li>
						<li class="vineta"><i class="fa fa-ship"></i> Valuing human capital.</li>
						<li class="vineta"><i class="fa fa-ship"></i> Teamwork.</li>
					</ul>
				</div>
				<div class="imagen col-md-5">
					 <img alt="Imagen-Values" class="img-thumbnail img-responsive center-block" src="images/Depositphotos_21710071.png" />
				</div>
			</div>
			<hr class="linea-divisoria"></hr>
			<!--CONTACTO-->

			<div class="contacto row" id="contact">
				<div class="imagen seccion imagen2">
					<img alt="Imagen-Contacts_Us" class="img-thumbnail center-block" height="250" src="images/global-ship.png" width="250" />
					<h2 class="text-center titulo-contacto">Global Ship Group LTD, C.A.</h2>
					<h4 class="text-center subtitulo-contacto">RIF J- 40029756-7</h4>
					<p class="text-cont text-center"><b>Address:</b> Av. Bolivar CC y Profesional Madefer Nivel 1 Of 1-02 Zone Centro, Puerto Cabello-Estado Carabobo.</p>
					<p class="text-cont text-center"><b>Zip Code:</b> 2050</p>
					<p class="text-cont text-center"><b>Fax:</b> +58 242 3614758</p>
					<p class="text-cont text-center"><b>Telephone:</b> +58 242 3029474  /  +58 242 3029464</p>
					<p class="text-cont text-center"><b>Email:</b> info@globalshipgroup.com</p>
					<p class="text-cont text-center"><b>Global Ship Group LTD C.A.</b> is a reliable team of professionals who work closely with you as ship agents, ship chandlers and marine services.</p>
					<p class="text-cont text-center">Contact us by simply filling up the form below. We will get back to you within 24 hours.</p>
					<!--FORMULARIO-->

					<div class="contenedor-formulario">
						<div class="wrap">
							<form action="" class="formulario" name="formulario_registro" method="post">
								<div class="input-grupo">
									<input id="nombre" name="nombre" type="text" />
									<label class="label" for="nombre">Name:</label>
								</div>
								<div class="input-grupo">
									<input id="correo" name="correo" type="text" />
									<label class="label" for="correo">Email:</label>
								</div>
								<div class="input-grupo">
									<textarea class="" id="message" name="message" placeholder="Write your message here" rows="3"></textarea>
								</div>
								<button class="btn btn-primary center-block" type="submit">Submit</button>
								<br />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="center-block container">
					<ul class="menu-social">
						<li>
							<a href="#">
								<span class="fa-stack fa-2x">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa-stack fa-2x googleP">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa-stack fa-2x skype">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-skype fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa-stack fa-2x twitter">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa-stack fa-2x youtube">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa-stack fa-2x instagram">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
					</ul>
					<h6 class="pie-texto text-center"> Desarrollado por: <a class="fm" href="http://www.jrsoluciones.net" target="_blank">www.jrsoluciones.net</a></h6>
					<h6 class="pie-texto text-center">Derechos Reservados &copy; 2016</h6>
			</div>
		</footer>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/desplazamiento.js"></script>
		<script src="js/formulario.js"></script>
	</body>
</html>
