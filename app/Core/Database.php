<?php 
	declare(strict_types=1);
	namespace App\Core;

	use PDO;
	use PDOException;

	use App\Core\ErrorHandling;

	class Database{

		private string $DBHOST="localhost";
		private string $DBUSER="root";
		private string $DBPASS="";
		private string $DBNAME="bincomphptestt";
		private string $CHARSET="utf8mb4";


		public PDO $connect;

		public function __construct(){

			$dsn= "mysql:host=$this->DBHOST;dbname=$this->DBNAME;charset=$this->CHARSET";
			try{

				$this->connect = new PDO($dsn, $this->DBUSER, $this->DBPASS);

				//set error attribute
				$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				
			}catch(PDOException $e){
				ErrorHandling::logErrorToCustomFile($e);
				die("An error occured trying to connect to the database");
			}
		}
	}



	