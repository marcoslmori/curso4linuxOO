<?php

//atribuicao.php

$var = 100;
echo 'variavel original $var = 100 <br />';


echo 'Soma de valores += ';
$var = 100;
$var += 5; 
echo $var; 

echo '<br />Subtraicao de valores  -=  ';
$var = 100;
$var -= 5; 
echo $var;

echo '<br />Multiplica o valor   *=  ';
$var = 100;
$var *= 5; 
echo $var;

echo '<br />divide o valor  /=  ';
$var = 100;
$var /= 5; 
echo $var;
echo '<br/>-------------------------- <br />';
echo '<br />incrementacao e pre-incremento <br />';
echo '<br />------------------------------ <br />';

$var = 100;
echo '<br />Retorna 100 e incrementa para 101 $var++  ';
print $var++ ; 


echo '<br />Retorna  e incrementa para 102 ++$var  ';
print ++$var;

echo '<br />Retorna 102 e decrementa para 101 $var--  ';
print $var-- ;

echo '<br />decrementa para 100 e retorna --$var  ';
print --$var ;

