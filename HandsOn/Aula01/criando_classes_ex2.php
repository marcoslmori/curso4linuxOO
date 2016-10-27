<?php
	
//criando uma classe em php
	class Usuario{

		public $email; //visibilidade nomeDoAtributo
		public $senha;
		
		public function cadastrarUsuario(){ //visibilidade nomeDoMetodo
		
		
			echo "Cadastrando Usuario...";
			echo $this->email ."<br/>"; 
			echo $this->senha ."<br/>"; 
			echo "<hr />";
		}
					
		public function atualizarUsuario(){
			
		}
	}
	
//estanciando um objeto da classe usuario

	$usuario = new Usuario();
	$usuario->email = "email@4linux.com.br";
	$usuario->senha = "123456";
	$usuario->cadastrarUsuario();
	
	$usuario2 = new Usuario();
	$usuario2->email = "email2@4linux.com.br";
	$usuario2->senha = "123456";
	$usuario2->cadastrarUsuario(); 
	
	
	