<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Skill;

class SkillController extends Controller
{
    //Display All Skills here.
    public function index()
    {
        $skills = Skill::paginate(10);
       
        return view('admin.skills.index')->with('skills',$skills);
        
    }

    //Display create from
    public function create()
    {
        return view('admin.skills.create');
    }

    //functionlity for save skill data on database
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
           'skill_title' => 'required|max:20',
           'skill_percent' => 'required'
        ]);
        
        if ($validation->fails()) {
           return redirect()->back()->withInput()->with('errors', $validation->errors() );
        }
        
        $skill = new Skill;
        
        $skill->skill_title = $request->skill_title;
        $skill->skill_percent = $request->skill_percent;

        $skill->save();
        
        return redirect('admin/skills')->with('message' , 'Skills Successfully Added');
    }

    //Display Edit page
    public function edit($id)
    {
        $skill = Skill::find($id);
        
        return view('admin.skills.edit')->with('skill', $skill);
    }

   //funtionality for upadate skill info to database
    public function update(Request $request, $id)
    {
       $validation = Validator::make($request->all(), [
           
           'skill_title' => 'required|max:20',
           'skill_percent' => 'required'
        ]);
        
        if($validation->fails()){
            return redirect()->back()->withInput()->with('errors', $validation->errors() );
        }
        
        $skill = Skill::find($id);
        $skill->skill_title = $request->skill_title;
        $skill->skill_percent = $request->skill_percent;
        
        $skill->save();
        
        return redirect('admin/skills')->with('message','Skill Successfully Updated');
    }

    //function for delete skill info from database
    public function destroy($id)
    {
        $skill = Skill::find($id);
        
        $skill->delete();
        
        return redirect('admin/skills')->with('message','Skill Successfully Deleted');
    }
}
