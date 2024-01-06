<?php 
$str = "Max";
$num = 12;

if(is_string($str)){
  echo "E uma string $str <br>";
}

if(is_string($num)){
  echo "E uma string $str <br>";
}

if(is_string("Teste")){
  echo "E uma string Teste <br>";
}

if(is_string(12)){
  echo "E uma string Teste <br>";
}
?>