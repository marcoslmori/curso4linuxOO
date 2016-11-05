<?php
	class Model{
		public $msg;

		public function __construct(){
			$this->msg = "hello World";
		}		
	}

	class View{
		private $model;
		private $controller;

		public function __construct(Model $model, Controller $controller){
			$this->model = $model;
			$this->controller = $controller;
	}
	
		public function mostrarMsg(){
			//echo $this->model->msg;
			//return $this->controller->buscarMsg();
			return '<a href="mvc-novo.php?action=mudarMsg">'.$this->model->msg. '</a><br /><a href="mvc-novo.php?action=mudarMsg2">'.$this->model->msg. '</a>';
		}
	}


	class Controller{
		private $model;

		public function __construct(Model $model){
			$this->model = $model;
		}
		public function mudarMsg(){
			//echo $this->model->msg;
			// return $this->model->msg;
			$this->model->msg = "Link Cliclado";
		}
		public function mudarMsg2(){
			$this->model->msg = "Link Cliclado2";
		}
	}

// view
	$model = new Model();
	$controller = new Controller($model);
	$view = new view($model, $controller);

	if(isset($_GET['action'])){
		$controller->{$_GET['action']}();
	}
	echo $view->mostrarMsg();
