<?php 

$nomes = ["Maxmuller" , "Glau", "Maria", "Victor"];
//foreach($array as $iten)
//Estrutura foreach e orientada a array
// Menos margem de erro pois repete em cada elemento
foreach($nomes as $nome){

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