<?php 

class connect{
	public static function connection(){
		define('server', 'localhost');
		define('baseDatos', 'sisferreteria');
		define('username', 'root');
		define('key', '');
		$options = array('PDO::MYSQL_ATTR_INIT_COMAND'=>'SET NAME utf8');
		try{
			$connection = new PDO("mysql:host=".server.";dbname=".baseDatos,username,key,$options);
			
			return $connection;

		}catch(Exception $e){

			die("connection error");

		}
	}
}




 ?>