<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class MainController extends BaseController
{
    public function processImage(Request $request){

        $path = Storage::putFile('public', $request->file('image'));
        $url = Storage::url($path);
        return view('overview', compact('url'));
    }

}
