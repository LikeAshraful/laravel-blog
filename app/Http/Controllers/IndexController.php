<?php

namespace App\Http\Controllers;

use App\Post;
use App\Work;
use App\Skill;
use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex()
    {
        return view('layouts.app');
    }

    public function getResume()
    {
        $skills = Skill::all();
        return view('resume.index')->with('skills', $skills);
    }
}
