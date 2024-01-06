<?php 
echo "Apartir de 02 inteiros gera um float. <br>
Ou a união de dois inteiros gera um string.<br> Nome do recurso e <strong>auto cast</strong>. <br>"
;

$a;
$b;

echo 5/2; 
echo "<br>";

if(is_float(5/2)){
  echo "É float";
}
echo "<br>";
// inteiro com concatenação
echo 2 . 3;
echo "<br>";
//auto cast transformou inteiro em string
if(is_string(2 . 3)){
  echo "É string <br>";
}


$nome = "Maxmuller";
$sobrenome = "Ferreira Franco";
//Concatenação para unir um ao outro e utilizado ponto " . "
$nome_completo = $nome ./* <-Concatenando */ " " ./* <-Concatenando */ $sobrenome;

//Com a concatenação uniu 02 strings
echo $nome_completo;
echo "<br>";

?>