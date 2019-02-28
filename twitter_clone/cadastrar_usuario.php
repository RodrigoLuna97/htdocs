<?php 

	require_once('classe_conexao.php');

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$objBanco = new banco();
	$link = $objBanco->conecta_mysql();

	$usuario_existe = false;
	$email_existe = false;

	//verificar se o usuário já existe
	$sql = "select * from usuarios where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link, $sql)){
		
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){
			$usuario_existe = true;
			}
		} else {
		echo("Erro ao tentar localizaar registro de usuário");
	}

	//verifica se o email já existe
	$sql = "select * from usuarios where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)){
		
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['email'])){
			$email_existe = true;
		} 

	} else {
		echo("Erro ao tentar localizaar registro de email");
	}

	if($usuario_existe AND $email_existe){

		$retorno_get = ''; 

		if ($usuario_existe) {
			$retorno_get.="erro_usuario=1&";
		}
		if ($email_existe) {
			$retorno_get.="erro_email=1&";
		}
		header('Location: inscrevase.php?'.$retorno_get);
		die();
	}

	$sql = "insert into usuarios(usuario, email, senha) values('$usuario','$email','$senha')";
	//executar a query

	if(mysqli_query($link, $sql)){
		echo "Usuário(a) cadastrado com sucesso!";
	} else {
		echo "Erro ao cadastrar usuário(a)!";
	}
 ?>