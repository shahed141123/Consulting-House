<?php

use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

if (!function_exists('customUpload')) {

    /**
     * The function `customUpload` uploads a file to a specified path and resizes it if it is an image.
     * 
     * @param UploadedFile mainFile The main file that is being uploaded. It is an instance of the
     * UploadedFile class.
     * @param string uploadPath The path where the uploaded file will be stored.
     * @param reqWidth The required width of the uploaded image. If this parameter is not provided or is
     * set to null, the image will not be resized.
     * @param reqHeight The "reqHeight" parameter is an optional integer value that specifies the required
     * height of the uploaded image. If this parameter is provided, the uploaded image will be resized to
     * the specified height while maintaining its aspect ratio. If this parameter is not provided, the
     * uploaded file will not be resized.
     * 
     * @return array an array containing information about the uploaded file, such as the file name, file
     * extension, and file size. The array is also being sanitized using the `array_map` function with the
     * `htmlspecialchars` function as the callback.
     */
    function customUpload(UploadedFile $mainFile, string $uploadPath, ?int $reqWidth = null, ?int $reqHeight = null): array
    {
        // Create an empty output array
        $output = [];

        // Get the hashed file name
        $fileName = $mainFile->hashName();

        // Check if the uploaded file is an image
        if (strpos($mainFile->getMimeType(), 'image') === 0) {
            // Create the requestImg directory if it does not exist
            if (!is_dir("{$uploadPath}/requestImg")) {
                if (!mkdir("{$uploadPath}/requestImg", 0777, true)) {
                    abort(404, "Failed to create the directory: {$uploadPath}/requestImg");
                }
            }

            // Image file upload
            $mainFile->storeAs('public/', $fileName);
            $img = Image::make($mainFile);
            if ($reqWidth !== null && $reqHeight !== null) {
                $img->resize($reqWidth, $reqHeight, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save("{$uploadPath}/requestImg/{$fileName}");
            }
        } else {
            // Non-image file upload
            $mainFile->storeAs('public/files/', $fileName);
        }

        // Populate the output array with file information
        $output = [
            'status'         => 1,
            'file_name'      => $fileName,
            'file_extension' => $mainFile->getClientOriginalExtension(),
            'file_size'      => $mainFile->getSize(),
            'file_type'      => $mainFile->getMimeType(),
        ];

        // Return the output array
        return array_map('htmlspecialchars', $output);
    }
}
