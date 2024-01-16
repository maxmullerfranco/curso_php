<?php 
/**
 * Comparação de Números 
 * Escreva uma função chamada compararNumeros que recebe dois números inteiros como parâmetros.
 * A função deve comparar os dois números e retornar uma string indicando qual número é maior ou se são iguais.
 * Considere as seguintes condições:
 * Se o primeiro número for maior que o segundo número, retorne a string "O primeiro número é maior."
 * Se o segundo número for maior que o primeiro número, retorne a string "O segundo número é maior."
 * Se os números forem iguais, retorne a string "Os números são iguais."
 */

 function compararNumeros($primeiro_numero, $segundo_numero){
  if(is_int($primeiro_numero) && is_int($segundo_numero)){
  if($primeiro_numero===$segundo_numero){
      return "Os números são iguais.";
  }elseif($primeiro_numero>$segundo_numero){
      return "O primeiro número é maior.";
  }else{
      return "O segundo número é maior.";
  }
}else{
  return "Opção colocada não valida, coloque um número inteiro.";
}
}

$primeiro_numero = 20;
$segundo_numero = 10;

$resultado = compararNumeros($primeiro_numero, $segundo_numero);
echo $resultado;
?>