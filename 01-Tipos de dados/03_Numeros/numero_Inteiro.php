<?php 
$numero_Int = 10;
$numero_Float = 9.5;
$negativo = -10;
$letra = "Hello World";
//Checando números inteiros

echo "Testando números inteiros <br>";
echo "<br>";

if(is_int($numero_Int)){
  echo "Número $numero_Int e interiro <br>"; 
}else{
  echo "Número $numero_Int não e interiro <br>";
}

if(is_int($numero_Float)){
  echo "Número $numero_Float e float <br>"; 
}else{
  echo "Número $numero_Float não e float <br>";
}

echo 200 + 300, "<br>";

if(is_int($letra)){
  echo "Palavras <strong>$letra</strong> e inteiro <br>"; 
}else{
  echo "Palavras <strong>$letra</strong> não e inteiro <br>";
}

echo "Negativo $negativo <br>";

echo "<br>";

//Checando números float

echo "Testando números float <br>";
echo "<br>";

if(is_float($numero_Float)){
  echo "Número $numero_Int e float <br>"; 
}else{
  echo "Número $numero_Int não e Float <br>";
}

if(is_float($numero_Float)){
  echo "Número $numero_Float e float <br>"; 
}else{
  echo "Número $numero_Float não e float <br>";
}

echo 200.50 + 300.75, "<br>";

if(is_float($letra)){
  echo "Palavras <strong>$letra</strong> e float <br>"; 
}else{
  echo "Palavras <strong>$letra</strong> não e float <br>";
}

?>