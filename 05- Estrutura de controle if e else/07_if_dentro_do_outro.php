<?php 
$a = 10;
$b = 2;
$c = "Teste (true)<br>"; 
$d = "Teste dentro do teste (true)<br>";

if($a > $b){
  echo $c;
  if($c = $c){
    echo $d;
  }
}

if($a > $b){
  echo $c;
  if($c = $d){
    echo "Entrou no if 2°<br>";
  }else{
    echo "Entrou no else 2°<br>";
  }
}

if($b > $a){
  echo $c;
  if($c = $d){
    echo "Entrou no if 2°<br>";
  }else{
    echo "Entrou no else 2°<br>";
  }
}else{
  echo "Entrou no primeiro else<br>";
}

$escopo_global = 10;
if($a > $b){
  echo $c;
  if($c = $c){
    echo "Entrou no if 2° <br>";
    echo $escopo_global . "<br>";
  }else{
    echo "Entrou no else 2°<br>";
  }
}else{
  echo "<br>Entrou no primeiro else<br>";
}
?>