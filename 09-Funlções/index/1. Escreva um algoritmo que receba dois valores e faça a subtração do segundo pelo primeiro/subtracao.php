<?php 
//1. Escreva um algoritmo que receba dois valores e faça a subtração do segundo pelo primeiro.
//Função para calcular os valores

// função recebe os parâmetros, realiza a ação atribuida com os valores e armazena é retorna o resultado em uma variável.
//Em seguida, a função retorna a resposta calculada.
function subtracao($valor_01, $valor_02){
  $resposta = $valor_01 - $valor_02;
  return $resposta;
}
//Estas linhas obtêm os valores dos parâmetros valor_01 e valor_02 da query string da URL usando $_GET.
$valor_01 = $_GET['valor_01'];
$valor_02 = $_GET['valor_02'];

//Aqui, a função subtracao é chamada com os valores da URL. O resultado é armazenado na variável $subtracao.
$subtracao = subtracao($valor_01, $valor_02);
//Finalmente, o código imprime na tela algumas informações sobre a transação.
echo "Valor $valor_01 - valor $valor_02 é igual a $subtracao";

echo '<p><button onclick="history.go(-1);">Voltar</button></p>';
?>