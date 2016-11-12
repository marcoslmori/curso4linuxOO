<?php

	require('Lib/autoload.php');

	use Lib\Db;
	use Entity\UsuarioEntity;
	use Model\UsuarioModel;
	use Controller\UsuarioController;
	use View\UsuarioView;

	$db = new Db();
	$entidade = new UsuarioEntity();
	$model = new UsuarioModel($db);
	$controller = new UsuarioController($model, $entidade);
	$view = new UsuarioView($model, $controller);

	// print_r($_POST);

	if(!empty($_POST['login']) && !empty($_POST['senha'])){
		$view->controller->LogarUsuario($_POST);
	}else{
		header('Location: index.php');
	}
