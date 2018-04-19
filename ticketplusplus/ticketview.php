<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">		
	<title> Platzhalter Ticketbetreff </title>
</head>
<body>
	<?php if (login_check($mysqli) == true) : ?>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#">Ticket ++</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Startseite <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Neues Ticket</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Meine Tickets
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">alle Tickets</a>
						<a class="dropdown-item" href="#">offene Tickets</a>
						<a class="dropdown-item" href="#">geschlossene Tickets</a>
						<a class="dropdown-item" href="#">wartende Tickets</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-secondary my-2 my-sm-0" type="submit">Suchen</button>
			</form>
			<div class="dropdown ml-5">
				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#ffb516">
					<span class="glyphicon glyphicon-user" aria-hidden="true"> </span>
					<?php echo htmlentities($_SESSION['username']); ?>
					<span class="caret"> </span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><span class="glyphicon glyphicon-cog" aria-hidden="true"></span><a href="#">  Konto</a></li>
					<li role="separator" class="dropdown-divider"></li>
					<li><span class="glyphicon glyphicon-off" aria-hidden="true"></span><a href="includes/logout.php">  Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="ml-5 mt-5 col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
		Betreff:
		<input class="form-control" type="text" placeholder="Betreff" aria-label="Betreff" />
	</div>
	
	<div class="ml-5 mt-3 mr-5 col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
		Beschreibung:
		<textarea class="form-control" placeholder="Beschreibung" aria-label="Beschreibung" rows="20" style="resize:none"></textarea>
	</div>
	
	<div class="dropdown ml-5 mt-5 col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 row">
		<div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
			Kategorie:
			<button class="btn btn-secondary dropdown-toggle ml-2" type="button" id="menu_category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				---Bitte wählen---
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				
				<a class="dropdown-item" href="#">Hardware</a>
				<a class="dropdown-item" href="#">Software</a>
				<a class="dropdown-item" href="#">Organisation</a>
			</div>
		</div>
		<div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
			Unterkategorie:
			<button class="btn btn-secondary dropdown-toggle ml-2" type="button" id="menu_category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				---Bitte wählen---
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				
				<a class="dropdown-item" href="#">Zu</a>
				<a class="dropdown-item" href="#">faul</a>
				<a class="dropdown-item" href="#">für</a>
				<a class="dropdown-item" href="#">alle</a>
				<a class="dropdown-item" href="#">Unterkategorien</a>
			</div>
		</div>
	</div>
		
	 <?php else : ?>
            <p>
                <span class="error">Sie sind nicht für diese Seite berechtigt.</span> bitte <a href="login.php">einloggen </a>.
            </p>
        <?php endif; ?>
</body>
</html>