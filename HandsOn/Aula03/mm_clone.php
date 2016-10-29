<?php

// Errado pegar o invoke correto
	class Usuarios{
		public $nome  = "Nome do Usuario";
		public $email =  "email do usuario";

		public function __clone() {
			echo 'Objeto Clonado <hr />';
		}
	}

echo "<pre>";
	$obj1 = new Usuarios();
	$obj1->nome = "usuario 1";
	$obj1->email = "email 1";
	
	$obj2 = $obj1;
	$obj2->nome = "Usuario 2";
	$obj2->email  = "Email  2";

	print_r($obj1);
	print_r($obj2);

