<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
 Route::get('/', function () {
     return view('home');
});

Route::get('/resume', function(){
   return view('resume.index');
});


//Post
 Route::get('/blog', [
     'as' => 'blog.index', 'uses' => 'PostController@getIndex'
 ]);
 
 Route::get('/admin/posts', [
   'as' => 'admin.show_posts', 'uses' => 'PostController@showAllpost'  
]);

Route::get('/post/create', [
     'as' => 'admin.add_post', 'uses' => 'PostController@createPost'
]);

Route::post('/post/create', [
     'as' => 'admin.add_post', 'uses' => 'PostController@storePost'
 ]);
 
 Route::get('/admin/edit/{id}', [
    'as' => 'admin.edit_posts', 'uses' => 'PostController@editPost' 
]);

Route::post('/admin/edit/{id}', [
    'as' => 'admin.edit_posts', 'uses' => 'PostController@updatePost' 
]);

Route::get('/post/delete/{id}', [
   'as' => 'admin.show_posts', 'uses' => 'PostController@destroyPost' 
]);


 //show single blog post
 Route::get('/show/{id}', [
     'as' => 'blog.showPost', 'uses' =>'PostController@showPost'
]);
     

//Category
Route::get('/admin/category', [
     'as' => 'admin.add_category', 'uses' => 'CategoryController@getIndex'
 ]);

Route::get('/admin/category/add', [
    'as' => 'admin.add_category', 'uses' => 'CategoryController@addCategory'
 ]);
 
 Route::post('/admin/category/add', [
     'as' => 'admin.add_category', 'uses' => 'CategoryController@storeCategory'
 ]);
 
 Route::get('/admin/category/edit/{id}', [
    'as' => 'admin.edit_category', 'uses' => 'CategoryController@editCategory'     
]);

Route::post('/admin/category/edit/{id}', [
    'as' => 'admin.edit_category', 'uses' => 'CategoryController@updateCategory'     
]);


//Comment
Route::post('/comments/{post_id}',[
    'as' => 'comments.store', 'uses' => 'CommentsController@store'
    ]);

//Route::resource('/','PostController');

//Route for Tag
Route:: get('/admin/tag', [
    'as' => 'admin.tags.add_tag', 'uses'=>'TagController@index'
]);

Route:: post('/admin/tag/add', [
    'as' => 'tag.store','uses' => 'TagController@store'
]);

Route::get('/admin/tag/edit/{id}',[
    'as' => 'admin.tags.edit_tag', 'uses' => 'TagController@edit'    
]);

Route::post('/admin/tag/edit/{id}',[
    'as' => 'admin.tags.edit_tag', 'uses' => 'TagController@update'    
]);

Route::get('/admin/tag/delete/{id}', [
   'as' => 'admin.tags.add_tag', 'uses' => 'TagController@destroy' 
]);



//Route for Users

Route::get('/admin/users', [
    'as' => 'admin.users.index', 'uses' => 'UsersController@index'
]);


//Route for Admin Panel

Route::get('/admin', function() {
    return view('admin.index');
});


Route::auth();

Route::get('/admin', 'HomeController@index');
