<?php 
  include_once "back_End.php";
?>

  <h1>Seja bem-Vindo ao nosso site</h1>
  <p><?=$nome;?> Veja as nossas ofertas</p>

  <h2>Confira nossos principais produtos:</h2>
  <ul>
    <?php
      foreach($produtos as $produto):?>
    <li><?=$produto?></li>
    <?php  
      endforeach;
    ?>
  </ul>
