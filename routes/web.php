<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function(){
    // Admin dashboard
    Route::get('/', 'HomeController@index')->name('home');
    // Admin posts
    Route::resource('posts', 'PostController')->parameters([
        'posts' => 'post:slug'
    ]);
});


// Aggiungo alla fine
Route::get("{any?}", function(){
    return view("guests.home");
})->where("any", ".*");