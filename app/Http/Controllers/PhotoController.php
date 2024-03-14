<?php

namespace App\Http\Controllers;

use App\Models\PpvPhoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    //
    public function list()
    {
        $photos = PpvPhoto::with('PpvStudent','PpvSetting')
        ->orderBy('ppv_addedon', 'desc')
        ->get();

        $photoModal = $photos;
        return view('photo.list', compact('photos','photoModal'));
    }
}
