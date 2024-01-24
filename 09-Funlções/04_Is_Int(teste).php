<?php 

function velocidade_Maxima($vel){
  if(is_int($vel)){
    echo "O carro atinge a velocidade máxima de $vel km/h <br>";
  }else{
    echo "Por favor, passe um número inteiro";
  }
}
$velocidade = 120;
velocidade_Maxima(270);
velocidade_Maxima($velocidade);
//PHP ignora parâmetros desnecessários;
velocidade_Maxima(420, 300, 200, 100);
velocidade_Maxima("270");
echo "Testando";

?>