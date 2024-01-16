
<?php
 /*Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.

A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.

Considere as seguintes categorias e seus respectivos descontos:

"eletrônicos": 10% de desconto.

"vestuário": 20% de desconto.

"alimentos": 5% de desconto.

Outras categorias: nenhum desconto.

Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.

O valor do produto e a categoria serão sempre fornecidos como argumentos da função.* */

function calcularDesconto($valor, $categoria){
    switch ($categoria) {
        case "eletrônicos":
            $desconto = 0.10;
            break;
        case "vestuário":
            $desconto = 0.20;
            break;
        case "alimentos":
            $desconto = 0.05;
        default:
            $desconto = 0.00;
            break;
    }

$valorComDesconto = $valor - ($valor * $desconto);
return $valorComDesconto;
}
$categoria = "eletrônicos";
$valor = 4500;

$desconto = calcularDesconto($valor, $categoria);
 echo $desconto . "<br>";

 $categoria = "vestuário";
$valor = 4500;

$desconto = calcularDesconto($valor, $categoria);
 echo $desconto . "<br>";

 $categoria = "alimentos";
$valor = 4500;

$desconto = calcularDesconto($valor, $categoria);
 echo $desconto . "<br>";

 $categoria = "";
$valor = 4500;

$desconto = calcularDesconto($valor, $categoria);
 echo $desconto . "<br>";