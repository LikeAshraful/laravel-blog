<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;
use Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::paginate(6);
        return view('admin.tags.add_tag')->with('tags',$tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_tag');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|unique:tags'
        ]);
        
        if($validation->fails()){
            return redirect()->back()->withInput()->with('errors', $validation->errors());
        }
        
        $tag = new Tag;
        $tag->name = $request->input('name');
        $tag->save();
        
        return redirect('/admin/tag')->with('message', 'Succesfully Tag Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        
        return view('admin.tags.edit_tag')->with('tag', $tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|unique:tags'
        ]);
        
        if($validation->fails()){
            return redirect()->back()->withInput()->with('errors',$validation->errors());
        }
        
        $tag = Tag::find($id);
        
        $tag->name = $request->name;
        
        $tag->save();
        
        return redirect('/admin/tag')->with('message','Tag Successfully Edited.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        
        $tag->post()->detach();
        
        $tag->delete();
        
        return redirect('/admin/tag')->with('message','Tag Successfully Deleted.');
    }
}
