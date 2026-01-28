<?php 
declare(strict_types=1);

namespace Boilerplate\Boilerplate\Services;

use Google\Client;
use Google\Service\Oauth2;
use Throwable;
use Boilerplate\Boilerplate\Core\ErrorHandling;
use Boilerplate\Boilerplate\Core\Response\WebResponse;

class GoogleOAuthServiceProvider
{
    private static ?Client $client = null;

    public static function getClient(): Client
    {
        if (self::$client === null) {
            self::$client = new Client();
        }
        return self::$client;
    }

    public static function SetUp(): void
    {
        $client = self::getClient();
        $client->setClientId(GOOGLE_AUTH_CLIENT_ID);
        $client->setClientSecret(GOOGLE_AUTH_SECRET_ID);
        $client->setRedirectUri(GOOGLE_AUTH_REDIRECT_URL);
        $client->addScope('email');
        $client->addScope('profile');
    }

    public static function getLoginUrl(): string
    {
        return self::getClient()->createAuthUrl();
    }

    public static function verifyTokenCode(string $code, string $error_url, string $success_url): void
    {
    	//The code parameter is the authorization code Google sends to your redirect URL after successful login.
        try {
            if (empty($code)) {
                throw new \Exception("Authorization code not found");
            }

            // Exchange code for token
            $token = self::getClient()->fetchAccessTokenWithAuthCode($code);

            if (isset($token['error'])) {
                throw new \Exception("Error fetching token: " . json_encode($token));
            }

            self::getClient()->setAccessToken($token);

            // Fetch user info
            $google_oauth = new Oauth2(self::getClient());
            $userInfo = $google_oauth->userinfo->get();

            // Save in session
            $_SESSION['google_user'] = [
                'name'    => $userInfo->name,
                'email'   => $userInfo->email,
                'picture' => $userInfo->picture,
            ];

            header("Location:" . BURL . $success_url);
            exit;
        } catch (Throwable $e) {
            ErrorHandling::logErrorToCustomFile($e->getMessage());
            WebResponse::BootstrapAlertNotification("An error occurred during Google verification.", "danger");
            header("Location:" . BURL . $error_url);
            exit;
        }
    }
}
