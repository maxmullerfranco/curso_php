<!--Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.
A função deve verificar se o número fornecido é um número primo.
Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.
Caso o número fornecido seja menor que 2, retorne false.
Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne false. Caso contrário, retorne true.-->

<?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Exemplos de uso
echo isPrime(5) ? 'true <br>' : 'false <br>';  // true
echo "\n";
echo isPrime(16) ? 'true <br>' : 'false <br>'; // false
echo "\n";
echo isPrime(23) ? 'true <br>' : 'false <br>'; // true

?>

<?php 
function isPrimo($numero){
  // Itera sobre cada número no array fornecido
  foreach($numero as $number){
    // Verifica se o elemento atual é um número inteiro
    if(is_int($number)){
      // Verifica se o número é maior ou igual a 2, pois os números primos são maiores ou iguais a 2
      if($number >= 2){
        $primo = true;
        // Itera de 2 até a raiz quadrada do número para verificar se é primo
        //A função sqrt() em PHP é usada para calcular a raiz quadrada de um número. "Sqrt" é a abreviação de "square root", que significa "raiz quadrada" em inglês.
        for($i = 2; $i <= sqrt($number); $i++){
          // Verifica se o número é divisível por algum número diferente de si mesmo e 1
          if($number % 2 == 0){
            $primo = false;
            break;
          }
        }
        // Se a variável $primo permanecer verdadeira, o número é primo
        if($primo){
          echo "Número $number é primo. <br>";
        } else {
          // Se a variável $primo for alterada para falso, o número não é primo
          echo "Número $number não é primo. <br>";
        }
      } else {
        // Se o número for menor que 2, não é primo
        echo "Número $number não é primo. <br>";
      }
    } else {
      // Se o elemento atual não for um número inteiro, exibe uma mensagem de erro
      echo "Coloque um número inteiro. <br>";
    }
  }
}

$numero = [1,2,3,4,5,6,7,8,9,10, 213, 448, 1089824983, 34, 200, 71];
// Chama a função isPrimo() para verificar se os números no array são primos
isPrimo($numero);
?>