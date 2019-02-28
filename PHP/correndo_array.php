<?php

$noticia = array();

$noticia[1]['titulo'] = "titulo da noticia 1";
$noticia[1]['conteudo'] = "conteudo dessa noticia 1";

$noticia[2]['titulo'] = "titulo da noticia 2";
$noticia[2]['conteudo'] = "conteudo dessa noticia 2";

$noticia[3]['titulo'] = "titulo da noticia 3";
$noticia[3]['conteudo'] = "conteudo dessa noticia 3";

/*
//com white
$idx = 1;
while ($idx <=3) {

	echo $noticia[$idx]['titulo'];
	echo "<br>";
	echo $noticia[$idx]['conteudo'];
	echo "<br>";
	
	$idx = $idx +1;
}
*/

/*
//com do/while
$idx = 1;
do {
	echo $noticia[$idx]["titulo"];
	echo "<br>";
	echo $noticia[$idx]["conteudo"];
	echo "<br>";

	$idx = $idx +1;
} while ($idx < 4);
*/

for($idx = 1; $idx <= 4; $idx = $idx + 1){ 

	echo $noticia[$idx]['titulo'];
	echo "<br>";
	echo $noticia[$idx]['conteudo'];
	echo "<br>";
}

?>