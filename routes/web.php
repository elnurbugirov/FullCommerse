<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/post/{id}', ['as'=>'home.post','uses'=>'HomeController@post']);


Route::group(['middleware' => 'admin'],function (){

    Route::get('/admin','AdminController@index');

    Route::resource('admin/users','AdminUsersController', ['names' => [
        'index'=>'users.index',
        'create'=>'users.create',
        'store'=>'users.store',
        'edit'=>'users.edit',
    ]]);

    Route::resource('admin/posts','AdminPostsController',['names'=>[

        'index'=>'posts.index',
        'create'=>'posts.create',
        'store'=>'posts.store',
        'edit'=>'posts.edit',
    ]]);

    Route::resource('admin/categories','AdminCategoriesController',['names'=>[

        'index'=>'categories.index',
        'create'=>'categories.create',
        'store'=>'categories.store',
        'edit'=>'categories.edit',

    ]]);

    Route::resource('admin/media','AdminMediasController',['names'=>[

        'index'=>'media.index',
        'create'=>'media.create',
        'store'=>'media.store',
        'edit'=>'media.edit',

    ]]);

    Route::resource('admin/comments','PostCommentController',['names'=>[

        'index'=>'comments.index',
        'create'=>'comments.create',
        'store'=>'comments.store',
        'edit'=>'comments.edit',
        'show'=>'comments.show',

    ]]);

    Route::resource('admin/comment/replies','CommentRepliesController',['names'=>[

        'index'=>'replies.index',
        'create'=>'replies.create',
        'store'=>'replies.store',
        'edit'=>'replies.edit',

    ]]);
});

Route::delete('admin/delete/media','AdminMediasController@deleteMedia');

Route::group(['middleware' => 'auth'],function (){
    Route::post('comment/reply','CommentRepliesController@createReply');

//    Route::get('/admin',function (){
//
//        return view('admin.index');
//    });
});

