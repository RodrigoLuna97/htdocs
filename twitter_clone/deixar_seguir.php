<?php 

session_start();

if (!isset($_SESSION['usuario'])) {
	header('Location: index.php?erro=1');
	}

require_once('classe_conexao.php');

$id_usuario = $_SESSION['id_usuario']; 
$deixar_seguir_id_usuario = $_POST['deixar_seguir_id_usuario'];

if($id_usuario =='' AND $deixar_seguir_id_usuario == ''){
die();
}

$objBanco = new banco();
$link = $objBanco->conecta_mysql();

$sql = "DELETE from seguidores where id_usuario = $id_usuario and seguindo_id_usuario = $deixar_seguir_id_usuario" ;

mysqli_query($link, $sql);


?>