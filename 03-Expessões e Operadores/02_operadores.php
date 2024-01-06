<?php 
echo "Operadores <br>";
echo "+, -, *, **, /, ++, >, <, >=, <= e etc...<br>";
echo "<br>";

?>
<?php 
echo "Atividade";
$e= 2;
$a = 10;
$b = 20;
$c = 50;
$raiz = 25;
$cubo = 125;

$soma = $a + $b + $c;
$subtracao = $a - $b - $c;
$divisao = $a / $b / $c;
$soma_divisao = ($a+$b)/$c;
$subtracao_divisao = ($a-$b)/$c;
$divisao_soma = ($a/$b)+$c;
$expoente = ($a+$b)**$e;
$raiz = $raiz ** (1/2);
$cubo = $cubo ** (1/3);

echo "Soma: $soma <br>";
echo "Subtração: $subtracao <br>";
echo "Divisão: $divisao <br>";
echo "Soma e divisão: $soma_divisao <br>";
echo "Subtração e divisao: $subtracao_divisao <br>";
echo "Divisão e soma: $divisao_soma <br>";
echo "Expoente: $expoente <br>";
echo "Raiz quadrada: $raiz <br>";
echo "Raiz ao cubo: $cubo";
?>