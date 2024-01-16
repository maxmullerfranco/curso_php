<?php 
//Variável
$x= 0;
//Função com parâmetro
function parandoLoop($x){
//Laço de repetição
  while($x<10){
  echo "0 X é $x <br>";
 //Condição dentro do laço de repetição
  if($x === 5){
    echo "Teste tando loop <br>";
    //Parar com o laço de repetição 
    break;
  }
  //contador 
$x++;
}}
//Chamando função
$var = parandoLoop($x);
// Informativo para saber quando saíu do loop
echo "Saíu do loop <br>";
?>