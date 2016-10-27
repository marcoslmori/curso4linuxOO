<?php
	class Usuario{
		public $nome;
		public $email;

		public function __set($name, $value) {
			if (property_exists($this, $name)){
				$this->$name=$value;
			} else {
				echo "<hr /> Este atributo {$name} nao existe SET";
			}
		}
		public function __get($name) {
			if (property_exists($this, $name)){
				return $this->$name;
			} else {
				echo "<hr /> Este atributo {$name} nao existe GET";
			}
		}
}
	$obj = new Usuario();
	$obj->nome = "Nome Usuario";
	$obj->email = "mori@osite.como.br";
	$obj->idade = "25";
	echo "<hr />{$obj->nome}</br>{$obj->email}</br>{$obj->idade}<hr />";
