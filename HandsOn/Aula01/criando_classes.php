<?php
	
//criando uma classe em php
	class Usuario{

		public $email; //visibilidade nomeDoAtributo
		public $senha;
		
		public function cadastrarUsuario(){ //visibilidade nomeDoMetodo
		
			$this->email = "email@4linux.com.br";
			$this->senha = "123456";
			
		}
		
				
		public function atualizarUsuario(){
			
		}
	}
	
//estanciando um objeto da classe usuario

	$usuario = new Usuario();
	
	
	
	