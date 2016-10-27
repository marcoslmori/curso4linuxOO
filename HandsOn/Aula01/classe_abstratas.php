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
	
	 }

	class ContaPoupanca extends AbstractConta{
		
		public $juros = 0.5;
		
		public function calcularJuros(){
			
			
			echo "Valor do juros: " .$this->saldo*$this->juros."<br />";
			$this->saldo *= (1 + $this->juros);
						
		}
		
	}
	
	
	//nao funciona se nao criar uma classe extendida
	$conta1 = new ContaPoupanca();
	$conta1->depositar(500);
	$conta1->calcularJuros();
	$conta1->verSaldo();

