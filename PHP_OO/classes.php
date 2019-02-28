<?php 

/*
class Pessoa{

	//atributos
	var $nome;

	//getters e setters
	function setNome($nome_definido){
		$this -> $nome = $nome_definido;
	}
	
	function getNome(){
		return $this -> $nome;
	}
}

$pessoa = new Pessoa();

$pessoa -> setNome("Rodrigo");
echo $pessoa -> getNome();
*/


class Carro{

	//atributos do carro
	var $marca;
	var $cor;
	var $ano;

	//getters e setters do carro

	function setCarro($marcaC, $corC, $anoC){
		$this->marca = $marcaC;
		$this->cor = $corC;
		$this->ano = $anoC;
	}

	function getMarca(){
		return $this->marca;
	}

	function getCor(){
		return $this->cor;
	}

	function getAno(){
		return $this->ano;
	}

}

//instancia a classe carro em uma nova variável, chama a nova variavel e seta o carro com cada atributo. Depois da um echo com a variável e chama cada get.
$veiculo = new Carro();

$veiculo->setCarro("FORD<br>","Branco<br>","2010<br><br>");

echo $veiculo->getMarca().$veiculo->getCor().$veiculo->getAno();



class Pessoa{

	var $nome;
	var $idade;
	var $nacionalidade;

	function setPessoa($nome, $idade, $nacionalidade){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->nacionalidade = $nacionalidade;
	}

	function getNome(){
		return $this->nome; 
	}
	function getIdade(){
		return $this->idade;
	}
	function getNacionalidade(){
		return $this->nacionalidade;
	}
}


$pessoa = new Pessoa();

	$pessoa -> setPessoa("Rodrigo<br>","22<br>","Brasileiro<br><br> ");

	echo $pessoa->getNome().$pessoa->getIdade().$pessoa->getNacionalidade();




	class Computador{

		var $cpu;
		var $memoria;
		var $placa;


		function setComputador($cpu, $memoria, $placa){
			$this->cpu = $cpu;
			$this->memoria = $memoria;
			$this->placa = $placa;
		}

		function getCpu(){
			return $this->cpu;
		}
		function getMemoria(){
			return $this->memoria;
		}
		function getPlaca(){
			return $this->placa;
		}

	}

	$pc = new Computador();

	$pc -> setComputador("INTEL I5<br>","HYPER X 8GB<BR>","ASUS");

	echo $pc->getCpu().$pc->getMemoria().$pc->getPlaca();

 ?>


