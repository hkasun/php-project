<!DOCTYPE html>
	<html>
		<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css">
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Saira+Condensed" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="./style.css">
		</head>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li><a href="index.php ">Početna</a></li>
						<li><a href="contact.php">Kontakt</a></li>
						<li><a href="about-us.php">Poznato o nepoznatome</a></li>
						<?php
  					if(isset($_SESSION['user'])) { 
							echo	'<li><a href="admin.php">Administracija</a></li>';
						}
						?>
					</ul>
					<ul class="nav navbar-nav navbar-right">	
						<?php
  					if(!isset($_SESSION['user'])) { 
							echo	'<li><a href="login.php">Prijava</a></li>';
						}
						?>
							<?php
							if(!isset($_SESSION['user'])){ 
								echo	'<li><a href="register.php">Registracija</a></li>';
							}
							?>
						<?php
  					if(isset($_SESSION['user'])) { 
							echo	'<li><a href="logout.php">Odjava</a></li>';
						}
						?>
					</ul>
			</div>	
		</nav>
	<html>