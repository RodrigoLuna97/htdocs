<?php 

/*
//isset()
$valor = 1;
if (isset($valor)){
echo "variável iniciada";
}
*/

/*empty
true -> '', 0, '0', false, null, array()
false -> qualquer outro valor

$valor = '';
if(empty($valor)){
	echo "variavel vazia";
}
*/

/*is_numeric*/
$valor = '120';
if(is_numeric($valor)){
echo "valor numero";
}
?>