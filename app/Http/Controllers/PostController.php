<?php

namespace App\Http\Controllers;


use App\Tag;
use App\Post;
use App\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function getIndex(Request $request)
    {
        //search option
        $search = $request->get('search');
        $query = Post::orderBy('id');

        if (!empty($search)) {
            $query->where('title', 'LIKE', '%' . $search . '%')->orWhere('content', 'LIKE', '%' . $search . '%');
        }

        $posts = $query->paginate(5);

        $categories = Category::all();
        $tags = Tag::all();

        return view('blog.index')->with('posts', $posts)
            ->with('categories', $categories)->with('tags', $tags);
    }

    public function showAllpost()
    {
        $posts = Post::paginate(10);

        return view('admin.posts.show_posts')->with('posts', $posts);
    }


    public function showPostsByCategory(Category $category)
    {

        //$posts = Post::select('*')->where('category_id', $id)->get();
        $posts = $category->post;
        $categories = Category::all();
        $tags = Tag::all();

        return view('blog.showPostsByCategory')->with('posts', $posts)->with('categories', $categories)
            ->with('category', $category)->with('tags', $tags);
    }

    public function showPostsByUser($id)
    {

        $user = User::find($id);
        $posts = $user->post;
        $categories = Category::all();
        $tags = Tag::all();

        return view('blog.showPostsByUser')->with('posts', $posts)->with('categories', $categories)
            ->with('user', $user)->with('tags', $tags);
    }

    public function showPostsByTag(Tag $tag)
    {

        //$tag = Tag::find($tag);
        $posts = $tag->post;
        $categories = Category::all();
        $tags = Tag::all();
        return view('blog.showPostsByTag')->with('posts', $posts)->with('tag', $tag)->with('categories', $categories)->with('tags', $tags);
    }

    public function createPost()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $authors = User::isActive()->get();

        return view('admin.posts.add_post')->with([
            'categories' => $categories,
            'tags' => $tags,
            'authors' => $authors
        ]);
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required | unique:posts',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->slug = $request->input('slug') ?? Str::slug($request->input('title'));
        $post->content = $request->input('content');
        $post->category_id = $request->input('category');
        $post->status = $request->input('status') == "on" ? 1 : 0;
        $post->author_id = $request->input('author');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $destination_path = 'uploads/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);

            Image::make('uploads/' . $filename)->resize(100, 100)->save('uploads/thumbs/' . $filename, 50);

            $post->img_name = $filename;
            $post->img_path = $destination_path . $filename;
            $post->img_thumb = 'uploads/thumbs/' . $filename;
        }

        $post->user_id = Auth::user()->id;
        $post->save();
        $post->tags()->sync($request->tags, false);

        return redirect()->route('admin.show_posts')->with('message', 'Successfully Created Post');
    }

    public function showPost($id)
    {

        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('blog.showPost')->with('post', $post)->with('categories', $categories)->with('tags', $tags);
    }

    //function for edit post
    public function editPost($id)
    {

        $post = Post::find($id);
        $categories = Category::all();
        $authors = User::isActive()->get();
        $tags = Tag::all();

        return view('admin.posts.edit_posts', [
            'post' => $post,
            'categories' => $categories,
            'authors' => $authors,
            'tags' => $tags
        ]);
    }

    public function updatePost(Request $request, $id)
    {

        $request->validate([
            'title' => 'required | unique:posts,title,' . $id,
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png'
        ]);

        $post = Post::find($id);

        if ($request->hasfile('image')) {

            $oldFileName = $post->img_name;
            $filename = $oldFileName;
            $file = $request->file('image');
            $destination_path = 'uploads/';


            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $thumb = Image::make($destination_path . $filename)->resize(100, 100)->save($destination_path . 'thumbs/' . $filename, 50);

            if ($oldFileName) {
                Storage::delete($oldFileName);
                unlink(public_path('uploads/' . $oldFileName));
                unlink(public_path('uploads/thumbs/' . $oldFileName));
            }

            //newly img save
            $post->img_name = $filename;
            $post->img_path = $destination_path . $filename;
            $post->img_thumb = 'uploads/thumbs/' . $filename;
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category');
        $post->user_id = Auth::user()->id;
        $post->slug = $request->input('slug') ?? Str::slug($request->input('title'));
        $post->status = $request->input('status') == "on" ? 1 : 0;
        $post->author_id = $request->input('author');

        $post->save();
        $post->tags()->sync($request->tags);

        return redirect()->route('admin.show_posts')->with('message', 'Successfully Updated Post');
    }


    public function destroyPost($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $post->delete();

        return redirect()->route('admin.show_posts')->with('message', 'Successfully Deleted Post');
    }
}
