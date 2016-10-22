<?php

	class Conta{
		
		
		public $titular;
		public $saldo;
		
		public function depositar($valor){
			$this->saldo += $valor;
			
		}
		
		public function verSaldo(){
			echo "Saldo atual: {$this->saldo} <br>";
		}
		
		public function mostrarTipoConta(){
			echo "Esta eh uma conta comum!<br>";		
		}
		
	}
	
	class Poupanca extends Conta{
		
		public function mostrarTipoConta(){
			echo "Esta eh uma conta Poupanca!<br>";
		}
		
	}
	
	class Corrente extends Conta{
		
		public function mostrarTipoConta(){
			echo "Esta eh uma conta Corrente!<br>";
		}
		
	}
	
	$conta1 = new Conta();
	$conta1->titular = "Titular conta comum ";
	$conta1->depositar(000);
	$conta1->verSaldo();
	$conta1->mostrarTipoConta();
	
	$conta2 = new Poupanca();
	$conta2->titular = "Titular conta poupanca ";
	$conta2->depositar(8500);
	$conta2->verSaldo();
	$conta2->mostrarTipoConta();
	
	$conta3 = new Corrente();
	$conta3->titular = "Titular conta corrente ";
	$conta3->depositar(740);
	$conta3->verSaldo();
	$conta3->mostrarTipoConta();
	