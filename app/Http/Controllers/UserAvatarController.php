<?php

namespace App\Http\Controllers;

use App\Http\Uploads\HandlesImageUploads;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UserAvatarController extends Controller
{
    use HandlesImageUploads;

    public function store(Request $request)
    {
        // validation

        //$path = $request->file('avatar')->store('avatars');

        $uploaded_image = $request->file('avatar');
        $path = $this->resizeAndSave($uploaded_image);

        return $path;
    }


}
