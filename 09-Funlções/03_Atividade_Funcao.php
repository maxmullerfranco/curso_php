<?php 

function produto_Quantidade($preco, $produto){
  $valor = $preco * $produto;
  return $valor;
}

$produto = 10;
$preco = 5;

$produto_Quantidade = produto_Quantidade($preco, $produto);

//Finalmente, o código imprime na tela algumas informações sobre a transação.
  echo "Total de $produto produtos <br>";
  echo "Valor unitário de cada produto $preco <br>";
  echo "Valor a pagar $produto_Quantidade";

  echo '<p><button onclick="history.go(-1);">Voltar</button></p>';
?>