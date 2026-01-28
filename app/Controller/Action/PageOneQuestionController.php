<?php 
	declare(strict_types=1);
	namespace App\Controller\Action;

	use App\Core\Database;
	use App\Model\ElectionModel;

	use App\Core\Response\ApiResponse;

	final class PageOneQuestionController extends ApiResponse{

		private ElectionModel $model;

		public function __construct(){
			$db= new Database();

			$this->electionModel= new ElectionModel($db->connect);

		}

		public function pageOneAction():void
		{

			if (isset($_POST['page-one-csrf-token'])) {
				$token=$_POST['page-one-csrf-token'];
				$polling_unit_uid= trim($_POST['polling_unit_uid']);

				//validate if  this request is been carried out from the right source
				if ($token != $_SESSION['page_one_csrf_token']) {
					exit("Invalid CSRF Token. Please make sure you are making this request from the right source: ".BURL." .");
				}

				//get record
				$record=$this->electionModel->fetchPollingUnitResultUsingOptionOne($polling_unit_uid);

				if ($record) {
					$this->json($record,200);
				}

				$this->json([],400);
			}
		}
	}