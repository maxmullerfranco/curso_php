<?php 
// 5 !== 4 (false)
// 3 != "3" (true)

$a = 1;
$b = "1";
$c = 5;
$d = 3;
$string = "String";

if($a !== 1){
  echo "Não e identico 01<br>";
}else{
  echo "E identico 01 <br>";
}

if($a !== $b){
  echo "Não e identico 02<br>";
}
if($c !== $d){
  echo "Não e identico 03<br>";
}
if($c !== $c){
  echo "Não e identico 04<br>";
}else{
  echo "E identico 04<br>";
}
if($b !== $string){
  echo "Não e identico 05<br>";
}
?>