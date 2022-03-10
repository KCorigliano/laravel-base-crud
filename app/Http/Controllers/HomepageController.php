<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Comic::all();
        return view('homepage.index', compact("data"));
    }

   
}
