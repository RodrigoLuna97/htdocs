<!DOCTYPE html>
<html>
<head>
	<title>array multidimensional / matriz</title>
</head>
<body>
 <?php 

$tabuleiro[8]['a'] = "torre preta";
$tabuleiro[8]['b'] = "bispo preta";
$tabuleiro[8]['c'] = "cavalo preta";
$tabuleiro[8]['d'] = "rainha preta";
$tabuleiro[8]['e'] = "rei preta";
$tabuleiro[8]['f'] = "bispo preta";
$tabuleiro[8]['g'] = "cavalo preta";
$tabuleiro[8]['h'] = "torre preta";

$tabuleiro[7]['a'] = "peão preto";
$tabuleiro[7]['b'] = "peão preto"; 
$tabuleiro[7]['c'] = "peão preto";
$tabuleiro[7]['d'] = "peão preto"; 
$tabuleiro[7]['e'] = "peão preto"; 
$tabuleiro[7]['f'] = "peão preto";
$tabuleiro[7]['g'] = "peão preto"; 
$tabuleiro[7]['h'] = "peão preto";

print_r($tabuleiro);
echo "<br>";
print $tabuleiro[8]['d'];
echo "<br>";
print $tabuleiro[8]['g'];
?>
</body>
</html>