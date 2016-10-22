<?php

	class Conta{
		
		public $titular;
		public $saldo = 0;
		
		public function depositar($valor, $param=""){
			
			$this->saldo += $valor;
			echo "Usuario: " . $this->titular  ."<br />";
			echo "Seu saldo esta: " . $this->saldo  ."<br /><br />";
			
		}
		
		public function sacar($valor){
			
			$this->saldo -= $valor;
			
		}
		
	}
	
	class ContaCorrente extends Conta{
		
		public function mostrarConta(){
			
			echo "<hr/> Sou uma Conta Corrente <hr /><br />";
			
		}
	
	}
	
	class ContaPoupanca extends Conta{
		
		public function mostrarConta(){
				
			echo "<hr/> Sou uma Conta Poupanca <hr />";
		
		}
	
	}
	
	
	$conta1 = new Conta();
	$conta1->titular = "Titular da Conta 1";
	$conta1->depositar(500);
	
	$contaCorrente = new ContaCorrente();
	$contaCorrente->titular = "Titular Conta Corrente";
	$contaCorrente->depositar(600);
	$contaCorrente->mostrarConta();
	
	$contaPoupanca = new ContaPoupanca();
	$contaPoupanca->titular = "Titular Conta Poupanca";
	$contaPoupanca->depositar(700);
	$contaPoupanca->mostrarConta();