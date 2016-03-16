<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="css\datepicker.css">

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<nav role="navigation" class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><img alt="logo"
					src="images\logo.png"
					style="height: 210%; margin-top: -10px; margin-left: 20px;"></a>
			</div>
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php"><span
							class="glyphicon glyphicon-home"></span> Acasa</a></li>
					<li><a href="orar.php"><span class="glyphicon glyphicon-time"></span>
							Orarul</a></li>
					<li><a href="reservation.php"><span
							class="glyphicon glyphicon-check"></span> Rezervări</a></li>
					<li><a href="contacts.php"><span class="glyphicon glyphicon-user"></span>
							Contacte</a></li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="container body-content">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-9">

				<div class="panel panel-default">

					<div class="panel-body">
						<div class="row">
							<div class="col-md-8">
								<h3 class="text-info">Despre noi</h3>
								<p class="text-muted">
									<strong>ARINTUR-TRANS SRL</strong> vă pune la dispoziție ruta
									internaţională Bălti - Cluj-Napoca care circul zilnic cu
									plecare din Bălți la ora 18:30 si din Cluj la 17:00. Ruta are
									următorul traseu: Râșcani, Costești, Botoșani, Suceava și
									Bistrița.
								</p>
								<p class="text-muted">
									Ruta <strong>Bălți - Cluj-Napoca</strong> circulă zilnic în
									paritate cu transportul român. Mijloacele de transport dispun
									numărul de locuri de la 19.
								</p>

							</div>
							<div class="col-md-4">
								<img src="../images/bus.png" class="img-thumbail"
									alt="Bus Image" style="height: auto; max-width: 100%">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="text-muted">Scopul nostru este să transportăm cu
									siguranţă şi comoditate pasagerii. Și fiindcă ne gîndim la
									confortul dumneavoastră, transportul nostru este dotat cu aer
									condiționat, fotolii rabatabile, video și Wi-Fi.</p>
								<p class="text-muted">
									Dacă aveţi careva întrebări nu ezitaţi să ne telefonaţi la
									+37369265880 sau să ne scrieţi pe <a
										href="mailto: arinturtrans@mail.ru">e-mail</a>. La fel ne
									pute-ți găsi pe pagina noastră de <a
										href="https://www.facebook.com/balticluj.napoca"
										target="_blank">facebook</a>. Suntem mereu la dispoziţia
									dumneavoastră.
								</p>

								<h3 class="text-info">Tarife</h3>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th rowspan=2></th>
											<th colspan=2>Râșcani</th>
											<th colspan=2>Bălți</th>
										</tr>
										<tr>
											<th>RON</th>
											<th>MDL</th>
											<th>RON</th>
											<th>MDL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td id='thead'>Cluj-Napoca</td>
											<td>75</td>
											<td>350</td>
											<td>80</td>
											<td>370</td>
										</tr>
										<tr>
											<td id='thead'>Bistrița</td>
											<td>65</td>
											<td>300</td>
											<td>75</td>
											<td>350</td>
										</tr>
										<tr>
											<td id='thead'>Suceava</td>
											<td>40</td>
											<td>188</td>
											<td>50</td>
											<td>235</td>
										</tr>
										<tr>
											<td id='thead'>Botoșani</td>
											<td>30</td>
											<td>141</td>
											<td>40</td>
											<td>188</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-xs-4 col-md-3">
				<div id="fb-root"></div>
				<script>
					(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id))
							return;
						js = d.createElement(s);
						js.id = id;
						js.src = "//connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v2.5";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
				<div class="fb-page"
					data-href="https://www.facebook.com/Arintur-Trans-503411556503263/"
					data-tabs="timeline" data-small-header="false"
					data-adapt-container-width="true" data-hide-cover="false"
					data-show-facepile="false" data-show-posts="false"></div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<hr />
			<div class="row">
				<div class="col-xs-6 col-sm-3 col-md-3">
					<h5>
						<strong class="text-info">Detalii de contact</strong>
					</h5>
					<ul class="list-unstyled">
						<li><small><span class="fa fa-phone-square fa-lg"></span>&nbsp;&nbsp;<span
								class="text-muted">MD: +373 69 265 880</span> </small></li>
						<li><small><span class="fa fa-phone-square fa-lg"></span>&nbsp;&nbsp;<span
								class="text-muted">RO: +40 75 52 48 809</span></small></li>
						<li><small><span class="fa fa-map-marker fa-lg"></span>&nbsp;&nbsp;&nbsp;<span
								class="text-muted">Bălți, Independentii 70/6</span></small></li>
						<li><small><span class="fa fa-envelope-square fa-lg"></span>&nbsp;&nbsp;<a
								class="text-muted" href="mailto: arinturtrans@mail.ru">arinturtrans@mail.ru</a></small></li>
					</ul>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-3">
					<h5>
						<strong class="text-info">Urmăriți-ne</strong>
					</h5>
					<ul class="list-unstyled">
						<li><small><span class="fa fa-facebook-official fa-lg"></span>&nbsp;&nbsp;<a
								class="text-muted"
								href="https://www.facebook.com/balticluj.napoca" target="_blank">Facebook</a></small></li>
						<li><small><span class="fa fa-twitter-square fa-lg"></span>&nbsp;&nbsp;<a
								class="text-muted" href="#" target="_blank">Twitter</a></small></li>
						<li><small><span class="fa fa-odnoklassniki-square fa-lg"></span>&nbsp;&nbsp;<a
								class="text-muted" href="#" target="_blank">Odnoklassniki</a></small></li>
					</ul>
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-md-12 text-center">
					<small class="text-nowrap">&copy; Copyright 2016 arintur-trans.md</small>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>