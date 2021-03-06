<?php 

session_start();

if (!isset($_SESSION['usuario'])) {
	header('Location: index.php?erro=1');
	}

	require_once('classe_conexao.php');

	$id_usuario = $_SESSION['id_usuario']; 

$objBanco = new banco();
$link = $objBanco->conecta_mysql();

$sql = "SELECT  date_format(t.data_inclusao, '%d %b %Y %T') as data_inclusao_formatada, t.tweet, u.usuario from tweet as t JOIN usuarios as u on (t.id_usuario = u.id) where id_usuario = $id_usuario or id_usuario  IN (select seguindo_id_usuario from seguidores where id_usuario=$id_usuario) order by data_inclusao desc ";

$resultado_id = mysqli_query($link, $sql);

if ($resultado_id) {
	while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
		echo '<a href="$" class="list-group-item">';
		echo '<h4 class="list-group-item-heading">'.$registro['usuario'].' <small> '.$registro['data_inclusao_formatada'].'</small></h4>';
		echo '<p class="list-group-item-text">'.$registro['tweet'].' </p>';
		echo '</a>';
	}
} else {
	echo "Erro na consulta de tweets no banco de dado";
}

 ?>
