<?php 
function retorno($n1,$n2){
  return $n1 + $n2;
}

echo retorno(4,4) . "<br>";
$x=retorno(10,20);
echo $x . "<br>";

$y = retorno($x, 200);
echo $y . "<br>";

$z = retorno($y, 1000);
echo $z . "<br>";

function retorno_2(){
  return "Testando retorno string";
}

$t = retorno_2();
echo $t . "<br>";

function retorno_3($n1,$n2){
  return $n1 ** $n2;
}

echo "4 ** 2: " . retorno(4,2) . "<br>";
$n1 = 5;
$n2 = 2;

$resposta = retorno_3($n1,$n2);

echo "n1 ** n2: $resposta  <br>";

?>