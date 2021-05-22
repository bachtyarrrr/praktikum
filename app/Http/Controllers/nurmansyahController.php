<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nurmansyahController extends Controller
{
    public function home(){
        return view("home0173");
    }
    public function artikel(){
        return view("artikel0173");
    }
    public function profil(){
        return view("profil0173");
    }

    public function displayImage($filename)

{

    $path = storage_public('images/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;

}
    
}
