<?php 
//como a dentro do for o contador já e colocado, a variável fica inutilizada
$i=0;
//função
function loopFor($i){
  //Contador; condição; Incremento/Decremento 
  for($i=0;$i<=10;$i=$i+1){
    //Print na tela com contador
    echo "Testando for $i <br>";
  }}
//função sendo chamada
$loopFor = loopFor($i);

echo "<br>";
//como a dentro do for o contador já e colocado, a variável fica inutilizada
$i=5;
//função sendo chamada com variável de valor diferente
$loopFor = loopFor($i);

?>