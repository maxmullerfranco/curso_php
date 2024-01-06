<?php 
$verdade = true;
$falso = false;

echo true, "True sempre e valor 01 <br>";
echo "<br>";
echo false, "False é uma string vasia, num ou 0 <br>";
echo "<br>";

if(true){
  echo "É verdadeiro <br>";
}
if(5>2){
  echo "Teste logico <br>";
}
//Não irá aparecer
if(false){
  echo "É falso <br>";
}

if(is_bool($verdade)){
  echo "Valor bolean $verdade é true <br>";
}

if(is_bool($falso)){
  echo "Valor bolean $falso é false";
}
?>