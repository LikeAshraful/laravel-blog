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
 Route::get('/', [
   'as' => 'home', 'uses' => 'IndexController@getIndex'
]);

    Route::get('/resume',[
        'as' => 'resume.index', 'uses' => 'IndexController@getResume'
    ]);

    //Post
     Route::get('/blog', [
         'as' => 'blog.index', 'uses' => 'PostController@getIndex'
     ]);
 
    //show single blog post
    Route::get('/show/{id}', [
         'as' => 'blog.showPost', 'uses' =>'PostController@showPost'
    ]);
    
    Route::get('blog/show/category/{category}', [
        'as' => 'blog.showPostsByCategory', 'uses' => 'PostController@showPostsByCategory'  
    ]);
    
    Route::get('blog/show/user-posts/{id}', [
        'as' => 'blog.showPostsByUser', 'uses' => 'PostController@showPostsByUser'  
    ]);
    
    Route::get('blog/show/tag/{tag}', [
        'as' => 'blog.showPostsByTag', 'uses' => 'PostController@showPostsByTag'
    ]);
        
 
Route::auth();


Route::get('/user/profile', [
    'as' => 'admin.user.profile', 'uses' => 'HomeController@userProfile'
    ]);

Route::group(['middleware' => 'Author'], function(){
    
    Route::get('/admin', 'HomeController@index');
   
   Route::get('/admin/posts', [
   'as' => 'admin.show_posts', 'uses' => 'PostController@showAllpost'  
    ]);
    
    Route::get('/post/create', [
         'as' => 'admin.add_post', 'uses' => 'PostController@createPost'
    ]);
    
    Route::post('/post/create', [
         'as' => 'admin.add_post', 'uses' => 'PostController@storePost'
     ]);
     
     //Route for Tag
    Route:: get('/admin/tag', [
        'as' => 'admin.tags.add_tag', 'uses'=>'TagController@index'
    ]);
    
    Route:: post('/admin/tag/add', [
        'as' => 'tag.store','uses' => 'TagController@store'
    ]);
    
});


Route::group(['middleware' => 'admin'], function(){
    
     Route::get('/admin/edit/{id}', [
        'as' => 'admin.edit_posts', 'uses' => 'PostController@editPost' 
    ]);
    
    Route::post('/admin/edit/{id}', [
        'as' => 'admin.edit_posts', 'uses' => 'PostController@updatePost' 
    ]);
    
    Route::get('/post/delete/{id}', [
       'as' => 'admin.show_posts', 'uses' => 'PostController@destroyPost' 
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
    
    Route::get('/admin/user/add', [
        'as' => 'admin.users.create', 'uses' => 'UsersController@create'
    ]);
    
    Route::post('/admin/user/add', [
        'as' => 'admin.users.create', 'uses' => 'UsersController@store'
    ]);
    
    Route::get('admin/user/{id}/edit', [
        'as' => 'admin.users.edit', 'uses' => 'UsersController@edit'    
    ]);
    
    Route::post('admin/user/{id}/edit', [
        'as' => 'admin.users.edit', 'uses' => 'UsersController@update'    
    ]);
    
    //Route for Work
    Route::get('admin/works/', [
    'as' => 'admin.works.index', 'uses' => 'WorkController@index'    
    ]);
    
    Route::get('admin/work/add', [
        'as' => 'admin.works.create', 'uses' => 'WorkController@create'  
    ]);
    
    Route::post('admin/work/add', [
        'as' => 'admin.works.create', 'uses' => 'WorkController@store'  
    ]);
    
    Route::get('admin/work/{id}/edit', [
       'as' => 'admin.works.edit', 'uses' => 'WorkController@edit' 
    ]);
    
    Route::post('admin/work/{id}/edit', [
        'as' => 'admin.works.edit', 'uses' => 'WorkController@update'    
    ]);
    
    Route::get('admin/work/{id}/delete', [
        'as' => 'admin.works', 'uses' => 'WorkController@destroy'
    ]);

    //Route for skill section
    Route::get('admin/skills',[
        'as' => 'admin.skills.index', 'uses' => 'SkillController@index'     
    ]);
    
    Route::get('admin/skills/add',[
       'as'=>'admin.skills.create', 'uses' => 'SkillController@create' 
    ]);
    
    Route::post('admin/skills/add',[
       'as'=>'admin.skills.create', 'uses' => 'SkillController@store' 
    ]);
    
    Route::get('admin/skills/{id}/edit', [
       'as' => 'admin.skills.edit', 'uses' => 'SkillController@edit' 
    ]);
    
    Route::post('admin/skills/{id}/edit', [
       'as' => 'admin.skills.edit', 'uses' => 'SkillController@update' 
    ]);
    
    Route::get('admin/skills/{id}/delete', [
       'as' => 'admin.skills', 'uses' => 'SkillController@destroy' 
    ]);
});
