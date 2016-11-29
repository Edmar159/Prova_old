<?php include_once("../header.php") ?>

<div class="mensagme text-center col-md-12">
	<?php 

	if(isset($_GET['error']))
	{
		?> 
			<p class="bg-danger" style="color:red"><?php echo $_GET['error'] ?></p>
		<?php
	} 
	else if(isset($_GET['success']))
	{
		?> 
			<p class="bg-success" style="color:green"><?php echo $_GET['success'] ?></p>
		<?php
	}


	?>
</div>
    <div class="col-md-12 col-md-offset-0">    	
	   	<div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">Cadastrar Filme</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="storeFilme.php" >
					<div class="form-group">
					    <label class="col-md-3 control-label">*Codigo</label>
						<div class="col-md-9">
						   	<input type="text" class="form-control" name="codFilme" placeholder="Codigo filme">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-3 control-label">*Titulo</label>
						<div class="col-md-9">
						   	<input type="text" class="form-control" name="titulo" placeholder="Mr. Bean">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-3	 control-label">*Gênero</label>
						<div class="col-md-9">
						   	<input type="text" class="form-control" name="genero" placeholder="Comedia">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-3	 control-label">*Diretor</label>
						<div class="col-md-9">
						   	<input type="text" class="form-control" name="diretor" placeholder="Angelina Jolie">
						</div>
					</div>
					
					<div class="form-group">
					    <label class="col-md-3	 control-label">*Duracao</label>
						<div class="col-md-9">
						   	<input type="number" class="form-control" name="duracao" placeholder="120">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-3	 control-label">*Ano</label>
						<div class="col-md-9">
						   	<input type="number" class="form-control" name="ano" placeholder="2009">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-3	 control-label">Imagem</label>
						<div class="col-md-9">
						   	<input type="text" class="form-control" name="imagem" placeholder="poster0">
						</div>
					</div>
					<div class="form-group">
					    <div class="col-md-9 col-md-offset-3">
						   	<p class="text-danger">(*) campos de preenchimento obrigatório</p>
					    </div>
					</div>
					<div class="form-group">
					    <div class="col-md-2 col-md-offset-10">
					      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Cadastrar</button>
					    </div>
					</div>
				</form>
				<div class="row">

				</div>
			</div>
		</div>
    </div>

<?php include_once("../footer.php") ?>