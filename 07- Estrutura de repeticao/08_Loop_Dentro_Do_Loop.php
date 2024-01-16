<?php 
$x = 0;
function loopMaisLoop($x){
  while($x < 10){
    echo "Número $x <br>";
    $x++;
    
$y = 1;
    while($y <5){
      echo "Y $y deu certo iiihhhhuuuuhhhuuuu<br>";
      $y++;

$z=3;
    while($z <9){
        echo "Z $z deu certo Bagacera <br>";
        $z=$z+1;
      }
    }
  }
}

$teste = loopMaisLoop($x);
echo "Teste";
?>