<?php 

function alterar_Dados($nome, $idade){
  $nome = "Sr. $nome";
  $idade = $idade . " anos";

  return [$nome, $idade];
}

$dados = alterar_Dados("Maxmuller", 32);
print_r($dados);
echo "<br>";

echo "Olá $dados[0], você tem $dados[1]";

?>