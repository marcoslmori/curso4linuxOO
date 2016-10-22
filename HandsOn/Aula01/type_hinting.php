<?php

	class Usuario{
		
		public $email;
		public $senha;
		
		public function verUsuario(){
			
			echo "E-mail:  {$this->email}<br />";
			echo "Senha:  {$this->senha}<br />";
			
		}
	}
	
	class Conta{
		
		public $titular;
		public $saldo;
		
		public function verConta(){
				
			echo "Titular:  {$this->titular}<br />";
			echo "Saldo:  {$this->saldo}<br />";
				
		}
		
	}
	
	class  CRUD {
		
		public function cadastrar(Usuario $usuario){
			
			echo "Cadastrando Novo usuario... <hr />";
			echo  "<pre>";
			var_dump($usuario);
			echo "<hr />";
		}
		
		public function deletar(){
			
			echo "Deletando Novo usuario... <hr />";
			
		}
		
		public function atualizar(){
			
			echo "Atualizando Novo usuario... <hr />";
			
		}
	}
	
	$usuario = new Usuario();
	$usuario->email = "email@4linux";
	$usuario->senha = "1234";

	$conta = new Conta();
	$conta->titular = "Titular da conta";
	$conta->saldo = 1000;
	
	//aqui ele esta estanciando um objeto da classe CRUD
	//chamando o metodo cadastrar e passando o objeto usuario
	//assim como foi pedido pela estrutura da classe crud.
	$crud = new CRUD();
	$crud->cadastrar($usuario);
	$crud->deletar($usuario);
	$crud->atualizar($usuario);
	/*
	 * array $usuario (colocado nos parametros da classe)
	$crud->atualizar(array("email"=>"email@4linux", "senha" => "1234")); 
	*/