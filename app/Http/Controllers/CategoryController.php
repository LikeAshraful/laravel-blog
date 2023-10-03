<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

use Validator;

class CategoryController extends Controller
{
    
    public function getIndex(){
        $categories = Category::paginate(5);
        
        return view('admin.add_category')->with('categories',$categories);
    }
    
    public function addCategory(){
        return view('admin.add_category');
    }
    
    public function storeCategory(Request $request){
         $validation = Validator::make($request->all(),[
            'name' => 'required|unique:categories'
            ]);
            
        if($validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors',$validation->errors() );
        }
        
        $category = new Category;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        
        $category->save();
        
        return redirect('/admin/category')->with('message','Succesfully created Category');
    }
    
    public function editCategory($id){
        
        $category = Category::find($id);
        
        return view('admin.edit_category')->with('category',$category);
    }
    
    public function updateCategory(Request $request, $id){
        $validation = Validator::make($request->all(), [
            'name' => 'required|unique:categories'
        ]);
        
        if($validation->fails()){
            return redirect()->back()->withInput()->with('errors', $validation->errors());
        }
        
        $category = Category::find($id);
        
        $category->name = $request->name;
        $category->description = $request->description;
        
        $category->save();
        
        return redirect('/admin/category')->with('message', 'Category Succesfully Edited');
    }
}
