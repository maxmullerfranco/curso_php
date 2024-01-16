<?php 
// Array
$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
//Loop for, count e muito usado para array
for($i=0;$i<count($arr); $i=$i+1){
  //Array [contador], operador de moodulo % resto da divisão de 2 se for == 0 e par, se não for e impar 
  if($arr[$i] % 2 == 0){
    //Print
    echo "Número: $arr[$i] <br>";
  }
}
?>