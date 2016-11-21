<?php
echo 'a' . '<br>' . PHP_EOL;
echo 'b' . '<br>' . PHP_EOL;

print 'abc';

// vardump

print '<br>-------------------</br>';
print '** vardump';
print '<br>-------------------</br>';
$vetor = array('palio', 'gol', 'fiesta', 'Corsa');
var_dump($vetor);

print '<br>-------------------</br>';
print '** print_r';
print '<br>-------------------</br>';
print_r($vetor);


print '<br>-------------------</br>';
print '** variaveis';
print '<br>-------------------</br>';
$nome = "Joao";
$sobrenome = "da Silva";
echo "$sobrenome, $nome";

print '<br>-------------------</br>';
print '** variaveis variantes';
print '<br>-------------------</br>';
// define o nome da variavel
$variavel = 'nome';
// cria variavel identificada pelo conteudo de $variavel
$$variavel = 'Maria';
//exibe variavel $nome na tela
echo $nome; //resultado = Maria
print '<br>-------------------</br>';
print '** variavel tipo booleano';
print '<br>-------------------</br>';
$exibir_nome = TRUE; //declara variavel com valor true
// teste de $exibir_nome eh true
if ($exibir_nome) {
echo "Jose da Silva";
print '<br>-------------------</br>';
print '** variavel tipo booleano 2';
print '<br>-------------------</br>';
$umidade = 91; //declara variavel numerica
// teste se eh maior que 90.  retorna um booleano
$vai_chover = ($umidade > 90);
// tese se $vai_chover eh verdadeiro
if ($vai_chover) {
	echo "vai chover";
}else{
	echo "nao vai chover";
	}
}

print '<br>-------------------</br>';
print '** Tipo objeto pg 30';
print '<br>-------------------</br>';

$carro = new stdClass;
$carro->modelo = 'Palio';
$carro->ano    = '2002';
$carro->cor    = 'Azul';


print_r($carro);
print $carro->modelo . ' ';
print $carro->ano . ' ';
print $carro->cor . ' ';




?> 