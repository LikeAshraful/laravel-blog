<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\SkillController;


Route::get('/', [IndexController::class, 'getIndex'])->name('home');
Route::get('/resume', [IndexController::class, 'getResume'])->name('resume.index');
// Post
Route::get('/blog', [PostController::class, 'getIndex'])->name('blog.index');
// Show single blog post
Route::get('/show/{id}', [PostController::class, 'showPost'])->name('blog.showPost');
Route::get('blog/show/category/{category}', [PostController::class, 'showPostsByCategory'])
    ->name('blog.showPostsByCategory');
Route::get('blog/show/user-posts/{id}', [PostController::class, 'showPostsByUser'])
    ->name('blog.showPostsByUser');
Route::get('blog/show/tag/{tag}', [PostController::class, 'showPostsByTag'])
    ->name('blog.showPostsByTag');

Auth::routes();


Route::get('/user/profile', [HomeController::class, 'userProfile'])->name('admin.user.profile');

Route::middleware(['Author'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index']);
    Route::get('/admin/posts', [PostController::class, 'showAllpost'])->name('admin.show_posts');
    Route::get('/post/create', [PostController::class, 'createPost'])->name('admin.create_post_form');
    Route::post('/post/create', [PostController::class, 'storePost'])->name('admin.add_post');
    // Route for Tag
    Route::get('/admin/tag', [TagController::class, 'index'])->name('admin.tags.add_tag');
    Route::post('/admin/tag/add', [TagController::class, 'store'])->name('tag.store');
});

Route::middleware(['admin'])->group(function () {

    Route::get('/admin/edit/{id}', [PostController::class, 'editPost'])->name('admin.edit_post');
    Route::post('/admin/edit/{id}', [PostController::class, 'updatePost'])->name('admin.edit_post');
    Route::get('/post/delete/{id}', [PostController::class, 'destroyPost'])->name('admin.post_delete');

    // Category
    Route::get('/admin/category', [CategoryController::class, 'getIndex'])->name('admin.category.index');
    Route::get('/admin/category/add', [CategoryController::class, 'addCategory'])->name('admin.add_category');
    Route::post('/admin/category/add', [CategoryController::class, 'storeCategory'])->name('admin.add_category');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('admin.edit_category');
    Route::post('/admin/category/edit/{id}', [CategoryController::class, 'updateCategory'])->name('admin.edit_category');


    // Comment
    Route::post('/comments/{post_id}', [CommentsController::class, 'store'])->name('comments.store');
    // Tag
    Route::get('/admin/tag/edit/{id}', [TagController::class, 'edit'])->name('admin.tags.edit_tag');
    Route::post('/admin/tag/edit/{id}', [TagController::class, 'update'])->name('admin.tags.edit_tag');
    Route::get('/admin/tag/delete/{id}', [TagController::class, 'destroy'])->name('admin.tags.add_tag');


    // Users
    Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/user/add', [UsersController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/user/add', [UsersController::class, 'store'])->name('admin.users.create');
    Route::get('admin/user/{id}/edit', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::post('admin/user/{id}/edit', [UsersController::class, 'update'])->name('admin.users.edit');


    // Work
    Route::get('admin/works/', [WorkController::class, 'index'])->name('admin.works.index');
    Route::get('admin/work/add', [WorkController::class, 'create'])->name('admin.works.create');
    Route::post('admin/work/add', [WorkController::class, 'store'])->name('admin.works.create');
    Route::get('admin/work/{id}/edit', [WorkController::class, 'edit'])->name('admin.works.edit');
    Route::post('admin/work/{id}/edit', [WorkController::class, 'update'])->name('admin.works.edit');
    Route::get('admin/work/{id}/delete', [WorkController::class, 'destroy'])->name('admin.works');


    // Skill section
    Route::get('admin/skills', [SkillController::class, 'index'])->name('admin.skills.index');
    Route::get('admin/skills/add', [SkillController::class, 'create'])->name('admin.skills.create');
    Route::post('admin/skills/add', [SkillController::class, 'store'])->name('admin.skills.create');
    Route::get('admin/skills/{id}/edit', [SkillController::class, 'edit'])->name('admin.skills.edit');
    Route::post('admin/skills/{id}/edit', [SkillController::class, 'update'])->name('admin.skills.edit');
    Route::get('admin/skills/{id}/delete', [SkillController::class, 'destroy'])->name('admin.skills');
});



// Clear application cache:
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});
