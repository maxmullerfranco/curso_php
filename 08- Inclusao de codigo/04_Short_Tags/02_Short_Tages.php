<?php 
// Exibição de conteúdo;
//Co uma técnica semelhante a short tags, podemos exibir conteúdo som o echo;
//Ótima estratégia para resumir as chamadas PHP apenas para exibição de valores;

$nome = "Maxmuller";
?>
<main>
  <form action="">
    <div>
      <!--Apenas para imprimir pode ser utilizada <?=$variável;?>-->
      <input type="text" value="<?=$nome;?>">
    </div>

    <div>
      <button type="submit">Enviar</button>
    </div>
  
  </form>
</main>

