<?php 

class banco{

	//host
	private $host = 'localhost';
	//usuario
	private $usuario = 'root';
	//senha
	private $senha = '';
	//bando de dados
	private $database = 'twitter_clone';

public function conecta_mysql(){

	//criando a conexao
	$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

	//ajustar o charset de comunicação entre a aplicação e o banco de dados
	mysqli_set_charset($con, 'utf8');

	//verificar se houve erro de conexao
	if (mysqli_connect_errno()) {
		echo "Houve um erro ao tentar se conectar ao banco de dados MySQL: ".mysqli_connect_error();
	}
	return $con;

		}

	}

 ?>