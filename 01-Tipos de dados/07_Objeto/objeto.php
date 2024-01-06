<?php 
class Pessoa {
  function falar(){
    echo "Hello World";
  }
}

$maxmuller = new Pessoa();

$maxmuller->nome = "Maxmuller";
echo "$maxmuller->nome";
echo "<br>";
$maxmuller->falar();

?>