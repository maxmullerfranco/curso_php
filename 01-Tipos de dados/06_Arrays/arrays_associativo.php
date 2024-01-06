<?php 
$carro = [
'marca' => 'Jeep', 
'ano' => '2023',
'velocidade_max' => '240',
'capacidade' => '5',
'blindado' => true
];

print_r($carro);
$marca = $carro['marca'];
$velocidade_maxima = $carro['velocidade_max'];
echo "<br>";

echo "O carro e da marca $marca e atinge no maximo $velocidade_maxima km/h";

?>
<?php 
$pessoa = [
'nome' => 'Maxmuller',
'idade' => '32',
'trabalho' => 'Programador',
'formacao' => 'Desenvolvedor mobile',
'classe' => 'junior',
'tenpo_de_carreira' => '01'
];
$idade = $pessoa['idade'];
$nome = $pessoa['nome'];
echo "<br>";
if($idade>17){
  echo "$nome e maior de idade";
}else{
  echo "$nome e menor de idade";
}
?>