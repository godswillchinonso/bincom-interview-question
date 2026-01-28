<?php 
	declare(strict_types=1);
	namespace App\Controller\Page;


	//use SEOOptimisation Service Provider
	use App\Service\Seo\SeoOptimisation;


	use App\Core\Database;
	use App\Model\ElectionModel;

	final class IndexController{

		private SeoOptimisation $seo;
		private ElectionModel $model;

		public function __construct(){
			$this->seo= new SeoOptimisation();
			$db= new Database();

			$this->electionModel= new ElectionModel($db->connect);
		}





		public function loadIndexPage():array
		{

			$pollingRecord=$this->electionModel->fetchPollingUnitRecords();

			$page_one_csrf_token= bin2hex(random_bytes(32));
			$_SESSION['page_one_csrf_token']=$page_one_csrf_token;

			return [
				"view"=>__DIR__."/../../../view/index.php",
				"seo"=>(object)[
					"page_title"=>$this->seo->title("Question 1 | ".APP_NAME."")
				],
				"polling_record"=>(object) $pollingRecord,
				"page_one_csrf_token"=>$page_one_csrf_token
			];
		}


		public function loadPageOneTheory():array
		{
			return [
				"view"=>__DIR__."/../../../view/theory-one.php",
				"seo"=>(object)[
					"page_title"=>$this->seo->title("Question 1 Theory | ".APP_NAME."")
				]
			];
		}
	}