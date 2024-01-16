<?php 
// Impar decrescente
$x=20;
function estruturaWhileImpar($x){
  //Condição
  while($x > 0){
    //Condição detro de outra condição
    if($x % 2 !=0){
      echo $x ; //. "<br>";
    }
    //Decremento
    $x--;
  }
  }  
  //print na tela
  echo "Impar (-1) <br>";
  //Print da função
  $teste = estruturaWhileImpar($x);
  echo "<br>";

// Par crescente  
  $x=0;
  function estruturaWhilepar($x){
    
    while($x < 20){
      if($x % 2 ==0){
        echo $x ; //. "<br>";
      }
      $x++;
    }
    }  
    echo "Par (+1)<br>";
    $teste = estruturaWhilepar($x);
    echo "<br>";
  ?>