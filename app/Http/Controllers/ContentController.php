<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function homeContent(){
        return view('home')->with([

        ]);
    }
}
