<?php
	namespace bradesco;

	class Conta{

		protected $titular;
		protected $saldo;
		protected $banco = "bradesco";

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
	