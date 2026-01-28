<?php 
	declare(strict_types=1);
	namespace App\Core;


	class Router{

		private array $routes;

		public function get($path,$callback):void
		{
			$this->routes["GET"][$path]=$callback;
		}


		public function post($path,$callback):void
		{
			$this->routes["POST"][$path]=$callback;
		}


		public function put($path,$callback):void
		{
			$this->routes["PUT"][$path]=$callback;
		}


		public function delete($path,$callback):void
		{
			$this->routes["DELETE"][$path]=$callback;
		}




		public function run(){
			$httpMethod=$_SERVER['REQUEST_METHOD']??null;

			$requestUri="/".trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),"/");

			// Remove project folder (if running inside subfolder)
			$requestUri = str_replace("/my-personal-managed-project/web/bincom-interview-question", "", $requestUri);

			// Fetch the assigned route callback (if exists)
			$assignedCallback = $this->routes[$httpMethod][$requestUri] ?? null;



			if ($assignedCallback) {
				$this->executeCallback($assignedCallback);
				return;
			}



			// Handle dynamic routes with parameters (e.g. /user/{id})
			foreach ($this->routes[$httpMethod] ?? [] as $routeKey => $routeValue) {
				if (strpos($routeKey, "{")!==false) {

					$pattern= preg_replace("/\{[\w]+\}/", "([^/]+)", $routeKey);
					$pattern ="#^". rtrim($pattern,"/"). "$#";

					if (preg_match($pattern, $requestUri, $matches)) {
						array_shift($matches); // remove full match
						$this->executeCallback($routeValue, $matches);
						return;
					}
				}
			}



			// If no match, render 404
			$this->render404Page();
		}






		public function executeCallback($callback, array $param=[]):void
		{
			$result = null;
			if (is_array($callback) && count($callback)===2) {
				[$controller,$method]=$callback;
				$instance = new $controller();
				$result = call_user_func_array([$instance, $method], $param);

			}elseif (is_callable($callback)) {

				$result = call_user_func_array($callback, $param);
			}


			if (is_array($result) && isset($result["view"])) {

				$viewPath = $result['view'];

	            // Remove 'view' key and pass the rest under $routerData
	            $routerData = (object)$result;
	            unset($routerData->view);

	            require $viewPath;
	            return;
			}



			if (is_string($result) && file_exists($result)) {
	            require $result;
	            return;
	        }

	        if ($result !== null) {
	            echo $result;
	        }
		}



		public function render404Page():void
		{
			http_response_code(404);
			if (file_exists($file=__DIR__."/../../public/error404.php")) {
				require_once $file;
			}
		}
	}

