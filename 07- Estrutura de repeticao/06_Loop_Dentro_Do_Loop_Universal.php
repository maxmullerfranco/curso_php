<?php 
$x = 0;
$y = 1;
$z=3;
//Função loop dentro de loop
function loopMaisLoop($x, $y, $z){
  //Loop 01
  while($x < 10){
    echo "Número $x <br>";
    $x++;
    
    //Loop 02
    while($y <5){
      echo "Y $y deu certo iiihhhhuuuuhhhuuuu<br>";
      $y++;

      //Loop 03
    while($z <9){
        echo "Z $z deu certo Bagacera <br>";
        $z=$z+1;
      }
    }
  }
}
// Impreção dos loops
$teste = loopMaisLoop($x, $y, $z);
echo "Teste";
?>