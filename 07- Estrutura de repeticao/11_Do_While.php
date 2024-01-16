<?php 

function do_While_0_A_10(){
$x = 0;
$nome = "Max";
do{
  echo "Testando do while $x <br>";

  if($x == 2){
    echo $nome . "<br>";
  }
  $x= $x+1;
}while($x <10);
}
$nome = "Maxmuller";
$i = 10;
function do_While_10_A_0($i, $nome){
  do{
    echo "Testando do while 02 <br>";
    if($i == 2){
      echo $nome . "<br>";
    }
    $i=$i-1;
  }while($i>0);
}
$do_While = do_While_0_A_10();
echo "<br>";
$do_While = do_While_10_A_0($i, $nome);
?>