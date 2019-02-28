<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>
 <?php 

//array

 //$mensagens['a'] = 'OLÁ, TUDO BEM?';
 //$mensagens['b'] = 'Opa, fala ai vei';
 //$mensagens[3] = 'Irineu, você não sabe e nem eu!';
 //$mensagens[4] = 'ISSO AQUI É UM TESTE';


$mensagens = array(
	 'a' => 'OLÁ, TUDO BEM?', 
	 'b' => 'Opa, fala ai vei',
	 '3' => 'Irineu, você não sabe e nem eu!',
	 '4' => 'ISSO AQUI É UM TEST'
	);


// modos de impressão de array 
// var_dump e print_r quando a posição do array n é definida
// echo é para quando a posição é conhecida

var_dump($mensagens);
echo "<br>";

//echo $mensagens['a'];

?>
</body>
</html>