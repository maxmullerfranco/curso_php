<?php 
echo "Concatenador de comparação &&, ||, ! <br>";

echo "<br> && (AND) checa as duas comparações. <br> 
Os 02 lados da operação tem que ser verdadeiros, as duas precisa ser verdadeira. <br>";

echo "<br> || (OR) checa as duas comparações. <br> Checar se uma das operações e verdadeira, necessario que apenas 01 seja verdadeira. <br>";

echo "<br> ! (NOT) checa as duas comparações. <br> 
Retornar contrario do que a operação apresentou. <br>
Se a operação for verdadeira ele retornara false, e vice-verso <br> <strong>Inversão do valor boleano</strong><br>";

?>

<?php 
$a = 1;
$b = 2;
$c = "3";
$d = "PHP";
$e = "PHP";
$f = 1;
echo "<br> <strong>Atividade 01 &&</strong> <br>";
//As 02 tem de ser verdadeiro para retornar verdadeiro
if($a<$b && $d == $e){
  echo "<br>Deu certo (&&) (true)<br>";
}

if($a>=$b && $d == $e){
  echo "<br>Deu certo (&&)<br>";
}else{
  //Basta apenas 01 ser falso para retornar falso
  echo "Teste da tabela da verdade (&&) (false) <br>";
}



echo "<br> <strong>Atividade 02 (||)</strong> <br>";

if($a>$b || $d == $e){
  //Para ser verdadeiro basta apenas 01 ser verdadeiro
  echo "<br>Deu certo (||) (true)<br>";
}

if($a>$b || $d != $e){
  echo "<br>Deu certo (||) (true)<br>";
}else{
  // Os dois tem que se falso
  echo "Teste da tabela da verdade (||) (false) <br>";
}


echo "<br> <strong>Atividade 03 (!)</strong> <br>";

if ($a<$b){
  //Verdadeiro
  echo "<br>Deu certo (!) (true)<br>";
}

if (!($a<$b)){
  //Verdadeiro
  echo "<br>Deu certo (!)<br>";
}else{
  echo "Inversão de verdadeiro para falso usando (!) (false)<br>";
}
?>