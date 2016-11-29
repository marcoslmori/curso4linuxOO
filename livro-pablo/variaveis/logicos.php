<?php
// logicos.php

echo '<br/>';
echo 'Operadores logicos sao utilizados para combinar expressoes logicas entre si, agrupando testes condicionaios';
echo '<br/>AND<br/>';
echo '<br/>OR<br/>';
echo '<br/>XOR<br/>';
echo '<br/>NOT --> !<br/>';
echo '<br/>&&<br/>';
echo '<br/>|| --> OU<br/>';
echo '<br/>';

$vai_chover = TRUE;
$esta_frio = TRUE;

if ($vai_chover and $esta_frio) {
	echo "nao vou sair de casa";
}

echo '<br/> --------------------------- <br/>';

$vai_chover = FALSE;
$esta_frio = TRUE;

if ($vai_chover xor $esta_frio) {
	echo "vou pensar duas vezes antes de sair";
}
