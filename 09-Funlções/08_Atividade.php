<?php 
$x = [];
for($i=0;$i<=30;$i=$i+1){
  array_push($x, $i);
}
function array_Maior_Que_Sete($array){
  $array_Retorno = [];
  
  for($j=0;$j<count($array); $j++){
    if($array[$j]>7){
      array_push($array_Retorno, $array[$j]);
    }
  }
  return $array_Retorno;
}
$novoArray = array_Maior_Que_Sete($x);
print_r($novoArray);

?>