<?php include_once("../header.php") ?>
<!--<?php// include_once("../validar.php") ?> -->
<?php
	$busca = "Filmes";
?>
<div class="row">
	 <div class="row col-md-12 col-md-offset-0">    	
	   	<div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">Consultar por Gênero</h3>
			</div>
			<div class="panel-body">
			<form class="form-horizontal" method="GET" action="busGen.php" >
					<div class="form-group">
						<div class="col-md-1 col-md-offset-0">
					    	<label class="control-label">Busca</label>
						</div>
						<div class="col-md-9">
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
							   	<select class="form-control" name="busca">
								<?php
								$result = mysqli_query($con, "SELECT Genero FROM filme GROUP BY Genero"); ?>
							 	<option value="Filmes">Todos os gêneros</option>
						<?php 	while($gen = mysqli_fetch_object($result)){
						 ?>
									<option value="<?php echo $gen->Genero?>"><?php echo $gen->Genero?></option>  
								<?php } ?> 
							</select>
						   	</div>
						</div>
						<div class="col-md-1">
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Consultar</button>
						</div>
					</div>
			</form>
			</div>
		</div>
	</div>
</div>
<?php
if ($busca == "Filmes"){
		$result = mysqli_query($con, "SELECT * FROM filme");

	}
if(isset($_GET['busca']))
{	
	$busca = $_GET['busca'];
	if ($busca == "Filmes"){
		$result = mysqli_query($con, "SELECT * FROM filme");
	}else{
		$result = mysqli_query($con, "SELECT * FROM filme WHERE Genero = '$busca'");
	}
}	

?>

	<div class="row ">
		<div class="col-md-12 col-md-offset-0">
				<?php 
				
				if(isset($result))
				{		
					if(mysqli_num_rows($result) > 0)
					{
					
						?>
						
						
						<div class="panel panel-primary">
				  			<div class="panel-heading"><?php echo $busca ?></div>
								<table class="table table-striped">
									
									<?php
										while($filme = mysqli_fetch_object($result))
										{?>
										<tr>
										<td>
											<table class="table table-striped">
												<tr>
														<td class="col-md-1"></td>
														<td><span class="detalhes" aling="center"><h3><?php echo $filme->Titulo ?></h3></a></span><br>
													</td>
													</tr>
													<tr>
														<td class="col-md-1"><b>Codigo</b></td>
														<td><span class="detalhes"><?php echo $filme->Codigo ?></a></span><br></td>
													</tr>
													<tr>
														<td class="col-md-1"><b>Genero</b></td>
														<td><span class="detalhes"><?php echo $filme->Genero ?></a></span><br>
														</td>
													</tr>
													<tr>
														<td class="col-md-1"><b>Diretor</b></td>
														<td><span class="detalhes"><?php echo $filme->Diretor ?></a></span><br>
														</td>
													</tr>
													<tr>
														<td class="col-md-1"><b>Duração</b></td>
														<td><span class="detalhes"><?php echo $filme->Duracao ?></a></span><br>
														</td>
													</tr>
													<tr>
														<td class="col-md-1"><b>Ano</b></td>
														<td><span class="detalhes"><?php echo $filme->Ano ?></a></span><br>
														</td>							
													</tr>
													<tr><td></td></tr>		
											</table>
										</td>
										<td>
											<td><img src="../image/<?php echo $filme->Imagem?>.jpg" alt="Poster filme" class="img-responsive"></td>
										</td>
									
									</tr>
									<?php
									}
									?>
								</table>
						</div> <?php	
					}else
					{		
					?>		
						<p class="bg-info"><b> Nenhum filme encontrado</b></p>				
					<?php
					}
				}
				?>
			</div>
		</div>


<?php include_once("../footer.php") ?>