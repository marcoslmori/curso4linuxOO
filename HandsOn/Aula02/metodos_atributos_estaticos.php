<?php
	class Usuario{

		public static $tipoUsuario = "Administrativo";
		public $nome;
		public $email;

		public function setNome($valor){
			$this->nome = $valor;
		}

		public function setEmail($valor){
			$this->email = $valor;
		}


		public function getNome(){
			return $this->nome;
		}

		public function getEmail(){
			return $this->email;
		}

		public static function mostrarTipoUsuario(){
			return self::$tipoUsuario;
		}

	}

	$obj = new Usuario();
	$obj->setNome("Nome do usuario");
	$obj->setEmail("gigio0107@gmail.com");

	echo "Nome: {$obj->getNome()}";
	echo "<hr />";
	echo "Email: {$obj->getEmail()}";
	echo "<hr />";
	echo "Tipo de usuario: " . Usuario::mostrarTipoUsuario();





