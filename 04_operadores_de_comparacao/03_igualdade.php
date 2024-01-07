<?php 
// == Igual
// Nunca usar apenas 01 = pois este e um operador para receber dado

if(3 == 3){
  echo "Comparação verdadeira <br>";
}

if(3 == 4){
  echo "Comparação verdadeira <br>";
}else{
  echo "Comparação falsa <br>";
}

$a = 12;
$b = 12;
$c = 100;

if($a == $b){
  echo "Comparação verdadeira <br>";
}

if($a == $c){
  echo "Comparação verdadeira <br>";
}else{
  echo "Comparação falsa <br>";
}

$nome = "Maxmuller";
$nome_comparacao = "Maxmuller";
$nome_diferente = "Outro nome";

if($nome == $nome_comparacao){
  echo "Comparação de nomes verdadeira <br>";
}

if($nome == $nome_diferente){
  echo "Comparação de nomes verdadeira <br>";
}else{
  echo "Comparação de nomes falsa <br>";
}
?>