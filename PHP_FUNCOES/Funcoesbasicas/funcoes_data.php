<?php

//date Y => 2019 y=> 19 - m -d

$data = date("d/m/Y H:i");


//strtotime 2015-02-02

$data_inicial = "2015-04-02";
$data_final = "2015-04-05";


$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_time = $time_final - $time_inicial;

$diaSegundos = 24*60*60;
$diferenca_dias = $diferenca_time / $diaSegundos;

echo $diferenca_dias;
  ?>