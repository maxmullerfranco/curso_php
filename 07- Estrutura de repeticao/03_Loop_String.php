<?php 
//array para 10 parametros global
$arr = [5, "Max", true, false, "Opa", 12.8, "Teste", true, [], "Palavra", 10, "Aló"];
//variavel global, count = número de itens igual ao comprimento dele
$x = count($arr);
$y=0;
//função para imprimir strings
function imprimirString($arr, $x, $y) {
//laço de repetição, condição while
  while($y < $x){
  //Comparador de string, condição if dentro da condição whilw
    if(is_string($arr[$y])){
      //impresão da condição if
    echo $arr[$y] . "<br>";
  }
  //incremento para o laço de repetição
  $y++;
}}
//Print da função na tela
$teste = imprimirString($arr, $x, $y);
?>