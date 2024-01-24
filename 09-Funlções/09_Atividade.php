<!--Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.

A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.

Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.-->
<?php 
function sum_Even_Numbers($n) {
  if (!is_int($n) || $n <= 0) {
      return "Por favor, forneça um número inteiro positivo.";
  }
  $num = 0;
  for ($i = 1; $i <= $n; $i++) {
      if ($i % 2 === 0) {
          $num += $i;
      }
  }
  return $num;
}
$numero = 10;
$resultado = sum_Even_Numbers($numero);
echo "A soma dos números pares até $numero é: $resultado";
?>