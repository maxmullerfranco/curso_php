<?php 
$x = 10;
$y =& $x;
//Valor de uma e ligada ao valor da outra
echo "Valor de x e igual a y $y <br>";
echo "x = $x <br>";
echo "y = $y <br>";
//Caso troque o valor da referência ira alterar o valor da referenciada
echo "Tranferência de valor <br>";
$x = 15;
echo "x = $x <br>";
echo "y = $y <br>";
//Caso troque o valor da referenciada ira alterar o valor da referência
echo "Tranferência de valor <br>";
$y = 20;
echo "x = $x <br>";
echo "y = $y <br>";

//String também pode ser utilizado o mesmo sistema de referência 
$nome = "Maxmuller";

$nome2 =& $nome;
echo "$nome <br>";
echo "$nome2 <br>";
//Caso troque o valor da referência ira alterar o valor da referenciada
$nome = "Ferreira";
//Caso troque o valor da referenciada ira alterar o valor da referência
echo "$nome <br>";
echo "$nome2 <br>";

$nome2 = "Franco";

echo "$nome <br>";
echo "$nome2 <br>";
?>

