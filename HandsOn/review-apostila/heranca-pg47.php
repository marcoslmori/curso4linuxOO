<?php

abstract class Conta 
{
	protected $saldo = 0;
	protected $titular;

	public function __construct($titular, $SaldoInicial = 0) {
		$this->titular = $titular;
		$this->saldo = $SaldoInicial;
	}

	public function depositar($valor) {
		$this->saldo += $valor;
		echo "<p>Depositando o valor de R$ {$valor}</p>";
	}

	public function sacar($valor){
		$this->saldo -= $valor;
		echo "Sacando o valor de R$ {$valor} reais </p>";
	}

	public function verSaldo(){
	echo "<p> Saldo Atual de R$  R$ {$this->saldo} reais </p>";	
	}

}

class ContaCorrente extends Conta
{
	public $chequeEspecial = false;
	public function liberaChequeEspecial(){
		$this->chequeEspecial = true;
	}
	public function gerarNroConta(){

		$this->nroConta =  'cc' .rand();
		var_dump ($nroConta);
	}
}

class ContaPoupanca extends Conta
{
	const JUROS = 0.5;

	public function previsaoProximoMes(){
		$previsao = $this->saldo + (($this->saldo * self::JUROS) / 100);
		echo "<p>Previsao para o proxmo mes:  {$previsao} </p>";	

	}

	public function gerarNroConta(){
		$this->nroConta = 'cp' .rand();
	}
}



echo "<p>Conta corrente: </p>";
$contaCorrente = new ContaCorrente('4linux', 500); // OK
$contaCorrente->verSaldo();
echo "<hr />";

echo "<p>Conta Poupanca</p>";
$contaPoupanca = new ContaPoupanca('4linux', 40); //OK
$contaPoupanca->depositar(50);
$contaPoupanca->verSaldo();

echo "<hr />";
echo "<p>Conta:</p>";
$conta =new Conta();



