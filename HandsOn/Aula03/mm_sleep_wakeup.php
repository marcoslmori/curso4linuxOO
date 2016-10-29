<?php
	class Usuarios{
		public $nome;
		public $email;

		public function __sleep(){
			echo "objeto serializado <hr />";
			return array('nome', 'email');
		}
		public function __wakeup(){
			echo "<hr />";
			echo "Objeto reconstruido";

		}

	}

	$obj = new Usuarios;
	$obj->nome = 'Nome usuario';
	$obj->email = 'email usuario';
	print_r($obj);
	echo "<hr />";
	$serial = serialize($obj);
	
	unserialize($serial);

	print_r($serial);