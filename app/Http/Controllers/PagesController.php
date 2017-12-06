<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function Index()
    {
        //return view('pages.greeting')->with('name','Ahmed Mohamed Zaki');
        return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
    }


}
