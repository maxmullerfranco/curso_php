<?php 
/**Crie uma função chamada countVowels que recebe uma string como parâmetro.
A função deve retornar a quantidade de vogais presentes na string.
Utilize uma estrutura de repetição para percorrer cada caractere da string.
Utilize uma variável para armazenar o contador de vogais.
Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.
*/
function count_Vowels($a){
  $contador = 0;
  
  $a  = strtolower($a);
  //A função strlen() em PHP é usada para obter o comprimento de uma string, ou seja, o número de caracteres que a string contém.
  for($i = 0;$i < strlen($a); $i++){
      $caractere = $a[$i];
      //A função strpos() em PHP é usada para encontrar a primeira ocorrência de uma substring dentro de uma string maior. Ela retorna a posição (índice) do primeiro caractere da primeira ocorrência da substring na string principal. Se a substring não for encontrada, strpos() retornará false.
      if (strpos("aeiou", $caractere)!== false){
          $contador++;
      }
  }
  return $contador;
}

$a = "Olá, mundo! Esta é uma frase de exemplo.";
echo "Quantidade de Vogais: " . count_Vowels($a);
?>