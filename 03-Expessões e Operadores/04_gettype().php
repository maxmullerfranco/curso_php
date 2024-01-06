<?php 
//teste de expreção

$a = "5";
$b = 12;

$c = $a * $b;

echo gettype($a * $b), "<br>";
echo gettype($c) . "<br>";
echo $c . "<br>";
echo gettype([]) . "<br>";
echo gettype(12.2) . " ou folat" . "<br>";
echo gettype("Teste") . "<br>";
echo gettype(true) . "<br>";
echo gettype(340) . "<br>";
?>