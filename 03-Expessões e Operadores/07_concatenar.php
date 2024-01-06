<?php 
echo "<strong>Testando a concatenação <br></strong>";

$variavel = "qualquer coisa que possa unir " . 123 . " " . 123.5 . " sempre que tiver um ponto está concatenando ";

echo "Concatenar e a forma " . "de juntar textos, " . "strings ou " . $variavel . "sem limites";
?>

<?php 
echo "Novo teste <br>";
$marca = "VW";
$motor = 1.6 . " Turbo";
$cor = "Unica";


echo "<br> A marca do carro é " . $marca . ", o motor " . $motor . " e tem uma cor " . $cor . "<br>";

echo " <br> Caso a frase termine com . (concatenador) e ; (fechamento) irá apresentar erro de sintax. <br>";

// echo "<br> A marca do carro é " . $marca . ", o motor " . $motor . " e tem uma cor " . $cor . ;
?>