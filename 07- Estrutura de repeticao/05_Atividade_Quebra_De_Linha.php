<?php 
//Variáveis
$x=4;
$y=30;
//Variável para finalizar execussão
$stop = 24;
//Função com parametro
function paraLoop($x, $y, $stop){
  //Laço de repetição com variáveis
  while($x < $y){
    echo "Número $x <br>";
    //condição de execussão do loop
    if($x === $stop){
    echo "Finalizando no númro 24<br>";
    //Finalizar
    break;
  }
  //Contador de 2 em 2
  $x = $x+2;   
  }

}
// Informa a versão de cada loop
echo "Número X= $x <br>";
$teste = paraLoop($x, $y, $stop);
$x = 1;
echo "<br>Fim do loop <br><br>";

// Informa a versão de cada loop
echo "Número X= $x <br>";
$teste = paraLoop($x, $y, $stop);
$x = 2;
echo "<br>Fim do loop <br><br>";

// Informa a versão de cada loop
echo "Número X= $x <br>";
$teste = paraLoop($x, $y, $stop);
$x = 3;
echo "<br>Fim do loop <br><br>";

// Informa a versão de cada loop
echo "Número X= $x <br>";
$teste = paraLoop($x, $y, $stop);
$x = 5;
echo "<br>Fim do loop <br><br>";

// Informa a versão de cada loop
echo "Número X= $x <br>";
$teste = paraLoop($x, $y, $stop);
echo "<br>Fim do loop <br><br>";
?>