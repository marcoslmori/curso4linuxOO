<?php
//if.php

echo 'O IF eh uma estrutura de controle que introduz um desvio condicional, ou seja. um desvio na execucao natural do programa <br />';

echo 'exemplo 1<br/>';

$a = 1;
if ($a==5){
	echo 'eh igual<br/>';
}else{
	echo 'Nao eh igual <br/>';
}

echo 'exemplo 2 <br/>';

$a = 'conteudo';
$b = '';
if ($a){
	echo '$a tem conteudo<br/>';
}
if ($b){
	echo '$b tem conteudo<br/>';
}

echo 'OBS = a forma correta para testar se uma varivel esta definida eh utilizar a funcao if(isset($b)) <br/>';

echo 'Para testes encadeados --> exemplo 3';
$salario = 1020;
$tempo_servico = 12;
$tem_reclamacoes = false;

if ($salario > 1000){
	if ($tempo_servico >= 12){
		if ($tem_reclamacoes != true) {
			echo '<br/>parabens, voce foi promovido<br/>';
		}
	}
}


echo 'Outra forma de fazer isso<br/>';

// erro checar
if (($salario > 1000) and ($tempo_servico >= 12) and ($tem_reclamacoes != true)){

echo '<br/>parabens, voce foi promovido<br/>';

}
