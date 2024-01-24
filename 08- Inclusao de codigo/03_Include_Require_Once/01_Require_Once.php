<?php 
//Com o once os arquivos não se repetem
require_once "teste_2.php";
require_once "teste_2.php";
require_once "teste_2.php";
//Sem o once os arquivos podem se repetir
require "testando_2.php";
require "testando_2.php";
require "testando_2.php";
?>
<p>Testando código</p>