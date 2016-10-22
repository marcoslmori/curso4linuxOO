<?php
	trait Operacoes{
		public function depositar ($valor){
			$this->saldo += $valor;
		}
		public function sacar ($valor){
			$this->saldo -= $valor;
		}
		public function mostrarMetodos(){
			echo "Eu sou o metodo de traits operacoes";
		}

	}

		class Conta {
			use Operacoes;

			public $saldo;
			public $titular;
			
			public function verSaldo() {
				echo "<hr />Saldo: {$this->saldo}<hr />";
			}

			public function mostrarMetodos(){
			echo "Eu sou o metodo da classe conta";
		}
	}

	class Poupanca extends Conta{
		use operacoes;
	}


		$obj = new Poupanca();
		$obj->mostrarMetodos();
		echo "<hr />";
		$obj = new conta();
		$obj->mostrarMetodos();

