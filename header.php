<?php include_once("conexao.php") ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IMDB</title>

	<link rel="stylesheet"  href="../css/bootstrap.css">
	<link rel="stylesheet"  href="../css/bootstrap-theme.css">
</head>
<body style="background-color:white">

<?php 
//	session_start();
//	if(isset ($_SESSION["login"])){
//		$login = $_SESSION["login"];
//		$cod = $_SESSION["cod"];
//		$nome = $_SESSION["nome"];
//		$tipo = $_SESSION["tipo"];
//		}
?>
<div>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="../Home/index.php" class="navbar-brand"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> HOME</a>
					</li>
					<?php 
					//if( isset($_SESSION["login"]) && ($tipo == "funcionario") ){ 
					?>
						<li>
							<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filme <span class="caret"></span></a>
					         	<ul class="dropdown-menu">
					            <li><a href="../Filme/cadFilme.php">Cadastrar Filme</a></li>
					            <li><a href="../Filme/busGen.php">Consultar por Gênero</a></li>
					            <li><a href="../Filme/busTitu.php">Consultar por Título</a></li>
					     
					          </ul>
					        </li>
						</li>
						
					<?php 
					 
					/* } if( ! isset($_SESSION["login"])){ ?>
					<li>
						<a href="../Usuario/loginUsuario.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Entrar</a>
					</li>
					<?php }else{ ?>
					<li>
						<a href="../Usuario/dadosUsuario.php" class="text-capitalize"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $login ?></a> 
					</li>
					<li>
						<a href="../sair.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sair</a>
					</li>
					<?php  } */ ?>
				</ul>				
			</div>
		</div>
	</nav>
</div>

<div class="container">
	<div class="col-md-10 col-md-offset-1" style="background-color:white">
	
	


	

