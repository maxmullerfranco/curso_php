<?php 
$peso_limite = 80;
$peso01 = 50.45;
$peso02 = 85.23;
$peso03 = 79.34;
$resposta = "Peso dentro do limite<br>";
$resposta_acima_do_peso = "Excedeu o limite de peso<br>";

if($peso_limite < $peso01){
  echo $resposta_acima_do_peso;
}else{
  echo $resposta;
}

if($peso_limite < $peso02){
  echo $resposta_acima_do_peso;
}else{
  echo $resposta;
}

if($peso_limite < $peso03){
  echo $resposta_acima_do_peso;
}else{
  echo $resposta;
}

?>