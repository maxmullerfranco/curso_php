<!--Crie uma função que recebe um array de itens de supermercado;
Retorne este array em forma de string, separado em vírgulas;
-->
<?php 
$itens = ['Sabão', 'Café', 'Shampoo', 'Arroz', 'Feijão'];

function supermercado($arr){
  $lista = "Você está levando este item ";
  for($i=0;$i<count($arr);$i++){
    if($i + 1 == count($arr)){
        $lista .= "$arr[$i]. ";
      }else{
        $lista .= "$arr[$i], ";
      }
  }
  return $lista;
}
echo supermercado($itens);
?>