<?php 
//8. O lojão do brás está vendendo seus produtos em 5 prestações sem juros. Faça um algoritmo que receba o valor de uma compra e mostre o valor das prestações.

// função recebe os parâmetros, realiza a ação atribuida com os valores e armazena é retorna o resultado em uma variável.
//Em seguida, a função retorna a resposta calculada.
function parcela_Sem_Juros($compra, $quantidade_De_Parcela){
  $parcela = $compra / $quantidade_De_Parcela;
  return $parcela;
}
//Estas linhas obtêm os valores dos parâmetros valor_01 e valor_02 da query string da URL usando $_GET.
$compra = $_GET['compra'];
$quantidade_De_Parcela = $_GET['quantidade_de_parcela'];

//Aqui, a função parcela_Sem_Juros é chamada com os valores da URL. O resultado é armazenado na variável $parcela_Sem_Juros.
$parcela_Sem_Juros = parcela_Sem_Juros($compra,$quantidade_De_Parcela);


//Exibe o resultado na página, formatando os valores com number_format() para melhor apresentação.
echo "Valor do iten: " , $compra = number_format($compra, 2, ',', '.') . " <br> Quantidade de parcelada: $quantidade_De_Parcela <br> Valor de cada parcela: " . $parcela_Sem_Juros = number_format($parcela_Sem_Juros, 2, ',', '.');

echo '<p><button onclick="history.go(-1);">Voltar</button></p>';
?>