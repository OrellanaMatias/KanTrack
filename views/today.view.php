<!DOCTYPE html>
<html lang="en">

<head>
	<?php $title= "projects"; ?>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <title>KanTrack</title>
    <?php require 'head.php'; ?>
    <?php require 'events/modals/newProject.php'; ?> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg">

<header class="m-0 p-0">
	<nav class="navbar navbar-expand-lg pt-3 text-dark">
		<div class="menu container">
			<a href="index.php" class="navbar-brand">
			<img src="img/logo.png" width="45" height="50" alt="Kalendar" class="d-inline-block align-items-middle mr-2">
			<span class="logo_text align-middle">KanTrack</span>
			</a>
            
			<button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
			<div id="navbarSupportedContent" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
                    <li><a href="content.php" class="btn text-primary mr-2"><i class="fas fa-home pr-2"></i>Inicio</a></li>	
					<li><a href="logout.php" class="btn text-primary mr-2">Cerrar sesión</a></li>				
				</ul>
			</div>
		</div>
	</nav>
</header>

<div class="row d-flex m-4 mt-2 justify-content-center">
<h2 class="col-12 text-center mb-4 text-primary">HOY</h2>
    <div class="col-3">
        <div class="card-hover-shadow-2x mb-3 card text-dark">
            <div class="card-header-tab card-header">
                <h5 class="card-header-title font-weight-normal"><i class="fa fa-suitcase mr-3"></i>EVENTOS INICIANDO</h5>
            </div>
            <div class="scroll-area">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush">
                                
                                <?php if (isset($events_start)) {	                                   
                                    foreach ($events_start as $es): 
                                    ?>                         
                                    <li class="list-group-item pe-auto">        
                                        <div class="todo-indicator ml-2" style="background-color:<?php echo $es['colour'];?>;">
                                        </div>
                                        <div class="widget-content p-0 ml-4">
                                            <div class="widget-content-wrapper">                                                                                                   
                                                <div class="widget-content-left">
                                                    <div class="text-left widget-heading text-primary"><?php echo $es['title'];?></div>
                                                    <div class="widget-subheading text-muted"><i>Inicio: <?php echo $es['start_date'];?></i></div>
                                                    <div class="widget-subheading text-muted"><i>Fin: <?php echo $es['end_date'];?></i></div>
                                                </div>  
                                            </div>
                                        </div>                                    
                                    </li>                                
                                <?php 
                                endforeach; }  ?>
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>

        <div class="card-hover-shadow-2x mb-3 card text-dark">
            <div class="card-header-tab card-header">
                <h5 class="card-header-title font-weight-normal"><i class="fa fa-suitcase mr-3"></i>EVENTOS TERMINANDO</h5>
            </div>
            <div class="scroll-area">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush">
                                
                                <?php if (isset($events_end)) {	                                   
                                    foreach ($events_end as $ee): 
                                    ?>                         
                                    <li class="list-group-item pe-auto">        
                                        <div class="todo-indicator ml-2" style="background-color:<?php echo $ee['colour'];?>;">
                                        </div>
                                        <div class="widget-content p-0 ml-4">
                                            <div class="widget-content-wrapper">                                                                                                   
                                                <div class="widget-content-left">
                                                    <div class="text-left widget-heading text-primary"><?php echo $ee['title'];?></div>
                                                    <div class="widget-subheading text-muted"><i>Inicio: <?php echo $ee['start_date'];?></i></div>
                                                    <div class="widget-subheading text-muted"><i>Fin: <?php echo $ee['end_date'];?></i></div>
                                                </div>  
                                            </div>
                                        </div>                                    
                                    </li>                                
                                <?php 
                                endforeach; }  ?>
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="card-hover-shadow-2x mb-3 card text-dark">
            <div class="card-header-tab card-header">
                <h5 class="card-header-title font-weight-normal"><i class="fa fa-suitcase mr-3"></i>PROYECTOS INICIANDO</h5>
            </div>
            <div class="scroll-area">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush">
                                
                                <?php if (isset($projects_start)) {	                                   
                                    foreach ($projects_start as $ps): 
                                    ?>                         
                                    <li class="list-group-item pe-auto">        
                                        <div class="todo-indicator ml-2" style="background-color:<?php echo $ps['project_colour'];?>;">
                                        </div>
                                        <div class="widget-content p-0 ml-4">
                                            <div class="widget-content-wrapper">                                                                                                   
                                                <div class="widget-content-left">
                                                    <div class="text-left widget-heading text-primary"><?php echo $ps['project_name'];?></div>
                                                    <div class="widget-subheading text-muted"><i>Inicio: <?php echo $ps['start_date'];?> | Fin: <?php echo $ps['end_date'];?></i></div>
                                                </div>  
                                            </div>
                                        </div>                                    
                                    </li>                                
                                <?php 
                                endforeach; }  ?>
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>

        <div class="card-hover-shadow-2x mb-3 card text-dark">
            <div class="card-header-tab card-header">
                <h5 class="card-header-title font-weight-normal"><i class="fa fa-suitcase mr-3"></i>PROYECTOS TERMINANDO</h5>
            </div>
            <div class="scroll-area">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush">
                                
                                <?php if (isset($projects_end)) {	                                   
                                    foreach ($projects_end as $pe): 
                                    ?>                         
                                    <li class="list-group-item pe-auto">        
                                        <div class="todo-indicator ml-2" style="background-color:<?php echo $pe['project_colour'];?>;">
                                        </div>
                                        <div class="widget-content p-0 ml-4">
                                            <div class="widget-content-wrapper">                                                                                                   
                                                <div class="widget-content-left">
                                                    <div class="text-left widget-heading text-primary"><?php echo $pe['project_name'];?></div>
                                                    <div class="widget-subheading text-muted"><i>Inicio: <?php echo $pe['start_date'];?> | Fin: <?php echo $pe['end_date'];?></i></div>
                                                </div>  
                                            </div>
                                        </div>                                    
                                    </li>                                
                                <?php 
                                endforeach; }  ?>
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="card-hover-shadow-2x mb-3 card text-dark">
            <div class="card-header-tab card-header">
                <h5 class="card-header-title font-weight-normal"><i class="fa fa-suitcase mr-3"></i>TAREAS</h5>
            </div>
            <div class="scroll-area">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush">
                                
                                <?php if (isset($tasks)) {	                                   
                                    foreach ($tasks as $t): 
                                    ?>                         
                                    <li class="list-group-item pe-auto">        
                                        <div class="todo-indicator ml-2" style="background-color:<?php echo $t['task_colour'];?>;">
                                        </div>
                                        <div class="widget-content p-0 ml-4">
                                            <div class="widget-content-wrapper">                                                                                                   
                                                <div class="widget-content-left">
                                                    <div class="text-left widget-heading text-primary"><?php echo $t['task_name'];?></div>
                                                    <div class="widget-subheading text-muted"><i>Fecha limite: <?php echo $t['deadline'];?></i></div>
                                                </div>  
                                            </div>
                                        </div>                                    
                                    </li>                                
                                <?php 
                                endforeach; }  ?>
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
        </div>
    </div>

</div>
<?php require 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
