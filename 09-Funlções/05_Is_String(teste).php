<?php 

function descreverAnimal($nome, $raca){
  if(is_string($nome)){
    if(is_string($raca)){
      echo "O $nome é um $raca <br>";
    }else{
      echo "Coloque uma string";
    }
  }else{
    echo "Coloque uma string";
  }
}

descreverAnimal("Bob", "Vira lata");
$nome = "Rex";
$raca = "Pitbull";
descreverAnimal($nome, $raca);
descreverAnimal("Shark", 12);
?>