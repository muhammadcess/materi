<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazmaController extends Controller
{
    public function responseFunction()
    {
        return response("ini adalah bentuk response");
    }

    public function responseHeader()
    {
            $bodyResponse = [
            'name' => 'rizqi',
            'school' => 'smk ti bazma'
        ];
        return response(json_encode($bodyResponse), 200)
        ->header('Content-Type', 'Application/json')
        ->withHeaders([
            'App' => 'Rizqi gg',
            'Classes' => "xi",
            'web' => 'laravel'
        ]);
    }

    public function encryptionData()
    {
        $encrypt = encrypt("ini adalah enkripsi");
        $decrypt = decrypt($encrypt);
        dd($encrypt, $decrypt);
    }

    public function redirecTo()
    {
        return "redirect to";
    }

    public function redirectFrom()
    {
        return redirect("/redirect/to");
    }

    public function redirectToNameRoute()
    {
        return "redirect to with named route";
    }

    public function redirectFromNameRoute()
    {
        return redirect(route('redirect.to'));
    }
}