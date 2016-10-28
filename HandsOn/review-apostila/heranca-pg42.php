<?php
class Conta
{
	protected $nroConta;
	protected $titular;
	protected $saldo = 0;

	public function __construct($titular, $saldoInicial = 0){
		$this->titular = $titular;
		$this->saldo = $saldoInicial;
		$this->gerarNroConta();
	}
	public function depositar($valor) {
		$this->saldo += $valor;
		echo "<p>Depositando o valor de R$ {$valor} reais</p>";
	}

	public function sacar($valor) {
		$this->saldo -= $valor;
		echo "<p>Sacando o valor de R$ {$valor} reais</p>";	
	}

	public function verSaldo() {

		echo "<p>Saldo atual de R$ {$this->saldo} reais</p>";	
	}
	
	public function verTitular() {
		echo "<p>Titular da conta: {$this->titular} reais</p>";	
	}

	public function verNroConta() {
		echo "<p>Número da conta: {$this->nroConta} </p>";	
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


echo "<p>Conta corrente</p>";
$cc = new ContaCorrente('4linux', 500);
$cc->verNroConta();
$cc->verSaldo();
$cc->liberaChequeEspecial();

echo "</ hr>";

echo "<p>Conta Poupança</p>";
$cp = new ContaPoupanca('4linux', 20);
$cp->verNroConta();
$cp->verSaldo();
$cp->previsaoProximoMes();
