<?php
	abstract class Conta 
	{
		protected $saldo;
		protected $titular;

		public function __construct($titular, $saldoInicial) {
			$this->titular = $titular;
			$this->saldo = $saldoInicial;
		}

		abstract public function depositar($valor);

		public function sacar($valor){
			$this->saldo -= $valor;
			echo "<p>Sacando o valor de R$ {$valor} reais</p>";
		}

		public function verSaldo() {
		echo "<p>saldo atual de R$ {$this->saldo} reais</p>";	
		}
	}


	final class ContaCorrente extends Conta
	{
		public function depositar($valor) {
			//$this->saldo += $tamanho;
			$this->saldo;
			echo "<p>depositando o valor de R$ {$valor} reais</p>";	
		}
	}

	final class ContaPoupanca extends Conta
	{
		public function depositar($valor) {
			$this->saldo += $valor + ($valor * 0.1);
		 	echo "<p>depositando o valor de R$ {$valor} reais</p>";		
		}
	}


echo "<p>Conta Corrente</p>";
$contaCorrente = new ContaCorrente('4linux', 0);
$contaCorrente->depositar(50);
$contaCorrente->verSaldo();

// erro
echo "<hr />";
echo "<p>Conta Poupanca:</p>";
$contaPoupança = new ContaPoupanca('4linux', 0);
//$contaPoupanca->depositar(50);
$contaPoupanca->verSaldo();


