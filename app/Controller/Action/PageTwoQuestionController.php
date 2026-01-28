<?php 
	declare(strict_types=1);
	namespace App\Controller\Action;

	use App\Core\Database;
	use App\Model\ElectionModel;

	use App\Core\Response\ApiResponse;

	final class PageTwoQuestionController extends ApiResponse{

		private ElectionModel $model;

		public function __construct(){
			$db= new Database();

			$this->electionModel= new ElectionModel($db->connect);

		}

		public function pageTwoAction():void
		{

			if (isset($_POST['page-two-csrf-token'])) {

				$output="";

				$token=$_POST['page-two-csrf-token'];
				$lga= trim($_POST['lga']);

				//validate if  this request is been carried out from the right source
				if ($token != $_SESSION['page_two_csrf_token']) {
					exit("Invalid CSRF Token. Please make sure you are making this request from the right source: ".BURL."question-two .");
				}

				//get record
				$record=$this->electionModel->fetchTotalResultByLgaId($lga);



				if ($record) {
					$this->json($record,200);
				}

				$this->json([],400);

				
			}
		}
	}