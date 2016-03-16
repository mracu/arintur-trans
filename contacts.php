<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contacts</title>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<style type="text/css">
.gm-style-iw * {
	display: block;
}

.gm-style-iw h4, .gm-style-iw p {
	margin: 0;
	padding: 0;
}

.gm-style-iw a {
	color: #4272db;
}
</style>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script
	src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCNjglhQ40SLDVZU00wvUh7Noh-YwMj644&sensor=false&extension=.js'></script>
<script type="text/javascript" src="js\google-map.js"></script>
</head>
<body>

	<nav role="navigation" class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbarCollapse"
					aria-expanded="false" aria-controls="navbar">
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
					<li><a href="reservation.php"><span
							class="glyphicon glyphicon-check"></span> Rezervări</a></li>
					<li class="active"><a href="contacts.php"><span
							class="glyphicon glyphicon-user"></span> Contacte</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Contacte</h3>
					</div>
					<div class="panel-body">

						<div id="contact" class="container-fluid">
							<div class="row">
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-6 form-group">
											<input class="form-control" id="name" name="name"
												placeholder="Name" type="text" required>
										</div>
										<div class="col-sm-6 form-group">
											<input class="form-control" id="email" name="email"
												placeholder="Email" type="email" required>
										</div>
									</div>
									<textarea class="form-control" id="comments" name="comments"
										placeholder="Comment" rows="5" style="resize: vertical"></textarea>
									<br>
									<div class="row">
										<div class="col-sm-12 form-group">
											<button class="btn btn-default pull-right" type="submit">Send</button>
										</div>
									</div>
								</div>
								<div class="col-sm-5">
									<ul class="list-unstyled">
										<li>
											<p class="text-info">
												<span class="fa fa-phone-square fa-lg"></span>&nbsp;&nbsp;MD:
												+373 69 26 58 80
											</p>
										</li>
										<li><p class="text-info">
												<span class="fa fa-phone-square fa-lg"></span>&nbsp;&nbsp;RO:
												+40 75 52 48 809 / +40 75 83 63 588
											</p></li>
										<li><p class="text-info">
												<span class="fa fa-whatsapp fa-lg"></span>&nbsp;&nbsp;Viber:
												+373 69 07 18 07
											</p></li>
										<li><p>
												<a class="text-info" href="mailto: arinturtrans@mail.ru"><span
													class="fa fa-envelope-square fa-lg"></span>&nbsp;&nbsp;arinturtrans@mail.ru</a>
											</p></li>
										<li><p class="text-info">
												<span class="fa fa-map-marker fa-lg"></span>&nbsp;&nbsp;&nbsp;Bălți,
												str. Independentii 70/6
											</p></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-body">
						<div id='map-obj'
							style="height: 460px; width: 100%; margin: auto; margin-bottom: 15px;"></div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-md-3">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
								class="text-muted">MD: +373 69 265 880</span></small></li>
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