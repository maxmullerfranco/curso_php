<!--Podemos passar parâmetro que já possuem um valor pré-determinado;
Então caso você não passe este parâmetro, o valor default entra em cena;
A função será executada normalmente com o valor definodo;
function teste ($a="padrão"){ código }
Uma variável com o campo preenchido e conciderado como Default.
$a ="Teste";
-->
<?php 
function teste($a = "Teste"){
  echo "O valor de A é: $a <br>";
}

teste();
teste("asd");
/*
Gera erro, porque o parâmetro $a está primeiro e tem um valor. 

function testando($a  ="x", $b){
  echo "O valor de A é: $a e de B é $b <br>";
}
testando("1");
testando("1", "2");
* */

//Sempre colocar os valores Defaut a direita
//Sempre os obrigatorios a esquerda, sempre vem primeiros que os Defaut 
function testando($b, $a  ="x"){
  echo "O valor de A é: $a e de B é $b <br>";
}
testando("2");
testando("2", "1");
?>