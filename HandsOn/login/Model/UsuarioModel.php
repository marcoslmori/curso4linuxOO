<?php
	namespace Model;
	
	use Entity\UsuarioEntity;
	use Lib\Db;
	use PDO;
	Class UsuarioModel{

		private $db;
	
		public function __construct(Db $db){
			$this->db = $db->getConn();
		}
		public function buscarUsuario(UsuarioEntity $usuario){
			// print_r($usuario);
			$query = 'SELECT * FROM usuarios
								WHERE nome = :login
								AND senha = :senha';
			// print_r($query);

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(':login', $usuario->getLogin());
			$stmt->bindValue(':senha', $usuario->getSenha());

			// print_r($usuario);

			$stmt->execute();

			if ($stmt->rowCount()){
				$logado = $stmt->fetch(PDO::FETCH_OBJ);
				print_r($logado);
				return $logado;
			}else{
				echo 'Usuario ou senha invalido';
			}
		}
	}

	// new UsuarioModel();