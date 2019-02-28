<?php 

class veiculo{

//public
//private
//protected

private $placa;
private $cor;
protected $tipo = "caminhão";

public function setPlaca($placa){
	//validaçao da placa
	$this->placa=$placa;	
    }

public function getPlaca(){
	return $this->placa;
    }
}

$veiculo = new veiculo();
$veiculo->setPlaca("CAS123");
echo $veiculo->getPlaca();



class carro extends veiculo
{
	public function exibirTipo()
	{
		echo $this->tipo;
	}
}

$carro = new carro();
$carro->exibirTipo();

 ?>