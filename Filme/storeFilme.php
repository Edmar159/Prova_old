<?php include_once("../conexao.php") ?>

<?php 
	$imagem = NULL;
	if(isset($_POST['codFilme']))
		$codF  = $_POST['codFilme'];
	if(isset($_POST['titulo']))
		$titulo  = $_POST['titulo'];
	if(isset($_POST['genero']))
		$genero  = $_POST['genero'];
	if(isset($_POST['diretor']))
		$diretor  = $_POST['diretor'];
	if(isset($_POST['duracao']))
		$duracao  = $_POST['duracao'];
	if(isset($_POST['ano']))
		$ano  = $_POST['ano'];
	if(isset($_POST['imagem']))
		$imagem  = $_POST['imagem'];

	if($imagem == NULL)
		$imagem = "poster0";


if(($codF == NULL)|| ($titulo == NULL)|| ($genero == NULL)|| ($diretor == NULL)|| ($duracao == NULL)|| ($ano == NULL)){
	header("Location: cadFilme.php?error=Preencha os campos obrigatórios!");
	exit();
}else{	
	$result = mysqli_query($con, "SELECT * FROM filme WHERE Codigo = '$codF'");
	if($cond = mysqli_fetch_array($result))
	{
			header("Location: cadFilme.php?error=Código existente!");
			exit();
	}else{
		mysqli_query($con, "INSERT into filme(Codigo, Titulo, Genero, Diretor, Duracao, Ano, Imagem) VALUES ('$codF', '$titulo', '$genero', '$diretor', '$duracao', '$ano', '$imagem')");
			header("Location: cadFilme.php?success=Filme cadastrado com sucesso!");
			exit();
	}
}		
?>
