<?php 
$a = 10;
$b = 5;
$c = 2;

if(10>2){
  echo "Teste do operador logico (true) <br>";
}

if($a === 10 && $b == 5){
  echo "<br> Teste do operador logico com escopo global (true) <br>";
}

$d = "<br>Deu certo buscando variável global (true)<br>";

if($a > $c){
  echo $d;
}
?>