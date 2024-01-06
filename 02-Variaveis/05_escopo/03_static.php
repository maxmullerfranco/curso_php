<?php 
function teste(){
  $a = 0;
  $a++;

  echo "$a <br>";
}

teste();
teste();
teste();

function teste_02(){
  //static o escopo vai ser mantido, e o valor vai ser incrementado ou decrementado, depende do código.
  //Com static o valor e mantido entre chamada de função.
  //Não se utiliza muitas funções com variáveis static mas e possível.     
  static $a = 0;
  $a++;

  echo "$a <br>";
}
teste_02();
teste_02();
teste_02();

echo "<br>";

echo "<br>";

echo "<br>";

?>