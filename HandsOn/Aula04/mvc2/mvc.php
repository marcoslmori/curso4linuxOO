<?php
	require('model.php');
	require('view.php');
	require('controller.php');

	$model = new Model();
	$controller = new Controller($model);
	$view = new view($model, $controller);

	if(isset($_GET['action']) AND isset($_GET['id'])){
		echo $controller->{$_GET['action']}($_POST, $_GET['id']);
	} elseif (isset($_GET['action'])){
		echo $controller->{$_GET['action']}($_POST);
	}

	if(isset($_GET['id'])){
		echo $view->montarForm($_GET['id']);	
	} else {
		echo $view->listarUsuarios();	
	}
	