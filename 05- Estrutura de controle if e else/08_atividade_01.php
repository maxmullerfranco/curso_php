<?php 
$numero = 10;
$numero02 = 51;
$string = "string";

if(is_int($string)){
  $stringif = $string *= 2;
  echo "$string x 2 e igual a " . $stringif . "<br>";

  if ($string < 100){
    echo "$string multipicado por 2 ainda em menor que 100<br>";
  }else{
    echo "$string multipicado por 2 é maior que 100<br>";
  }
}else{
  echo "Não e um número, escolha um número<br>";
}

if(is_int($numero)){
  echo $numero;
  $numero = $numero *= 2;
  echo " x 2 e igual a " . $numero . "<br>";

  if ($numero < 100){
    echo "Mesmo o número sendo multipicado por 2 ainda em menor que 100<br>";
  }else{
    echo "$numero multipicado por 2 é maior que 100<br>";
  }
}else{
  echo "Não e um número, escolha um número<br>";
}

if(is_int($numero02)){
  echo $numero02;
  $numero02 = $numero02 *= 2;
  echo " x 2 e igual a " . $numero02 . "<br>";

  if ($numero02 < 100){
    echo "Mesmo o número sendo multipicado por 2 ainda em menor que 100<br>";
  }else{
    echo "Número multipicado por 2 é maior que 100<br>";
  }
}else{
  echo "Não e um número, escolha um número<br>";
}
?>