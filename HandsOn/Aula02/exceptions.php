<?php
	class Conta{
		private $titular;
		private $saldo;

		public function getTitular(){
			return $this->titular;
		}

		public function getSaldo(){
			return $this->saldo;
		}

		public function setTitular($nome){
			$this->titular = $nome;
		}

		public function depositar($valor){
			$this->saldo += $valor;
		}

		public function sacar($valor){
			if ($valor > $this->saldo) {
				throw new Exception("Saldo insuficiente", 1000);
			}else{
				$this->saldo -= $valor;
			}
		}
		public function verSaldo(){
			return $this->saldo;

		}
	}


$conta = new Conta();

	try{
		$conta->setTitular("titular da conta");
		$conta->depositar(100);
		$conta->sacar(200);
	}catch(exception $e){
		echo "ERRO {$e->getCode()} - <b>{$e->getMessage()}</b><hr />";
		
	}finally{
		echo "Saldo Atual: {$conta->verSaldo()}";
	}
