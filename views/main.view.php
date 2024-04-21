<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

	<!-- BOOTSTRAP-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" media='all' integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- FONTS-->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

	<!-- CSS STYLE-->
	<link rel="stylesheet" href="css/style.css">

	<link rel="icon" type="image/x-icon" href="img/logo.png">
	<title>KanTrack</title>	
</head>

<body>
<header>
	<nav class="navbar navbar-expand-lg py-3 text-dark">
		<div class="menu container">
			<a href="index.php" class="navbar-brand">
			
			<img src="img/logo.png" width="45" height="50" alt="Kalendar" class="d-inline-block align-items-middle mr-2">
			
			<span class="logo_text align-middle">KanTrack</span>
			</a>	

			<button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
			<div id="navbarSupportedContent" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="login.php" class="btn text-primary mr-2"></i>Iniciar sesión</a></li>
					<li><a href="register.php" class="btn btn-primary"></i>Registrarse</a></li>					
				</ul>
			</div>
		</div>
	</nav>
</header>
<div class="row m-0 p-0">
	<div class="col-6 p-5">
		<div class="container mx-5 mt-3">
			<h2 class="display-8"> <small>Organiza tu vida, impulsa tu productividad, con <span class="text-primary">KanTrack</span></small> </h2>
			<p class="lead">Manten tu vida organizada con este sistema simple, pero eficaz.</p>
		</div>
		<div class="container mx-5 mr-5 mt-3 d-inline-block">
			<h4 class="text-primary pr-5"><i class="fas fa-rocket pr-3"></i>AUMENTA TU PRODUCTIVIDAD</h3>
			<p class="text-muted pr-5">Mantén todos tus proyectos en un solo lugar. KanTrack posee un tablero kanban simple donde podrás agregar tantos proyectos y tareas como desees.</p>
			<h4 class="text-primary pr-5"><i class="far fa-calendar-check pr-3"></i>OLVIDATE DE OLVIDAR</h3>
			<p class="text-muted pr-5">¿Siempre llegas tarde? KanTrack llevará tu agenda por ti. KanTrack posee un calendario completamente escalable donde puedes programar todos tus eventos y verlos fácilmente.</p>
				
		</div>
		<div class="container d-flex justify-content-center mt-4">
			<a href="register.php" class="btn btn-sign-up">EMPEZAR <i class="fas fa-arrow-circle-right pl-2"></i></a>
		</div>
	</div>
	<div class="col-6">
		<img class="img-fluid" src="img/1.jpg" alt="project_management">		
	</div>	
</div>
<footer>
	<div class="row m-0 p-0">
		<div class="col-12">
			<div class="container d-flex justify-content-center">
				<ul class="list-unstyled list-inline text-center d-flex justify-content-center align-items-center">				
					<li class="list-inline-item"><a class="btn btn-dark text-light rounded-circle" href="https://github.com/OrellanaMatias" target="_blank"><span class="fab fa-github"></span></a></li>
					<li class="list-inline-item"><a class="btn btn-dark text-light rounded-circle" href="https://www.linkedin.com/in/orellana-matias/" target="_blank"><span class="fab fa-linkedin-in"></span></a></li> 
					<small><span class="ml-2">KanTrack | Creado por<a class="nav-link d-inline-block text-primary pl-1" href="https://github.com/OrelllanaMatias" target="_blank">Matias Orellana</a></span></small>               
				</ul>
			</div>
		</div>
	</div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>