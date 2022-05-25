<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function show(Request $request)
    {
        $projet[0] = new Projet("premier", 85, "Lorem ipsum dolor sit amet.", "24/7/2022");
        $projet[1] = new Projet("deuxiéme", 22.5, "Lorem ipsum dolor sit amet.", "25/7/2022");
        $projet[2] = new Projet("troisiéme", 9.5, "Lorem ipsum dolor sit amet.", "26/7/2022");
        $projet[3] = new Projet("quatriéme", 52.4, "Lorem ipsum dolor sit amet.", "27/7/2022");
        $projet[4] = new Projet("cinqiéme", 87.36, "Lorem ipsum dolor sit amet.", "28/7/2022");

        return view('home', compact('projet'));
    }


    public function show2(Request $request)
    {
        $projet[0] = new Projet("premier", 85, "Lorem ipsum dolor sit amet.", "24/7/2022");
        $projet[1] = new Projet("deuxiéme", 22.5, "Lorem ipsum dolor sit amet.", "25/7/2022");
        $projet[2] = new Projet("troisiéme", 9.5, "Lorem ipsum dolor sit amet.", "26/7/2022");
        $projet[3] = new Projet("quatriéme", 52.4, "Lorem ipsum dolor sit amet.", "27/7/2022");
        $projet[4] = new Projet("cinqiéme", 87.36, "Lorem ipsum dolor sit amet.", "28/7/2022");

        return view('show_projets', compact('projet'));
    }
}
