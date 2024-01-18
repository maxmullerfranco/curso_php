<p>Testando Require</p>
<?php 
//Require para chamar outro arquivo que está na mesma pasta
require "teste.php";
?>
<!--Parágrafo em html-->
<p>Arqeuivo do Include</p>

<?php 
// Include para chamar outro arquivo que está na mesma pasta
include "arquivos/funcao.php";
// Tanto o require quanto o include pode chamar pasta precisa utilizar o nome da pasta / nome do arquivo que quer chamar
?>

