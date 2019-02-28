<?php

/*
usado para deixar maiusculo ou minusculo

//strtolower
//strtoupper
//ucfirst
$texto = "curso completo de php";
echo strtoupper($texto);

*/

//usado para controle de tamanho da streing

/*

//strlen para validar CPF

$cpf = isset($_POST['cpf']) ? $_POST['cpf']: "";
 $total_cpf = strlen($cpf);

 if($total_cpf != 11 AND $cpf != ""){
 	echo "CPF invalido";
 }


 <form method="post" action="">
 	<label> CPF:
 	<input type="text" name="cpf">
 	</label>
 	<input type="submit" value="cadastrar">
 </form>
 */

/*
//str_replace para alterar algo dentro de uma string

$texto = "114.602.224-74";
$cpf = str_replace(".", "", $texto);
$cpf = str_replace("-", "", $cpf);
echo $cpf;
*/

//sbstr para selecionar parte de uma string

$texto = "Entenda porque seu smartphone esquenta tanto, se voce  tem um smartphone.";

$noticia = substr($texto, 0, 44);
 echo $noticia."...";
 ?>