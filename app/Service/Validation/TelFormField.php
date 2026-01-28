<?php
declare(strict_types=1);

namespace App\Service\Validation;

class TelFormField
{
    public function NotBlank(string $input):?string
    {
        if (trim($input) === '') {
            return "Phone number form field shouldn't be left blank";
        }

        return null;
    }




    public function PhoneRegex(string $input): ?string
    {
        $input = trim($input);

        if (!preg_match('/^\+?\d{8,15}$/', $input)) {
            return "Invalid phone number";
        }

        return null;
    }
}
