<?php 
echo "Operador ternário <br>";
//(?) Compardor como if e else
echo 20>10 ? "<br>Deu true: 20>10<br>" : "Deu false <br>";
//(:) Compardor como if e else
echo 0>10 ? "Deu true: 0>10 <br>" : "Deu false: 0>10 <br>";

echo "<br>Operador ternário, usadando variável <br>";
$a = 10;
$b = 5;

//(?) Compardor como if e else
echo $a>$b ? "Deu true: $a>$b <br>" : "Deu false: $a>$b <br>";

//(:) Compardor como if e else
echo $a === $b ? "Deu true: $a === $b <br>" : "Deu false: $a === $b <br>";

//(?) Compardor como if e else
echo $a===$b && 10 > 5 ? "Deu true: $a===$b && 10 > 5 <br>" : "Deu false: $a===$b && 10 > 5 <br>";

//(?) Compardor como if e else
echo $a===$b || 10 > 5 ? "Deu true: $a===$b || 10 > 5 <br>" : "Deu false: $a===$b || 10 > 5 <br>";
?>