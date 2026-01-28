<?php 
	declare(strict_types=1);
	namespace Boilerplate\Boilerplate\Services;


	class SessionTokenService {

		private static ?string $token= null;
		private static string $sessionKey="user-authentication-access";

		public static function setToken(?string $token = null): void
	    {
	        self::$token = $token ?? bin2hex(random_bytes(32));
	    }


		public static function assignAccountToken(?string $sessionKey=null):string
		{
			$key=$sessionKey ?? self::$sessionKey;

			if (empty(self::$token)) {
				self::setToken();
			}


			$_SESSION[$key]= self::$token;

			return $_SESSION[$key];
		}


		public static function getToken(?string $sessionKey=null):string
		{
			$key=$sessionKey ?? self::$sessionKey;

			return $_SESSION[$key] ?? null;
		}


		public static function destroyASession(?string $sessionKey=null):void
		{
			$key=$sessionKey ?? self::$sessionKey;

			unset($_SESSION[$key]);
		}



		public static function destroyAllSession(?string $sessionKey=null):void
		{
			session_destroy();
		}
	}