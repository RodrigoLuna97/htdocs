<?php 

session_start();

if (!isset($_SESSION['usuario'])) {
	header('Location: index.php?erro=1');
	}

require_once('classe_conexao.php');

$id_usuario = $_SESSION['id_usuario']; 
$seguir_id_usuario = $_POST['seguir_id_usuario'];

if($id_usuario =='' AND $seguir_id_usuario == ''){
die();
}

$objBanco = new banco();
$link = $objBanco->conecta_mysql();

$sql = "INSERT into seguidores (id_usuario, seguindo_id_usuario) values ($id_usuario, $seguir_id_usuario) ";

mysqli_query($link, $sql);


?>