<?php 
//Não sáo acessiveis dentro de função.
//E declarada fora da função.
//Escopo Global
$teste = "asd";
echo "$teste Teste Global 01 <br>";

if(5>2){
  $teste = "dsa";
//Escopo Global
  echo "$teste Teste if <br>";
}

//Escopo Global
echo "$teste Teste Global 02 <br>";

function funcao(){
  //Escopo local
  $teste = "xsxs";
  echo "$teste Testando função <br>";
}
funcao();
echo "<br>";

function testando_global(){
  //Escopo local
  global $teste;
  // Se eu altera aqui dentro a variável ela irá chamar a última variável criada.
  // $teste = 02;
  // Variável comentada, para ser usada só remover o comend. 
  echo "$teste Global função <br>";
}

testando_global();
echo "<br>";

//Escopo Global
$teste = 1234567890;

function testando_global_02(){
  //Escopo local
  global $teste;
  echo "$teste Global função <br>";
}

testando_global_02();
echo "<br>";
echo "<br>";

?>