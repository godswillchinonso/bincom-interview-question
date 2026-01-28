<?php 
	declare(strict_types=1);
	namespace App\Model;

	use App\Core\ErrorHandling;

	use PDO;
	use PDOException;
	

	class ElectionModel{
		private PDO $electionModel;

		function __construct(PDO $db){

			$this->electionModel= $db;
		} 



		// Question 1 model implementation
		public function fetchPollingUnitRecords():?array
		{
			try{
				$stmt=$this->electionModel->prepare("SELECT polling_unit_name, uniqueid FROM  polling_unit WHERE polling_unit_name IS NOT NULL AND polling_unit_name !='' ");

				$stmt->execute();

				$result=$stmt->fetchAll(PDO::FETCH_OBJ);
				return $result?: null;

			}catch(PDOException $e){
				ErrorHandling::logErrorToCustomFile($e);
				return null;
			}
		}


		//get individual polling unit record using a Relationship (Join) [Option 1]
		public function fetchPollingUnitResultUsingOptionOne($unique_id):?array
		{
			try{
				$stmt= $this->electionModel->prepare("
					SELECT polling_unit.polling_unit_name, 
					announced_pu_results.party_abbreviation, 
					announced_pu_results.party_score FROM 
					polling_unit INNER JOIN announced_pu_results ON 
					polling_unit.uniqueid =announced_pu_results.polling_unit_uniqueid WHERE 
					polling_unit.uniqueid=?
				");

				$stmt->execute([$unique_id]);
				$result=$stmt->fetchAll(PDO::FETCH_OBJ);

				return $result?: null;

			}catch(PDOException $e){
				ErrorHandling::logErrorToCustomFile($e);
				return null;
			}
		}


		//get individual polling unit record using a Relationship (Join) [Option 2]
		public function fetchPollingUnitResultUsingOptionTwo($unique_id):?array
		{
			/*this option won't be able to show the name of the polling unit again but it answers the question asked.*/
			try{
				$stmt=$this->electionModel->prepare("
					SELECT party_abbreviation, party_score FROM announced_pu_results WHERE polling_unit_uniqueid=? 
				");

				$stmt->execute([$unique_id]);
				$result=$stmt->fetchAll(PDO::FETCH_OBJ);

				return $result?:null;

			}catch(PDOException $e){
				ErrorHandling::logErrorToCustomFile($e);
				return null;
			}
		}












		//question 2 model implementation

		public function fetchAllLocalGovernmentName():?array
		{
			try{
				$stmt=$this->electionModel->prepare("SELECT uniqueid , lga_name FROM  lga ");

				$stmt->execute();
				$result=$stmt->fetchAll(PDO::FETCH_OBJ);

				return $result?:null;

			}catch(PDOException $e){
				ErrorHandling::logErrorToCustomFile($e);
				return null;
			}
		}




		public function fetchTotalResultByLgaId($polling_unit_uniqueid):?array
		{
			try{
				$stmt=$this->electionModel->prepare("SELECT announced_pu_results.party_abbreviation, 
					SUM(announced_pu_results.party_score) AS total_score FROM polling_unit 
					INNER JOIN announced_pu_results ON polling_unit.uniqueid =announced_pu_results.polling_unit_uniqueid  WHERE polling_unit.lga_id = ? GROUP BY announced_pu_results.party_abbreviation 
				");

				$stmt->execute([$polling_unit_uniqueid]);
				$result=$stmt->fetchAll(PDO::FETCH_OBJ);

				return $result?:null;

			}catch(PDOException $e){
				ErrorHandling::logErrorToCustomFile($e);
				return null;
			}
		}

	}