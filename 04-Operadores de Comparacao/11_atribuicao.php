<?php 
echo "Operadores de atribuição <br>";
echo "Atribuidores <strong>+=, -=, /=, *= e %=</strong>";

$a = 0;
$b = 5;
$c = 10;
$d = 8;
$e = 20;

$a += 10; //a = a +10

echo "<br> A: " . $a . "<br>";

 $b -= 10;
echo "B:" . $b . "<br>"; // b = b - 10;

$c /= 2;
echo "C:" . $c . "<br>"; // c = c / 2;

$d *=3;
echo "D:" . $d . "<br>"; // d = d * 10;

$e %= 3;
echo "E:" . $e . "<br>"; // e = e % 10;

//Utilizando variáveis
$x = 10;
$fx = 20;
$x +=$fx;
echo "F: " . $x;
?>