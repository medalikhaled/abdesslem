<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class depot_projet extends Controller
{
    public function index()
    {
        return view('depot_projet');
    }

    public function show(Request $request)
    {
        dd($request->title, $request->price, $request->DeliveryDate, $request->desc);
    }
}
