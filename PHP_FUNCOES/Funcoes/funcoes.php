<?php

//função sem retorno
function exibirBoasVindas($nome="indefinido"){
 	echo "Bem vindo ao curso php, ".$nome;
 } 
//função com retorno

 function calcularSoma($n1, $n2){
 	return $n1+$n2;
 }
echo calcularSoma(3,5);
 ?>