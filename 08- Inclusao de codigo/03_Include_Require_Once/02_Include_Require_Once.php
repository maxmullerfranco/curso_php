<?php 
//require_once Não irá repetir se já tiver require_once com o mesmo arquivo
include_once "teste.php";
include_once "teste_2.php";
//Sem o once os arquivos podem se repetir
include "testando.php";
include "testando.php";
 
//require_once Não irá repetir se já tiver include_once com o mesmo arquivo
require_once "teste_2.php";
require_once "teste.php";

//Sem o once os arquivos podem se repetir
require "testando_2.php";
require "testando_2.php";
require "testando_2.php";
?>
<p>Testando código</p>