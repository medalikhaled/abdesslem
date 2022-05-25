<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscription_redacteur extends Controller
{
    public function index()
    {
        return view('inscription_redacteur');
    }


    public function show(Request $request)
    {
        // dd($request->email);
        $email = $request->email;
        $pass = $request->password;
        return "Email: " . $email . "<br> Mot de passe: " . $pass;
    }
}
