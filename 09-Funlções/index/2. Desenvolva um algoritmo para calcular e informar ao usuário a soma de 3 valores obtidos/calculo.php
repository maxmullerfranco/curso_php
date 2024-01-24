<?php 
//2. Desenvolva um algoritmo para calcular e informar ao usuário a soma de 3 valores obtidos no teclado e o produto desses três valores.
//Estas linhas obtêm os valores dos parâmetros valor_01, valor_02 e valor_03 da query string da URL usando $_GET
$valor_01 = $_GET['valor_01']?? 0;
$valor_02 = $_GET['valor_02']?? 0;
$valor_03 = $_GET['valor_03']?? 0;

// função recebe os parâmetros, realiza a ação atribuida com os valores e armazena é retorna o resultado em uma variável.
//Em seguida, a função retorna a resposta calculada.
function soma($valor_01, $valor_02, $valor_03){
  $atction = $valor_01 + $valor_02 + $valor_03;
  return $atction;
}

function multipicacao($valor_01, $valor_02, $valor_03){
  $atction = $valor_01 * $valor_02 * $valor_03;
  return $atction;
}


//Aqui, a função soma é chamada com os valores obtidos da URL. O resultado é armazenado na variável $soma.
$soma = soma($valor_01, $valor_02, $valor_03);
//Retornando a soma para print na tela
echo "<br> A soma dos 03 valores $valor_01 + $valor_02 + $valor_03 e igual a $soma <br>";
//Criando uma variável para a função
$multiplicacao = multipicacao($valor_01, $valor_02, $valor_03);
//Finalmente, o código imprime na tela algumas informações sobre a transação.
echo "<br> A multiplicação dos 03 valores $valor_01 x $valor_02 x $valor_03 é igual a $multiplicacao <br>";

echo '<p><button onclick="history.go(-1);">Voltar</button></p>';
?>