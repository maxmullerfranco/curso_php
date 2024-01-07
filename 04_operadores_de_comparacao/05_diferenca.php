<?php 
// 3 != 4 true
// 3 != 3 false
$a = 3;
$b = 4;

if($a != $b){
  echo "Teste de diferença variavel e variavel (true)<br>";
}

if($a != 3){
  echo "Teste de diferença (true)<br>";
}else{
  echo "Teste de diferença variavel númro (false)<br>";
}

if($a != "3"){
  echo "Teste de diferença (true)<br>";
}else{
  echo "Teste de diferença retorno variavel string (false)<br>";
}

if($a != 10){
  echo "Teste de diferença variavel e número (true)<br>";
}

if($a != $b){
  echo "Teste de diferença (false)<br>";
}
?>