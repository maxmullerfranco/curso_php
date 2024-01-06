<?php 
echo "Incremento (++) ou decremento (--) <br>";
$n = 100;
$x = 100;
$n++;
$x = $x + 1;

echo "x: " . $x . "<br>";
echo "n: " . $n . "<br>";

$x--;
$n = $n - 1;

echo "x: " . $x . "<br>";
echo "n: " . $n . "<br>";

echo "<br> Novo teste <br>";
$n+3; //Não funciona
$x = $x + 3;

echo "x: " . $x . "<br>";
echo "n: " . $n . "<br>";
 
$n-5; //Não funciona
$x = $x - 5;

echo "x: " . $x . "<br>";
echo "n: " . $n . "<br>";
?>