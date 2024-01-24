<?php 
//6. Escreva um algoritmo que calcule a área de um trapézio qualquer, lembrando que:  
// Área do trapézio =( Base Maior + Base Menor ) ∗ Altura 
//                                2

// função recebe os parâmetros, realiza a ação atribuida com os valores e armazena é retorna o resultado em uma variável.
//Em seguida, a função retorna a resposta calculada.
function trapezio($base_Maior, $base_Menor, $altura){
  $trapezio = (($base_Maior+$base_Menor)*$altura) /2;
  return $trapezio; 
}

//Essas linhas estão obtendo valores da query string da URL usando $_GET. O operador de coalescência nula (??) é utilizado para definir o valor padrão como 1 caso o parâmetro não seja fornecido na URL. Isso ajuda a evitar mensagens de erro caso os parâmetros não estejam presentes.
$base_Maior = $_POST['base_Maior']??1;
$base_Menor = $_POST['base_Menor']??1;
$altura = $_POST['altura']??1;
//Aqui, a função teapezio é chamada com os valores da URL. O resultado é armazenado na variável $teapezio.
$trapezio = trapezio($base_Maior, $base_Menor, $altura);
//Finalmente, o código imprime na tela algumas informações sobre a transação.
echo "Área do trapézio = $trapezio";

echo '<p><button onclick="history.go(-1);">Voltar</button></p>';
?>
