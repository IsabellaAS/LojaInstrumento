<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Aulas de Música</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			.nav-item{
				font-size: 1.2em;
				text-transform: uppercase;
			}
			h1{
				font-family: 'Baloo Bhaina', cursive;
				padding-top: 20px;
			}
		</style>
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
	</head>
	<body>	
		<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">  
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="index.php" class="nav-link">
						Home
					</a>
				</li>				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Cadastrar
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  <a class="dropdown-item" href="?page=cadastrar-instrumento">Instrumento</a>
					  <a class="dropdown-item" href="?page=cadastrar-aula">Aula</a>
					  <a class="dropdown-item" href="?page=cadastrar-cliente">Cliente</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Editar
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  <a class="dropdown-item" href="?page=editar-instrumento">Instrumento</a>
					  <a class="dropdown-item" href="?page=editar-aula">Aula</a>
					  <a class="dropdown-item" href="?page=editar-cliente">Cliente</a>
					</div>
				</li>
			</ul>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php		
						include("config.php");
						switch(@$_REQUEST["page"]){
							case "cadastrar-instrumento":
								include("cadastrar-instrumento.php");
							break;
							case "cadastrar-aula":
								include("cadastrar-aula.php");
							break;
							case "cadastrar-cliente":
								include("cadastrar-cliente.php");
							break;
							
							case "editar-instrumento":
								include("editar-instrumento.php");
							break;
							case "editar-aula":
								include("editar-aula.php");
							break;
							case "editar-cliente":
								include("editar-cliente.php");
							break;
							
							case "form-editar-instrumento":
								include("form-editar-instrumento.php");
							break;
							case "form-editar-aula":
								include("form-editar-aula.php");
							break;
							case "form-editar-cliente":
								include("form-editar-cliente.php");
							break;
							
							case "salvar-cadastro":
								include("salvar-cadastro.php");
							break;
							case "salvar-editar":
								include("salvar-editar.php");
							break;
							case "excluir":
								include("excluir.php");
							break;
							default:
								include("home.php");
						}
					?>
				</div>
			</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>









