<?php

namespace App\Http\Controllers;

use App\Post;
use App\Work;
use App\Skill;
use App\Http\Requests;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex()
    {
        $latestPosts = Post::where('status', 1)->latest()->take(3)->get();
        return view('home', [
            'latestPosts' => $latestPosts
        ]);
    }

    public function getResume()
    {
        $skills = Skill::all();
        return view('resume.index')->with('skills', $skills);
    }
}
