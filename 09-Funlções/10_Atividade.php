<!--Crie uma função;
Ela deve receber um parâmetro de nome e idade;
Imprima "Olá eu sou NOME e tenho idade$idade anos de idade;"
-->
<?php 

function nome_E_Idade($nome, $idade){
  if(is_string($nome)){
    if(is_int($idade) && $idade >0 && $idade<200){
    echo htmlspecialchars("Olá eu sou o $nome e tenho $idade anos de idade.") . "<br>";
  }else{
    echo "Coloque um apenas números inteiros";
  }
}else {
  echo "Coloque apeas letras";
}
}

$nome = "Maxmuller";
$idade = 32;

echo nome_E_Idade($nome, $idade);
echo nome_E_Idade("Raquel", 36);
echo nome_E_Idade("Zico", 76);

?>