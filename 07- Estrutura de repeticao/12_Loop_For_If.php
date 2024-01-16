<?php 
//Variáveis
$idade=32;
$nome ="Max";

//função
function loop_For($idade, $nome){
  //Contador; condição; Incremento/Decremento 
  for($i=0;$i<=10;$i=$i+1){
    //Print na tela com contador
    echo "Testando for $i <br>";
  if($i == 4){
    echo "Nome: $nome <br> Idade: $idade <br>";
  }
  if($i == 8){

    break;
  }
  }
}
//função sendo chamada
$loop_For = loop_For($idade, $nome);

?>