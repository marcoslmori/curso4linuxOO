<?php
Class Conta 
{
	public $nroConta;
	public $saldo;

	public function depositar($valor) {
		var_dump ($valor);
		echo "<p>Depositando o valor de R$ {$valor} reais</p>";
	}

	public function sacar($valor){
		var_dump ($valor);
		echo "<p>Sacando o valor de R$ {$valor} reais</p>";
	}

}

$conta = new Conta();

$conta->depositar(100);
$conta->sacar(20);
// rever as variaveis o porque nnao foram passadas

?>