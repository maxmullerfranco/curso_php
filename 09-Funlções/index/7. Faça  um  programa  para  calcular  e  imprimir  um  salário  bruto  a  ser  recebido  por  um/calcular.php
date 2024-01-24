<?php 
//7. Faça  um  programa  para  calcular  e  imprimir  um  salário  bruto  a  ser  recebido  por  um funcionário em um mês. O programa deve utilizar os seguintes dados: Número de horas que o funcionário trabalhou no mês e o valor recebido por hora de trabalho.

// função recebe os parâmetros, realiza a ação atribuida com os valores e armazena é retorna o resultado em uma variável.
//Em seguida, a função retorna a resposta calculada.
function salario_Bruto($semana_01, $semana_02, $semana_03, $semana_04, $semana_05, $valor_Hora){
  $horas_Trabalhada = ($semana_01 + $semana_02 + $semana_03 + $semana_04 + $semana_05);
  $salario = $horas_Trabalhada * $valor_Hora;
  return $salario;
}

$valor_Hora = $_GET['valor_Hora'] ;
//Aqui, são inicializadas as variáveis que irão acumular as horas trabalhadas em cada semana do mês. Essas variáveis são definidas como zero no início para garantir que elas estejam vazias antes de começar a acumular as horas.
$semana_01 = 0;
$semana_02 = 0;
$semana_03 = 0;
$semana_04 = 0;
$semana_05 = 0;

//Inicia um loop que percorre cada dia do mês (considerando um mês de 31 dias).
for ($dia = 1; $dia <= 31; $dia++) {
  /*$campo_dia = 'dia_' . str_pad($dia, 2, '0', STR_PAD_LEFT);
Cria o nome da variável correspondente ao dia atual no loop. Por exemplo, para o dia 1, $campo_dia seria 'dia_01'.* */
  $campo_dia = 'dia_' . str_pad($dia, 2, '0', STR_PAD_LEFT);
  
   /*$valor_dia = isset($_GET[$campo_dia]) ? $_GET[$campo_dia] : '00:00';
Obtém o valor da hora para o dia atual do loop a partir da superglobal $_GET. Se o valor não estiver definido (ou seja, o usuário não forneceu esse valor), é atribuído '00:00' como um valor padrão.* */
  $valor_dia = isset($_GET[$campo_dia]) ? $_GET[$campo_dia] : '00:00';
 

  //DateTime::createFromFormat: Cria um objeto DateTime a partir de uma string de acordo com o formato especificado.
  //'H:i': Especifica o formato da string que está sendo passada ('H' representa a hora e 'i' representa os minutos).
  //Portanto, essa linha cria um objeto DateTime que representa a hora fornecida em $valor_dia.
  //$valor_dia: A string de hora no formato H:i (24 horas).
  $hora = DateTime::createFromFormat('H:i', $valor_dia);

  /*$semana_01 += ($dia <= 7) ? $hora->format('H') : 0;
$semana_01: Variável acumuladora para armazenar o total de horas da semana 01.*/
  $semana_01 += ($dia <= 7) ? $hora->format('H') : 0;

/*($dia <= 7) ? $hora->format('H') : 0;: Usa um operador ternário para verificar se o dia está na semana 01 (de 1 a 7). Se for verdadeiro, adiciona as horas ao total ($hora->format('H')), caso contrário, adiciona zero.
O mesmo padrão é repetido para as semanas 02, 03, 04 e 05, onde cada semana abrange um intervalo específico de dias.* */
  $semana_02 += ($dia > 7 && $dia <= 14) ? $hora->format('H') : 0;
  $semana_03 += ($dia > 14 && $dia <= 21) ? $hora->format('H') : 0;
  $semana_04 += ($dia > 21 && $dia <= 28) ? $hora->format('H') : 0;
  $semana_05 += ($dia > 28) ? $hora->format('H') : 0;

  $horas_Trabalhada = ($semana_01 + $semana_02 + $semana_03 + $semana_04 + $semana_05);
}

$salario_Bruto= salario_Bruto($semana_01, $semana_02, $semana_03, $semana_04, $semana_05, $valor_Hora);
$salario_Bruto = number_format($salario_Bruto, 2, ',', '.');
echo "Salário de $salario_Bruto , com um total $horas_Trabalhada de horas trabalhadas no valor de $valor_Hora";

echo '<p><button onclick="history.go(-1);">Voltar</button></p>';
?>
