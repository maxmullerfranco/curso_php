<!--Crie uma função chamada define_Cor_Carro;
Onde há um parâmetro chamado cor, com valor default de vermelha;
Retorne a cor do carro;
Imprima o retorno tanto com parâmetro default, como também definindo a cor; 
-->
<?php 
function cor_Do_Carro($cor = "Roxo Escuro"){
  return "A cor do carro é: $cor";
}
$carro_Roxo_Escuro = cor_Do_Carro();
echo $carro_Roxo_Escuro . "<br>";

$carro_Verde = cor_Do_Carro("Verde");
echo $carro_Verde;

$carro_Azul = cor_Do_Carro("Azul");
echo $carro_Azul;
?>