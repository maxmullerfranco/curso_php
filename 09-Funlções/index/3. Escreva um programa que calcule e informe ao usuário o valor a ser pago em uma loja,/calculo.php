<?php 
//3. Escreva um programa que calcule e informe ao usuário o valor a ser pago em uma loja, recebendo como entradas, o preço do produto e o número de unidades compradas.

// função recebe os parâmetros, realiza a ação atribuida com os valores e armazena é retorna o resultado em uma variável.
//Em seguida, a função retorna a resposta calculada.
function produto_Quantidade($preco, $produto){
  $valor = $preco * $produto;
  return $valor;
}

//Essas linhas estão obtendo valores da query string da URL usando $_GET. O operador de coalescência nula (??) é utilizado para definir o valor padrão como 0 caso o parâmetro não seja fornecido na URL. Isso ajuda a evitar mensagens de erro caso os parâmetros não estejam presentes.
$produto = $_GET['produto']??0;
$preco = $_GET['preco']??0;

//Aqui, a função produto_Quantidade é chamada com os valores da URL. O resultado é armazenado na variável $produto_Quantidade.
$produto_Quantidade = produto_Quantidade($preco, $produto);

//Finalmente, o código imprime na tela algumas informações sobre a transação.
  echo "Total de $produto produtos <br>";
  echo "Valor unitário de cada produto $preco <br>";
  echo "Valor a pagar $produto_Quantidade";

  echo '<p><button onclick="history.go(-1);">Voltar</button></p>';
?>