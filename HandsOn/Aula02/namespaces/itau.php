<?php
	namespace itau;
	class Conta{

		protected $titular;
		protected $saldo;
		protected $banco = "itau";

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
	