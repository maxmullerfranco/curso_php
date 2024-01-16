<?php 
$a = 10;
while($a > 0){

  if($a == 5 || $a ==7){
    echo "pulou a execução $a<br>";
    $a = $a-1;
    continue;
  }

  if($a == 2){
    echo "Fim do loop breack";
    break;

  }
  echo "Executando o loop <br>";
  $a --;
}
?>