<?php
	trait CRUDUsuario{
		public function cadastrarUsuario(){
			echo "<hr />Cadastrando usuario ... <hr />";
		}
		public function deletarUsuario(){
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

	class Usuario{
		use CRUDUsuario, Validacoes;
	}

	$obj = new Usuario();
	$obj->cadastrarUsuario();
	$obj->deletarUsuario();
	$obj->validarCPF();
	$obj->validarEmail();

