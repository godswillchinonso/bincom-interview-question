<?php
declare(strict_types=1);

namespace App\Service\Validation;


/*
    This could be used When dealing with radio buttons, checkboxes
*/
class ChoicesFormField
{
    public function NotBlank(string $input, string $fieldName = 'field'):?string
    {
        if (trim($input) === '') {
            return "{$fieldName} form field  shouldn't be left blank";
        }

        return null;
    }
}
