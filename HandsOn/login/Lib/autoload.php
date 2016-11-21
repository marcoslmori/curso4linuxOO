<?php
	function autoload($classe) {
		// print_r($classe);
		// DIRECTORY_SEPARATOR SERVE PARA QUALQUER SO
		$arq = str_replace('\\', DIRECTORY_SEPARATOR, $classe).'.php';
		
		if(file_exists($arq)){
			require($arq);
		}else{
			echo 'essa classe nao existe';
		}
}
spl_autoload_register('autoload');