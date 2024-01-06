<?php 
$x = 10;
// Variável aparece quado for colocada em qualquer chamada
echo "$x Global <br>";

//Variável da função aparecera apenas quando for chamada
function teste(){
  $x = 5;
  echo "$x Local <br>";
}


teste();
echo "<br>";
// Variável aparece quado for colocada em qualquer chamada
echo "$x Global <br>";

// Uma não interfere na outra, sempre serão separadas na chamada
teste();
echo "<br>";

function testando(){
  $x = 12;
  echo "$x Local 02 <br>";
}

//Cada variável terá seu proprio escopo, uma não altea a outra.

$x = 100;
testando();
teste();

echo "$x Global <br>";

?>