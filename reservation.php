<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Rezervari</title>
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
<script src="js\bootstrap-datepicker.js"></script>
<script>
							$(function() {
								$('.datepicker').datepicker();
							});
							</script>
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
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>
							Acasa</a></li>
					<li><a href="orar.php"><span class="glyphicon glyphicon-time"></span>
							Orarul</a></li>
					<li class="active"><a href="reservation.php"><span
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
						<!--  Reservation -->
						<h3 class="text-info text-center">Rezerveaza bilete</h3>
						<form action="POST" class="form-horizontal">
							<div class="form-group">
								<label class="col-md-4 control-label" for="sel1">Orasul de
									pornire</label>
								<div class="col-md-8">
									<select class="form-control" id="sel1">
										<option>Bălți</option>
										<option>Râșcani</option>
										<option>Botoșani</option>
										<option>Suceava</option>
										<option>Bistrița</option>
										<option>Cluj-Napoca</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="sel2">Orasul de
									Destinatie</label>
								<div class="col-md-8">
									<select class="form-control" id="sel2">
										<option>Bălți</option>
										<option>Râșcani</option>
										<option>Botoșani</option>
										<option>Suceava</option>
										<option>Bistrița</option>
										<option>Cluj-Napoca</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="inputName">Nume</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="inputName"
										placeholder="Nume Complet">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" for="startData">Data
									Plecării</label>
								<div class="col-md-8">
									<input type="text" class="form-control datepicker"
										id="startData" placeholder="Data Plecării"
										data-date-format="mm/dd/yyyy">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="noOfPlaces">Numărul
									de persoane</label>
								<div class="col-md-8">
									<select class="form-control" id="noOfPlaces">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10+</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="phone">Telefon de
									contact</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="phone"
										placeholder="Telefon de contact">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="email">E-mail</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="email"
										placeholder="E-mail">
								</div>
							</div>

						</form>
						<!-- End Reservation -->
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
					data-show-facepile="true"></div>
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