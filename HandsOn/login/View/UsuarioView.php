<?php
	namespace View;

	use Model\UsuarioModel;
	use Controller\UsuarioController;

	class UsuarioView{
		private $model;
		private $Controller;

		public function __construct(UsuarioModel $model, UsuarioController $controller){
			$this->model = $model;
			$this->controller = $controller;
		}
		public function carregarTela(){
			
		}

		
	}