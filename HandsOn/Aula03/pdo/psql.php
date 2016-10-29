<?php
	class ConnPSQL{

		private static $conn;
		
		public static function conectar(){
			// self::$conn = new PDO(self::$dsn, self::$user, self::$pw);
			// return self::$conn;
			self::$conn = new PDO('pgsql:dbname=aulapdo;host=;localhost','pdo','123456');
			
			return self::$conn;
		}
	}

