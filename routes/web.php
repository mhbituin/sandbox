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

Route::get('/', function () {
    return view('welcome');
});




Route::get('login', 'Hello@login');












// Resource controller
Route::resource('hellos', 'HelloResource');



// Route group, Prefixing
Route::group(['prefix' => 'hello'], function() {
    Route::get('/', 'Hello@index')->name('hello.index');
    Route::get('{id}', 'Hello@param')->name('hello.param');
});


// Route group, Namespace
Route::group(['namespace' => 'Group'], function() {
    Route::get('group', 'GroupController@index');
    Route::get('groupie', 'GroupieController@index');
});


// Route group, Name prefix
/*
Route::group(['as' => 'users.', 'prefix' => 'users'], function () {
    Route::group(['as' => 'comments.', 'prefix' => 'comments'], function () {
// Route name will be users.comments.show
        Route::get('{id}', function () {
//
        })->name('show');
    });
});
*/



// Route group, commmonly used for middleware
// Route::group(['middleware' => 'auth'], function () { 
// });