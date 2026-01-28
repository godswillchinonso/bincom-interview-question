<?php 
	session_start();


	//app level configuration
	define("BURL", "http://localhost/my-personal-managed-project/web/bincom-interview-question/");
	define("APP_NAME", "Bincom Dev Center");
	define("APP_COLOR", "#111a29");
	define("APP_LOGO", BURL."public/asset/img/favicon/logo.png");




	/*
		You would need to complete the configuration of your email  setup here so as to be able to send mail successfully using  this framework.
	*/
	define("SMTP_HOST", "");
	define("SMTP_PORT", "");
	define("USERNAME", ""); /*e.g.: info@your_domain_name.extension */
	define("PASSWORD", ""); /*e.g.: info@your_domain_name.extension */
	define("MAIL_SENDER", "godswillchinonso5@gmail.com"); /*e.g.: info@your_domain_name.extension */





	/*
		the template configuration helps you set reusable tool that would be called throughout your frontend development. lets take for example you want to add up a WhatsApp link on a link button or beneath the icon. All you just have to do is call WHATSAPP. Whatever you set on your whatsapp value would appear.
	*/

	define("FACEBOOK", ""); /* e.g.: https://facebook.com */
	define("X", ""); /* e.g.: https://x.com */
	define("INSTAGRAM", ""); /* e.g.: https://instagram.com */
	define("TELEGRAM", ""); /* e.g.: https://telegram.com */
	define("TIKTOK", ""); /*e.g.: https://tiktok.com */
	define("PHONE_NUMBER", "");  /*e.g.: +2348067386185 */
	define("EMAIL", ""); /*e.g.: info@godswillchinonsosonex.online*/





		
	/*
		There are service provider dependencies that could enable you send and receive payment, but you would have to configure the settings here.
		Lets say your ecommerce website  or app requires a paystack payment integration, for you to be able to use the paystack service dependency, you would need configure paystack api here.
	*/


	define("PAYSTACK_SECRET_KEY", "");
	define("PAYSTACK_PUBLIC_KEY", "");

	define("FLUTTERWAVE_SECRET_KEY", "");
	define("FLUTTERWAVE_PUBLIC_KEY", "");


	define("PAYPAL_SECRET_KEY", "");
	define("PAYPAL_PUBLIC_KEY", "");




	//sms provider
	define("TERMII_SECRET_KEY", "");
	define("TERMII_PUBLIC_KEY", "");

	define("NIGERIA_BULK_SMS_SECRET_KEY", "");
	define("NIGERIA_BULK_SMS_PUBLIC_KEY", "");



	//oauth login
	define("GOOGLE_AUTH_CLIENT_ID", ""); /*e.g.: 1049394233124-39q8q6ri1gt0g4fkvs7mk15se19nv3ci.apps.googleusercontent.com*/
	define("GOOGLE_AUTH_SECRET_ID", ""); /*e.g.: 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*/
	define("GOOGLE_AUTH_REDIRECT_URL", ""); /*https://your_domain_name.extension/redirect_page*/











