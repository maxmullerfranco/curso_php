<!--
A função str_split() em PHP serve para dividir uma string em um array de caracteres. Isso significa que ela recebe uma string como entrada e retorna um array onde cada elemento do array é um caractere da string original.
Por exemplo, se você tiver a string "hello", str_split("hello") retornará um array com os elementos "h", "e", "l", "l" e "o".
-->
<?php 
function sumDigits($numero){
  if(is_int($numero)){
    $y = 0;
    $x = str_split($numero);
    $y +=(int)$x;
      
  }else {
      echo "Coloque um número inteiro por gentileza";
  }
  return $y;
}
$numero = 1234;
$sumDigits = sumDigits($numero);
echo "O resultado do número $numero é $sumDigits";
?>
