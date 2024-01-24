<?php 
//Global
$a = 10;
$b = 15;
function teste_Escopo(){
  $a=5;
  global $b;

  static $c = 0;
  $a++;
  $b++;
  $c++;
  //Local não salva o valor;
  echo "Escopo LOCAL A: $a <br>";
  // Global salva o valor e amplia com ++;
  echo "Escopo LOCAL lançado GLOBAL B: $b <br>";
  //Static salva o valor e amplia com ++; 
  echo "Escopo STATIC de C: $c <br>";

}
echo "Escopo GLOBAL A2: $a <br>";
echo "Escopo LOCAL lançado GLOBAL B: $b <br>";

teste_Escopo();

echo "Escopo LOCAL lançado GLOBAL B: $b <br>";

teste_Escopo();

?>