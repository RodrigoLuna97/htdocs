<?php 

session_start();

if (!isset($_SESSION['usuario'])) {
	header('Location: index.php?erro=1');
	}

require_once('classe_conexao.php');

$texto_tweet = $_POST['texto_tweet'];
$id_usuario = $_SESSION['id_usuario']; 

if($texto_tweet =='' AND $id_usuario == ''){
die();
}

$objBanco = new banco();
$link = $objBanco->conecta_mysql();

$sql = "INSERT into tweet (id_usuario, tweet) values ($id_usuario, '$texto_tweet') ";

mysqli_query($link, $sql);


?>