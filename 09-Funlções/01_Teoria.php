<?php 
/*
Função são códigos que possuem nomes;
Realizam uma ação e podem ser reaproveitadas(Chamadas novamente) ao longo do programa;
Podemos passar paramêtros para funções, que moldam a sua execução;
A criação de funções reduz a duplicidade de código;
E também melhora a manutenção do mesmo;

O PHP posui diversas funções prontas, que podemos utilizar;
O PHP tem diversas funções para utilizarmos no nosso código;
EX: strlen, strtoupper, strolower, print_r, var_dump;
* */

function teste(){
  // Código;
}
teste();

// Ex:

function soma(){
  $x=4;
  $y=2;
  echo $x+$y . "<br>";
}
//chamando função;
soma();

// Função do php;
echo strtoupper("Testando strtoupper");  

?>