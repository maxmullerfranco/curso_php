<?php 
$a = 10;
$b = 11;
$c = 15;
$d = 20;

if($a<=$b){
  echo "A menor ou igual a B<br>";
}
if($c<=$d){
  echo "C menor ou igual a D<br>";
}
if($d<=$a){
  echo "C menor ou igual a D<br>";
}else{
  echo "D maior que A";
}
?>