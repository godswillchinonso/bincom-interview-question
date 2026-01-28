<?php
declare(strict_types=1);

namespace App\Service\Validation;

/*
    on your controller you do declare the file variable as $file=$_FILES["image"]
*/
class FileFormField
{
    public function NotBlank(array $file, string $fieldName = 'field'):?string
    {
        
        if (trim($file["name"]) === '') {
            return "Form field {$fieldName} shouldn't be left blank";
        }

        return null;
    }




    public function FileError(array $file):?string
    {
    	if ($file['error'] !== UPLOAD_ERR_OK) {
            return "Error occurred while uploading file";
        }

        return null;
    }



    public function FileType(array $file, array $acceptedExtensions = ['png','jpg','jpeg','webp','avi','gif']): ?string
    {
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!in_array($extension, $acceptedExtensions, true)) {
            return "Invalid file type";
        }

        return null;
    }


    public function FileSize(array $file, int $maxSizeMB = 5): ?string
    {
        $maxSizeBytes = $maxSizeMB * 1024 * 1024;

        if ($file['size'] > $maxSizeBytes) {
            return "File size must not exceed {$maxSizeMB}MB";
        }

        return null;
    }

    

    public function GenerateNewFileName(array $file): string
    {
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        return "file_".bin2hex(random_bytes(8)). '.' . $extension;
    }
}
