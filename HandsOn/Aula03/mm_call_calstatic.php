<?php

	class Usuarios {
		public $nome;

		public function __call($metodo, $atributos){
			echo "O metodo $metodo foi chamado, mas ele nao existe";
			echo "<pre>";
			print_r($atributos); // $this->nome para chamar o atributo
		}
		
		public static function __callStatic($metodo, $atributos){
			echo "O metodo $metodo foi chamado, mas ele nao existe";
			echo "<pre>";
			print_r($atributos); // self::$nome
		}

	}

	$obj = new Usuarios();
	// esse metodo nao existe, o function call que faz aparecer desse modo
	$obj->mostrarNome("Nome do usuario","senha", "email");
	Usuarios::mostrarNome("Nome do usuario","senha", "email");