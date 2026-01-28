<?php 
	declare(strict_types=1);
	namespace App\Controller\Page;


	//use SEOOptimisation Service Provider
	use App\Service\Seo\SeoOptimisation;


	use App\Core\Database;
	use App\Model\ElectionModel;

	final class QuestionTwoPageController{

		private SeoOptimisation $seo;
		private ElectionModel $model;

		public function __construct(){
			$this->seo= new SeoOptimisation();
			$db= new Database();

			$this->electionModel= new ElectionModel($db->connect);
		}





		public function loadPage():array
		{

			$lga=$this->electionModel->fetchAllLocalGovernmentName();

			$page_two_csrf_token= bin2hex(random_bytes(32));
			$_SESSION['page_two_csrf_token']=$page_two_csrf_token;

			return [
				"view"=>__DIR__."/../../../view/question-two.php",
				"seo"=>(object)[
					"page_title"=>$this->seo->title("Question 2 | ".APP_NAME."")
				],
				"lga"=>(object) $lga,
				"page_two_csrf_token"=>$page_two_csrf_token
			];
		}


		public function loadPageTwoTheory():array
		{
			return [
				"view"=>__DIR__."/../../../view/theory-two.php",
				"seo"=>(object)[
					"page_title"=>$this->seo->title("Question 1 Theory | ".APP_NAME."")
				]
			];
		}
	}