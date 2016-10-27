<?php
	namespace Bradesco;
		class Conta{
			protected $banco = "Bradesco";

			public function getBanco(){
				return $this->banco;
			}
		}

	namespace Itau;
	// tudo abaixo utiliza esse namespace
		class Conta{
			protected $banco = "Itau";
		public function getBanco(){
				return $this->banco;
			}
		}

	// \ e para sair
	// pode ser assim $bradesco = new \Bradesco\Conta(); ou utilizar o use com o apelido
	use \bradesco as ContaBradesco;
	$bradesco = new ContaBradesco\Conta();
	echo "Banco: {$bradesco->getBanco()} <hr />";

	 $itau = new Conta();
	 echo "Banco: {$itau->getBanco()} <hr />";
