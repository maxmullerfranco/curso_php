<?php 

function par_impar($num){
  if($num % 2 == 0){
    echo "O número $num é Par <br>";
  }else{
    echo "O número $num é Impar <br>";
  }
}
par_impar(30);
par_impar(31);
$num = 7;
par_impar($num);
$num = 10;
par_impar($num);
par_impar("30");
?>