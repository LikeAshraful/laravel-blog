<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Work;
use Storage;

class WorkController extends Controller
{
    public function index(){
        $works = Work::paginate(10);
        
        return view('admin.works.index')->with('works', $works);
    }
    
    public function create(){
        return view('admin.works.create');
    }
    
    public function store(Request $request){
        
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'service' => 'required',
            'date' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        
        if($validation->fails() ){
            return redirect()->back()->withInput()->with('errors', $validation->errors() );
        }
        
        $work = new Work;
        
        $file = $request->file('image');
        $destination_path = 'assets/img/work/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);
        
        $work->title = $request->input('title');
        $work->description = $request->input('description');
        $work->img_name = $filename;
        $work->img_path = $destination_path . $filename;
        $work->date = $request->input('date');
        $work->service = $request->input('service');
        
        $work->save();
        
        return redirect('admin/work/add')->with('message', 'Successfully Work Added');
    }
    
    public function edit($id){
        
        $work = Work::find($id);
        
        return view('admin.works.edit')->with('work',$work);
    }
    
    public function update(Request $request, $id){
        
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'service' => 'required',
            'date' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg'
        ]);
        
        if($validation->fails() ){
            return redirect()->back()->withInput()->with('errors', $validation->errors() );
        }
        
        $work = Work::find($id);
        
        $oldFileName = $work->img_name;
        $filename = $oldFileName;
        
        $file = $request->file('image');
        $destination_path = 'assets/img/work/';
        
        if($request->hasfile('image') ){
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $file->move($destination_path, $filename);
            
            Storage::delete($oldFileName);
            
            unlink(public_path('assets/img/work/' . $oldFileName ));
        }
        
        $work->title = $request->input('title');
        $work->description = $request->input('description');
        $work->img_name = $filename;
        $work->img_path = $destination_path . $filename;
        $work->date = $request->input('date');
        $work->service = $request->input('service');
        
        $work->save();
        
        return redirect('admin/works')->with('message', 'Work Successfully Updated');
    }
    
    public function destroy($id){
        $work = Work::find($id);
        
        $path = $work->img_path;
        unlink($path);
        $work->delete();
        
        return redirect('admin/works')->with('message', 'Work Successfully Deleted');
    }
}
