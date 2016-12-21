<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Work;

class IndexController extends Controller
{
    public function getIndex(){
        
        $works = Work::all();
        return view('home')->with('works', $works);
    }
    
    
}