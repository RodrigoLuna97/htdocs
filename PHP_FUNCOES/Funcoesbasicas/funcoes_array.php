<?php

/*is_array

$array = array();
$retorno = is_array($array);

if ($retorno) {
	echo "verdadeiro";
} else {
	echo "falso";
}
*/

/*in_array

$array = array("mac", "linux", "windows");
$retorno = in_array("mac",$array);

if ($retorno) {
	echo "verdadeiro";
} else {
	echo "falso";
}
*/

/*array_keys

$produtos = array(10=>"notebook", 11=>"teclado");
$chaves_array= array_keys($produtos);

var_export($chaves_array);

*/

/*sort

$frutas = array(0=>"banana", 1=>"amora",2=>"carambola");

sort($frutas);
var_export($frutas);
*/

/*a_sort 

$frutas = array(0=>"banana", 1=>"amora",2=>"carambola");

asort($frutas);
var_export($frutas);

*/

/*count

$frutas = array(0=>"banana", 1=>"amora",2=>"carambola");

$intens_array = count($frutas);
echo $intens_array;

*/

/*array_merge

$array1 = array("mac", "linux");
$array2 = array("windows");
$array3 = array("solaris");

$novo_array = array_merge($array1, $array2, $array3);

var_export($novo_array);
*/

//explode

$string = "20/10/2020";
$retorno = explode("/", $string);

//implode

$nova_string = implode("-", $retorno);
echo $nova_string;

?>