<?php
	class Usuario{
		private $nome;
		private $email;

		public function __construct(array $dados){
			foreach ($dados as $index => $value) {
				$this->$index = $value;	
			}
			
		}
		public function getNome(){
			return $this->nome;
		}
		public function getEmail(){
			return $this->email;
		}

		// nao precisa instanciar para usar o metodo destruct
		public function __destruct(){
			echo "<hr /> objeto destruido <hr />";
		}
	}

	$dados = array("nome"=>"Nome do usuario", "email"=>"gigio@gmail.com");
	$usuario = new Usuario($dados);
	
	echo $usuario->getNome();
	echo "<hr />";
	echo $usuario->getEmail();
	// unset ($usuario); para usar o destruct
	// nao tem muito sentido usar 
	// echo "depois de destruido";

