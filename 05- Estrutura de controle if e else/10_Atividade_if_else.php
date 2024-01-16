<?php 
$velocidade_maxima = 40;
$motorista = 27;
$velocidade_coreta = "Motorista está na velocidade correta.<br>";
$velocidade_alerta = "Cuidado, velocidade limite atingida.<br>";
$velocidade_multa = "Motorista mutado. <br>";

if($motorista<$velocidade_maxima){
  echo $velocidade_coreta;
}elseif($motorista==$velocidade_maxima){
  echo $velocidade_alerta;
}else{
  echo $velocidade_multa;
}

$motorista = 40;
if($motorista<$velocidade_maxima){
  echo $velocidade_coreta;
}elseif($motorista==$velocidade_maxima){
  echo $velocidade_alerta;
}else{
  echo $velocidade_multa;
}

$motorista = 60;
if($motorista<$velocidade_maxima){
  echo $velocidade_coreta;
}elseif($motorista==$velocidade_maxima){
  echo $velocidade_alerta;
}else{
  echo $velocidade_multa;
}

?>