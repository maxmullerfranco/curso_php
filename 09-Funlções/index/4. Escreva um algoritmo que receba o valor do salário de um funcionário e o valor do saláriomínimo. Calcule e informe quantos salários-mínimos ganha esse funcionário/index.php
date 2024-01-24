<?php 
//4. Escreva um algoritmo que receba o valor do salário de um funcionário e o valor do saláriomínimo. Calcule e informe quantos salários-mínimos ganha esse funcionário.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4. Escreva um algoritmo que receba o valor do salário de um funcionário e o valor do saláriomínimo. Calcule e informe quantos salários-mínimos ganha esse funcionário.</title>
</head>
<body>
  <h1>4. Escreva um algoritmo que receba o valor do salário de um funcionário e o valor do saláriomínimo. Calcule e informe quantos salários-mínimos ganha esse funcionário.</h1>
    <?php
    //$salario_Minimo: Define o valor do salário mínimo.
        $salario_Minimo = 1_380.60;
    //$salario: Obtém o valor do salário da query string da URL usando $_GET. Se não houver um valor especificado, assume o valor do salário mínimo.    
        $salario = $_GET['salario']?? $salario_Minimo;
    ?>
      <main>
        <h1>Informe o salário</h1>
          <!--Formulário com servidor interno utilizando PHP e HTML em apenas 01 página-->
          <!--Um formulário HTML que utiliza o método GET e envia os dados para a mesma página ($_SERVER['PHP_SELF']).-->
          <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <!--Título para informar o dado que será coletado. Cada campo possui um rótulo (<label>) e um atributo for que associa o rótulo ao campo correspondente.-->
            <label for="salario">Digito o salário, para saber quantos salário mínimo recebe (R$)</label>
            <!--Um campo de entrada (<input>) permite ao usuário inserir o valor do salário.-->
            <input type="number" name="salario" id="salario" value="0" min="0" step="0.01">
            <!--O valor atual do salário mínimo é exibido para referência.-->
            <!--Parágrafo-->
            <p>Considerando o salário mínimo de <strong>$<?=number_format($salario_Minimo, 2, ",", ".")?></strong></p>
            <!-- Esses valores são enviados para o arquivo calculo.php quando o formulário é submetido-->
            <input type="submit" value="Calcular">
          
          </form>

      </main>
      <section>
        <h2>Resultado Final</h2>
          <?php
          //Calcula o número total de salários mínimos que o salário informado representa usando intdiv().
            $total = intdiv($salario, $salario_Minimo);
          //Calcula a diferença entre o salário e os salários mínimos completos usando o operador %.
            $diferenca = $salario % $salario_Minimo;
          //Exibe o resultado na página, formatando os valores com number_format() para melhor apresentação.
            echo "<p>Quem recebe um salário de R$ <strong>" . number_format($salario, 2, ",", ".") . "</strong> ganha $total salários minimos + R$ <strong>" . number_format($diferenca, 2, ",", ".") . "</strong></p>";
          
            ?>
      </section>
      <button onclick="history.go(-1);">Voltar</button>
</body>
</html>