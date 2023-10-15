<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

use Validator;

class CategoryController extends Controller
{

    public function getIndex()
    {
        $categories = Category::paginate(2);
        return view('admin.category.add_category')->with('categories', $categories);
    }

    public function addCategory()
    {
        return view('admin.category.add_category');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $category = new Category;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return redirect('/admin/category')->with('message', 'Successfully created Category');
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        $categories = Category::paginate(5);

        return view('admin.category.edit_category')->with([
            'category' => $category,
            'categories' => $categories
        ]);
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return redirect('/admin/category')->with('message', 'Category Has Been Successfully Updated');
    }
}
