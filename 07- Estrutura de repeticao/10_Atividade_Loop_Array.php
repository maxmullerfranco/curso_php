<?php 
$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$i=0;
function loopArray($arr, $i){
  while($i <count($arr)){
    $numeroAtual = $arr[$i];
    if($arr[$i] == 30 || $arr[$i] == 40){
      $i++;
      continue;
    }
    echo "Elemento $arr[$i] <br>";
    $i++;
  }
}

$loopArray = loopArray($arr, $i);
?>