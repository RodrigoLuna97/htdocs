<?php

if (isset($_POST["nome"]) AND empty($_POST["nome"])){
	echo "Preencha o nome completo! <br>";
}
if (isset($_POST["cpf"]) AND empty($_POST["cpf"])){
	echo "Preencha o CPF! <br>";
}
if (isset($_POST["cpf"]) AND !is_numeric($_POST["cpf"])){
	echo "Apenas numero no CPF <br>";
}

?>


<form method="post" action="">
	<label>
		Nome completo*:
	<input type="text" name="nome">
	</label>

	<label>
		CPF*:
	<input type="text" name="cpf">
	</label>

	<input type="submit" value="cadastrar">
</form>