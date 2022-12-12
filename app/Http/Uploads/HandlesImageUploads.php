<?php

namespace App\Http\Uploads;

use Intervention\Image\Facades\Image;

trait HandlesImageUploads
{
    public function resizeAndSave($uploadedImage)
    {
        $ext = $uploadedImage->getClientOriginalExtension();
        $name = sha1_file($uploadedImage); // crée un hash à partir d'un fichier

        $image = Image::make($uploadedImage);
        $image->resize(200, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $image->save('images/avatars/' . $name . '.' . $ext);

        return $name . '.' . $ext; // ou prendre tout le nom du path
    }
}
