<?php
// utilizar um namespace por arquivo 

	require("bradesco.php");
	require("itau.php");

//usando o namespace

	$bradesco = new Bradesco\Conta();
	echo "Banco: {$bradesco->getBanco()} <hr />";

	// $itau = new Itau\Conta();
	// echo "Banco: {$itau->getBanco()} <hr />";

	use Itau\Conta as ContaItau;
     $itau = new ContaItau();
	 echo "Banco: {$itau->getBanco()} <hr />";
