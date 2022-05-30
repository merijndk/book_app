<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class MainController extends BaseController
{
    public function processImage(Request $request){



        if($request->has('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $url = Storage::url($path);
        }else{
            $url = "storage/qgd7RlmTgykUVWoglJHkgNI221Qp3guX582AueKM.jpg";
        }

        $data = [
            [
                "name" => "blaat",
                "x" => "90",
                "y" => "100",
            ],
            [
                "name" => "Yeet",
                "x" => "150",
                "y" => "200",
            ],
            [
                "name" => "Yeet",
                "x" => "50",
                "y" => "500",
            ],
            [
                "name" => "Yeet",
                "x" => "550",
                "y" => "200",
            ],
            [
                "name" => "Yeet",
                "x" => "750",
                "y" => "500",
            ],
            [
                "name" => "Yeet",
                "x" => "1450",
                "y" => "900",
            ],
            [
                "name" => "Yeet",
                "x" => "950",
                "y" => "600",
            ],
            [
                "name" => "Yeet",
                "x" => "650",
                "y" => "200",
            ],
            [
                "name" => "Yeet",
                "x" => "150",
                "y" => "800",
            ],
        ];

        return view('overview', compact('url', 'data'));
    }

}
