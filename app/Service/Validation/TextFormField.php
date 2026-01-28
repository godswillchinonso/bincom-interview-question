<?php
declare(strict_types=1);

namespace App\Service\Validation;

class TextFormField
{
    public function NotBlank(string $input, string $fieldName = 'field'):?string
    {
        if (trim($input) === '') {
            return "Form field {$fieldName} shouldn't be left blank";
        }

        return null;
    }




    public function AlphaNumericRegex(string $input, string $fieldName = 'field'):?string
    {
    	$input= trim($input);
        if (!preg_match('/^[a-z0-9_]+$/i', $input)) {
            return "{$fieldName} must contain only letters, numbers, and underscores";
        }

        return null;
    }



    public function AlphaNumericAndWhiteSpaceRegex(string $input, string $fieldName = 'field'):?string
    {
    	$input= trim($input);
    	if (!preg_match('/^[a-z0-9_\s]+$/i', $input)) {
    	    return "{$fieldName} must contain only letters, numbers,whitespace, and underscores";
    	}

    	return null;
    }


    public function minLength(string $input, string $fieldName = 'field',int $min = 2):?string 
    {
        if (mb_strlen(trim($input)) < $min) {
            return "{$fieldName} must be at least {$min} characters long";
        }

        return null;
    }



    public function maxLength(string $input, string $fieldName = 'field',int $max = 16):?string
    {

    	if (mb_strlen(trim($input)) > $max) {
    	    return "{$fieldName} must not be greater than {$min} characters long";
    	}

    	return null;
    }
}
