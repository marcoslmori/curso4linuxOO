<?php
// relacionais.php
echo 'operadores relacionais sao utilizados para realizar comparacoes entre valores ou expressoes, resultando sempre um valor booleano (true ou false)';
echo '<br />';
echo '1)-----------------------------';
echo '<br />';

if ($a = 5) {
	echo 'essa operacao atribui 5 a variavel $a';
}

echo '<br />';
echo '2)-----------------------------';
echo '<br />';
$a = 1234;
$b = '1234';
if ($a == $b){
	echo '$a e $b sao iguais';
}
else if ($a != $b){
	echo '$a e $b sao diferentes';
}

echo '<br />';
echo '3)-----------------------------';
echo '<br />';

$c = 1234;
$d = '1234';

if ($c === $d){
	echo '$c e $d sao iguais do mesmo tipo';
}
if ($c !== $d){
	echo '$c e $d sao de tipos diferentes';
}

echo '<br />';
echo '4)-----------------------------';
echo '<br />';
echo 'O PHP considera o valor 0 como sendo falso em comparacoes logicas'; 
echo '<br />';


$e = 0 ;
// testa a variavel eh false
if ($e == FALSE){
	echo 'eh falso';
}

//testa se a variavel eh um false e do tipo booleano

if ($e === FALSE){
	echo '$e eh false e do tipo booleano';
}
// testa se $e igual a zero e do mesmo tipo que zero
if ($e === 0){
	echo ' $e eh zero mesmo';
}



