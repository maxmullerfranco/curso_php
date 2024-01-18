<?php 
//Função em php para ser chamada de uma pasta.
$idade = 12;
echo "A idade é $idade <br>";

//Testando que uma include pode ser puxada de dentro de outra include ou require.
//Acessando pasta anteriores utiliza este formato logo a baixo.
include __DIR__ . "/../testando.php"

?>