<?php
	trait CRUDUsuario{
		public function cadastrarUsuario(){
			echo "<hr />Cadastrando usuario ... <hr />";
		}
		public function deletarUsuario(){
			echo "<hr />deletando usuario ... <hr />";
		}
		public function validarCPF(){
			echo "<hr />deletando usuario ... <hr />";
		}


	}
	trait Validacoes{
		public function validarCPF(){
			echo "Validando CPF <hr />";
		}
		public function validarEmail(){
			echo "Validando email <hr />";
		}
	}
//tirar a ambiguidade do validarCPF - nesse exemplo estou usando o do validacoes
	class Usuario{
		use CRUDUsuario, Validacoes {
			Validacoes::validarCPF insteadof CRUDUsuario;
		}
	}

	$obj = new Usuario();
	$obj->cadastrarUsuario();
	$obj->deletarUsuario();
	$obj->validarCPF();
	$obj->validarEmail();

