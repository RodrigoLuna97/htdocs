<?php 

//classe mãe ou super classe


class Felino  {
	
	var $mamifero = "sim";

	function correr(){
		echo "correr como felino";
		
	}
}

//classe filha ou subclasse

class Chita extends Felino{

	//polimorfismo e herança
	function correr(){
		echo "correr como chita 100km/h";
	}
}

$Chita = new Chita();

echo $Chita->mamifero . "<br>";
$Chita -> correr();

 ?>
