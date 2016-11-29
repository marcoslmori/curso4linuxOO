<?php
// aritmeticos.php

$a = 2;
$b = 4;

echo '$a+3*4+5*$b' ; 
echo '</br>';
echo $a+3*4+5*$b . ''; //resultado = 34
echo '<br />Em calculos complexos, procure utilizar parenteses, sempre observando as prioridades aritmeticas, veja o exercicio abaixo <br />';

echo '($a+3)*4+(5*$b)';
echo '<br />';
echo ($a+3)*4+(5*$b) . ' '; //resultado = 40
echo '<br />';
echo '<br />';
echo '--------------------------------';
echo '<br />';
echo 'o PHP realiza automaticamente a conversao de tipos em operacao';
echo '<br />';
echo "$a = '10' ";
echo '<br />';
echo  $a = '10' ;
echo '<br />';
echo "$a + 5";
echo '<br />';
echo $a + 5;



