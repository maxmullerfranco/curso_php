<?php 
//9. Faça um algoritmo que receba um salário informado pelo usuário, apresente um novo salário com o aumento de 21%.

// função recebe os parâmetros, realiza a ação atribuida com os valores e armazena é retorna o resultado em uma variável.
//Em seguida, a função retorna a resposta calculada.
function aumento_Salario($salario, $porcentagem){
  $porcentagem = $porcentagem * 0.01;
  $aumento = ($salario * $porcentagem) + $salario;
  return $aumento;
}
  //Estas linhas obtêm os valores dos parâmetros valor_01 e valor_02 da query string da URL usando $_GET.
  $salario=$_GET['salario'] ;
  $porcentagem=$_GET['porcentagem'];
  //Aqui, a função aumento_Salario é chamada com os valores da URL. O resultado é armazenado na variável $aumento_Salario.
  $aumento_Salario = aumento_Salario($salario, $porcentagem);
  $aumento_Salario = number_format($aumento_Salario,2, ",",".");
  $salario= number_format($salario,2,",",".");
   echo "<p>Valor do salário $salario com aumento de " . $porcentagem . "% <br> $aumento_Salario";

   echo '<p><button onclick="history.go(-1);">Voltar</button></p>';
?>
