<?php 

$resposta01 = "É maior de idade <br>";
$resposta02 = "Não é maior de idade <br>";

$a = 10;
$b = 18;
$c = 60;
$d = 18;

if($a >= $d){
  echo $resposta01;
}else{
  echo $resposta02;
}

if($b >= $d){
  echo $resposta01;
}else{
  echo $resposta02;
}

if($c >= $d){
  echo $resposta01;
}else{
  echo $resposta02;
}

?>