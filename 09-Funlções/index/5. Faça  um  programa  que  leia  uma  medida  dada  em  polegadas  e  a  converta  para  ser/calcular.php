<?php 
//5. Faça  um  programa  que  leia  uma  medida  dada  em  polegadas  e  a  converta  para  ser equivalente em sistema métrico. 1 Polegada = 25,4 milímetros.

// função recebe os parâmetros, realiza a ação atribuida com os valores e armazena é retorna o resultado em uma variável.
//Em seguida, a função retorna a resposta calculada.
  function polegada($converter, $milimetro){
    $polegadas = $milimetro * $converter;
    return $polegadas;  
  }
    //Este parâmetro já está com valor atribuido.
    $milimetro = 25.4;
    //Essa linha está obtendo valores da query string da URL usando $_GET. O operador de coalescência nula (??) é utilizado para definir o valor padrão como 0 caso o parâmetro não seja fornecido na URL. Isso ajuda a evitar mensagens de erro caso os parâmetros não estejam presentes.
    $converter = $_GET['converter']??0;
    //A função é chamada com os valores. O resultado é armazenado na variável $polegada.
    $polegada = polegada($converter, $milimetro);
    //Finalmente, o código imprime na tela algumas informações sobre a transação.
    echo "Polegadas colocado foi $converter que foi convertida em $polegada milímetros <br>";

    echo '<p><button onclick="history.go(-1);">Voltar</button></p>';
  ?>