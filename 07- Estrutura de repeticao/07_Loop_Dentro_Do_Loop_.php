<?php 
$x = 0;
$y = 1;
//Função de loop dentro de loop com variável global
function loopMaisLoop($x, $y){
  // Loop 01
  while($x < 10){
    echo "Número $x <br>";
    $x++;
    
//Loop 02
    while($y <5){
      echo "Y $y deu certo iiihhhhuuuuhhhuuuu<br>";
      $y++;
// Loop 03 variável interna
$z=3;
    while($z <9){
        echo "Z $z deu certo Bagacera <br>";
        $z=$z+1;
      }
    }
  }
}
//imprimir os loops
$teste = loopMaisLoop($x, $y);
echo "Teste";
?>