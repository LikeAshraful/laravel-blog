<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Work;
use App\Skill;

class IndexController extends Controller
{
    public function getIndex(){
        
        $works = Work::all();
        $skills = Skill::all();
        return view('home')->with('works', $works)->with('skills',$skills);
    }
    
    public function getResume()
    {
        $skills = Skill::all();
        return view('resume.index')->with('skills', $skills);
    }
    
}