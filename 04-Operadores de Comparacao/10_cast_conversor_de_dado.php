<?php 
$a = (int) "123";

echo $a . "<br>";
echo $a + 10 . "<br>";

if($a === 123){
  echo "Variavel <strong>A</strong> (string) se tornou (intero) com a função cast. <br>";
}
//Cuidado com a pontuação
$b = (float) "3.14";
if($b === 3.14){
  echo "Variavel <strong>B</strong> (string) se tornou (float) com a função cast. <br>";
 }else{
  echo "Deu erro <br>";
 }

 $c = (string) 34;
 if($c === "34"){
  echo "Variavel <strong>C</strong> (string) se tornou (float) com a função cast. <br>";
 }

echo "<br>Atividade<br>";

$a = (int) "Testando" ;
$b = (int) "12,9" ;
$c = (int) "5";
$d = (int) true;
$e = (int) false;
echo "01: Frase para inteiro $a <br>";
echo "02: Float para inteiro $b<br>";
echo "03: Número em string para inteiro $c<br>";
echo "04: True para inteiro $d<br>";
echo "05: false para inteiro $e<br>";

$f = (int)[1,2,3,4,5];
echo "06: Arrey para inteiro <br>"; 
?>