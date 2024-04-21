<?php
if (isset($_SESSION['user'])) {
?>	
<footer>
	<div class="row m-0 p-0 d-flex justify-content-center">
		<div class="col-12">
			<div class="container d-flex justify-content-center">
				<ul class="list-unstyled list-inline text-center d-flex justify-content-center align-items-center">				
					<li class="list-inline-item"><a class="btn btn-dark text-light rounded-circle" href="https://github.com/OrellanaMatias" target="_blank"><span class="fab fa-github"></span></a></li>
					<li class="list-inline-item"><a class="btn btn-dark text-light rounded-circle" href="https://www.linkedin.com/in/orellana-matias/" target="_blank"><span class="fab fa-linkedin-in"></span></a></li> 
					<small><span class="ml-2">KanTrack | Creado por<a class="nav-link d-inline-block text-primary pl-1" href="https://github.com/OrellanaMatias" target="_blank">Matias Orellana</a></span></small>               
				</ul>
			</div>
		</div>
	</div>
</footer>

<?php 
} else {
	header('Location: main.php');
	die();
}
?>

