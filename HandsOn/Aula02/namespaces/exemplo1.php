

<?php
// arquivo que nao funciona propositadamente
// veja os arquivos bradesco.php e itau.php

	namespace bradesco;
	class Conta{

		protected $titular;
		protected $saldo;
		protected $banco;

		public function depositar ($valor) {
			$this->saldo += $valor;
		}

		public function getSaldo(){
			return $this->saldo;
		}
		public function getTitular(){
			return $this->titular;
		}
		public function getBanco(){
			return $this->banco;
		
		}
		public function setTitular(){
			$this->titular = $valor;
		}

		public function setBanco(){
			$this->banco = $valor;
		}
	}
	class ContaBradesco extends Conta{
		public function _construct(){
			$this->setBanco("Bradesco");
		}
	}
	namespace itau;
	class ContaItau extends Conta{
		public function _construct(){
			$this->setBanco("Itau");
		}
	}
	

	// instanciamento com o nome da heranca
	$cp = new ContaBradesco();
	// usando o objeto
	echo "Banco: {$bradesco->getBanco()}<hr />";

	$cp = new ContaItau();
	// usando o objeto
	echo "Banco: {$itau->getBanco()}<hr />";

