<?php


//User Routes

Route::group(['namespace' => 'App\Http\Controllers\User'],function(){
    Route::get('/','HomeController@index');
    Route::get('post/{post}','PostController@post')->name('post');
});

//Admin Routes
Route::group(['namespace' => 'App\Http\Controllers\Admin'],function(){
    
    Route::get('admin/home','HomeController@index')->name('admin.home');

    //Users Routes

    Route::resource('admin/user','UserController');

    //Post Routes

    Route::resource('admin/post','PostController');

    //Tag Routes

    Route::resource('admin/tag','TagController');

    //Category Routes

    Route::resource('admin/category','CategoryController');
});

