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
    return view('child');
});

Route::get('/task', 'TaskController@home');


Route::resource('post', 'PostController');

Route::get('task/{id}/delete', function ($id) {
    return '<form method="post" action="' . route('task.delete', [$id]) . '">
                <input type="hidden" name="_method" value="DELETE"> 
                <button type="submit">删除任务</button>
            </form>';
});

Route::delete('task/{id}', function ($id) {
    return 'Delete Task ' . $id;
})->name('task.delete');

Route::get('blade', function () {
    return view('child');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
