<?php 

$nomes = ["Maxmuller" , "Glau", "Maria", "Victor"];
//foreach($array as $iten)
//Estrutura foreach e orientada a array
// Menos margem de erro pois repete em cada elemento
foreach($nomes as $nome){
//O foreach é uma estrutura de controle em PHP utilizada para iterar sobre itens em um array ou elementos em um objeto. Ele permite que você percorra cada elemento de uma matriz ou objeto e execute um bloco de código para cada elemento encontrado.
//A principal utilidade do foreach é simplificar o processo de iteração sobre os elementos de uma matriz, especialmente quando você precisa apenas dos valores dos elementos e não necessariamente dos índices.

echo "O nome do índice atual é $nome <br>";
}
echo "<br>";
//Array
$nomes = ["Maxmuller" , "Glau", "Maria", "Victor"];
//foreach($array as $iten)
//Estrutura foreach e orientada a array
foreach($nomes as $nome){
  echo "O nome do índice atual é $nome <br>";
  if($nome == "Maxmuller"){
    echo "Se tornou multimilionário <br>";
  }
}
?>