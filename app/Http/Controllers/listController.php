<?php

namespace App\Http\Controllers;
use App\Comic;


use Illuminate\Http\Request;

class listController extends Controller
{
    public function list()
    {
        $data = Comic::all();
        return view('comics.list', compact("data"));
    }
}
