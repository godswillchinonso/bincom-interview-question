<?php
declare(strict_types=1);

namespace App\Service\Security;

class GetUserIpAddress
{
    public function ClientIp(): string
    {
        $headers = [
            'HTTP_X_FORWARDED_FOR',
            'HTTP_CLIENT_IP',
            'REMOTE_ADDR',
        ];

        foreach ($headers as $key) {
            if (!empty($_SERVER[$key])) {
                $ipList = explode(',', $_SERVER[$key]);

                foreach ($ipList as $ip) {
                    $ip = trim($ip);

                    if (filter_var(
                        $ip,
                        FILTER_VALIDATE_IP,
                        FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE
                    )) {
                        return $ip;
                    }
                }
            }
        }

        // Fallback (last resort)
        return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    }
}
