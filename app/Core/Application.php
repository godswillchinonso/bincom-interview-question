<?php 
	declare(strict_types=1);
	namespace App\Core;


	class Application {

		private Router $route;

		public function __construct(){
			$this->route= new Router();
		}


		public function get(string $path,$callback):void 
		{
			$this->route->get($path,$callback);
		}



		public function post(string $path,  $callback):void
		{
			$this->route->post($path,$callback);
		}

		public function put(string $path,  $callback):void
		{
			$this->route->put($path,$callback);
		}

		public function delete(string $path,  $callback):void
		{
			$this->route->delete($path,$callback);
		}



		public function run():void
		{
			$this->route->run();	
		}
	}