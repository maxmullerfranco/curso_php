<?php 
//Com o once os arquivos não se repetem
include_once "teste.php";
include_once "teste.php";
include_once "teste.php";
//Sem o once os arquivos podem se repetir
include "testando.php";
include "testando.php";

?>
<p>Testando código</p>