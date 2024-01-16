<?php 
//Crescente
function estrutura_While($x){
  //Condição
while($x <= 10){
  echo $x; //"<br>";
  //Incremento
  $x = $x +1;
}}
//Decrescente
function estrutura_While_Menos($y){
  //Condição
while($y >= 0){
  echo $y; //"<br>";
  //Decremento
  $y = $y -1;
}}

//Crescente
$x = 0;
echo "(+1) <br>";
$teste = estrutura_While($x);
echo "<br>";
//Decrescente
$y = 10;
echo "(-1) <br>";
$teste = estrutura_While_Menos($y);
echo "<br>";

//Crescente 02
function estrutura_While_2($x){
while($x <= 10){
  echo $x ; //"<br>";
  $x = $x +2;
}}

//Decrescente 02
function estrutura_While_Menos_2($y){
while($y >= 0){
  echo $y ; //"<br>";
  $y = $y -2;
}}
$x = 0;
echo "(+2)<br>";
$teste = estrutura_While_2($x);
echo "<br>";

$y = 10;
echo "(-2)<br>";
$teste = estrutura_While_Menos_2($y);
echo "<br>";

?>
 
