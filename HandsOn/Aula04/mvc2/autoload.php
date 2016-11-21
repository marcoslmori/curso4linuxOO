<?php
	function autoload($classe) {
		$arq = $classe.'.php';
		if(file_exists($arq)){
			require($arq);
		}else{
			echo 'essa classe nao existe';
		}
}

spl_autoload_register('autoload');