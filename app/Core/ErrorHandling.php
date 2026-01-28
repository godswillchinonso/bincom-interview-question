<?php
declare(strict_types=1);

namespace App\Core;

use Throwable;

class ErrorHandling
{
    /**
     *  Handles exceptions and runtime errors (caught via Throwable)
     */
    public static function logErrorToCustomFile(Throwable|string $error): void
    {
        $file = __DIR__ . "/../../logs/web-error-logs.log";

        if ($error instanceof Throwable) {
            $message = "[" . date("Y-m-d H:i:s") . "] " .
                       "Error: " . $error->getMessage() .
                       " | File: " . $error->getFile() .
                       " | Line: " . $error->getLine() .PHP_EOL;
        } else {

             $message = "[" . date("Y-m-d H:i:s") . "] " ."Error: $error | File: ".__FILE__." | Line: ".__LINE__."" . PHP_EOL;
        }

        file_put_contents($file, $message, FILE_APPEND);
    }





}
