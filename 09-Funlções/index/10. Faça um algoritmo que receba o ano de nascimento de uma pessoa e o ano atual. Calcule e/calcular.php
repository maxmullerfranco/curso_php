<?php 
//10. Faça um algoritmo que receba o ano de nascimento de uma pessoa e o ano atual. Calcule e mostre a idade dessa pessoa e quantos ela terá em 2035.

// função recebe os parâmetros, realiza a ação atribuida com os valores e armazena é retorna o resultado em uma variável.
//Em seguida, a função retorna a resposta calculada.
function idade_Futura($idade_Atual,$futuro, $ano){
  $futuro = $futuro - $ano;
  $idade= $idade_Atual+$futuro;
  return $idade;
}
//Estas linhas obtêm os valores dos parâmetros valor_01 e valor_02 da query string da URL usando $_GET.
$idade_Atual = $_GET['idade_Atual'];
//Este parâmetro já está com valor atribuido.
$futuro = 2035;
//Este parâmetro já está com valor atribuido.A função date('Y') retorna o ano atual em formato de quatro dígitos.
$ano = date('Y');
//Aqui, a função idade_Futura é chamada com os valores da URL. O resultado é armazenado na variável $idade_Futura.
$idade_Futura = idade_Futura($idade_Atual,$futuro, $ano);

echo "Sua idade em 2035 será $idade_Futura";

echo '<p><button onclick="history.go(-1);">Voltar</button></p>';
?>
