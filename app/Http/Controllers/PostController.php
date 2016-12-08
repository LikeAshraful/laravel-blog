<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\User;
use App\Category;
use App\Tag;
use Validator;
use Auth;

class PostController extends Controller
{
    public function getIndex(Request $request){
        
        //search option
        $search = $request->get('search');
        $query = Post::orderBy('id');
        
        if(!empty($search)){
            $query->where('title', 'LIKE', '%'.$search.'%')->orwhere('content', 'LIKE', '%'.$search.'%');
        }
        
        $posts = $query->paginate(5);
        
        
        $categories = Category::all();
        $tags = Tag::all();
        
        return view('blog.index')->with('posts',$posts)
                                    ->with('categories',$categories)->with('tags',$tags);
    }
    
    public function showAllpost(){
        $posts = Post::paginate(10);
        
        return view('admin.show_posts')->with('posts',$posts);
    }
    
    
    public function showPostsByCategory(Category $category){
        
        //$posts = Post::select('*')->where('category_id', $id)->get();
        $posts = $category->post;
        $categories = Category::all();
        
        return view('blog.showPostsByCategory')->with('posts', $posts)->with('categories',$categories)->with('category',$category);
    }
    
    public function showPostsByUser($id){
        
        $user = User::find($id);
        $posts = $user->post;
        $categories = Category::all();
        return view('blog.showPostsByUser')->with('posts', $posts)->with('categories',$categories)->with('user',$user);
    }
    
    public function showPostsByTag(Tag $tag){
        
        //$tag = Tag::find($tag);
        $posts = $tag->post;
        $categories = Category::all();
        $tags = Tag::all();
        return view('blog.showPostsByTag')->with('posts',$posts)->with('tag', $tag)->with('categories',$categories)->with('tags',$tags);
    }
    
    public function createPost(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.add_post')->with('categories',$categories)->with('tags',$tags);
    }
    
    public function storePost(Request $request){
        
      
        $validation = Validator::make($request->all(),[
            'title' => 'required | unique:posts',
            'content' => 'required'
            ]);
            
        if($validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors',$validation->errors() );
        }
        
        $post = new Post;
          
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category');
        
        
        $post->user_id = Auth::user()->id;
        $post->save();
        
        $post->tag()->sync($request->tags, false);
        
        return redirect('/admin/posts')->with('message','Succesfully Created Post');
    }
    
    public function showPost($id){
        
        $post = Post::find($id);
        $categories= Category::all();
        
        return view('blog.showPost')->with('post',$post)->with('categories',$categories);
    }
    
    //function for edit post
    
    public function editPost($id){
        
        $post = Post::find($id);
        $categories = Category::all();
        $cats = array();
        
        foreach($categories as $category){
            $cats[$category->id] = $category->name;
        }
        
        
        $tags = Tag::all();
        $tags2 = array();
        
        foreach($tags as $tag){
            $tags2[$tag->id] = $tag->name;
        }
       
    
        return view('admin.edit_posts')
            ->with('post',$post)
            ->with('categories', $cats)
            ->with('tags',$tags2);
    }
    
    public function updatePost(Request $request, $id){
        
        $validation = Validator::make($request->all(),[
            'title' => 'required|max:255|min:10',
            'content' => 'required'
            ]);
            
        if($validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors',$validation->errors() );
        }
        
        $post = Post::find($id);
          
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category');
        
        $post->user_id = Auth::user()->id;
        
        $post->save();
        
        $post->tag()->sync($request->tags);
        
        return redirect('/admin/posts')->with('message','Succesfully Edited Post');
    }
    
    
    public function destroyPost($id){
        $post = Post::find($id);
        $post->tag()->detach();
        $post->delete();
        
        return redirect('/admin/posts')->with('message','Succesfully Deleted Post');
    }
    
}