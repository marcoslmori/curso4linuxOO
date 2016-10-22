<?php

	 abstract class AbstractConta{
	
		public $titular;
		public $saldo = 0;
	
		public function depositar($valor){
				
			$this->saldo += $valor;
			echo "Valor do deposito: " . $this->saldo  ."<br /><br />";
				
		}
	
		public function sacar($valor){
				
			$this->saldo -= $valor;
				
		}
		
		public function verSaldo(){
		
				echo "Saldo Atual: " .$this->saldo;
		}
		
		public abstract function mostrarTipoDeConta();
	 }

	class ContaPoupanca extends AbstractConta{
		
		public $juros = 0.5;
		
		public function calcularJuros(){
			
			
			echo "Valor do juros: " .$this->saldo*$this->juros."<br />";
			$this->saldo *= (1 + $this->juros);
						
		}
		
		public function mostrarTipoDeConta(){
			
			echo "<br/><br/>Este echo eh do metodo abstrato classe ContaPoupanca";
			
		}
		
	}
	
	final class ContaCorrente extends AbstractConta{
		
		public function mostrarTipoDeConta(){
			echo "<br/><br/>Sou uma conta Corrente de metodo abstrato ContaCorrente";
		}
		
	}
	
	//vai dar erro aqui, pois a classe eh final
	class conta2 extends ContaCorrente{
		
	}
	
	
	//nao funciona se nao criar uma classe extendida
	$conta1 = new ContaPoupanca();
	$conta1->depositar(500);
	$conta1->calcularJuros();
	$conta1->verSaldo();
	$conta1->mostrarTipoDeConta();
	
	$conta2 = new ContaCorrente();
	$conta2->mostrarTipoDeConta();
	
