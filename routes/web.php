<?php

use App\Models\Story;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/noticias', function () {
    $stories = Story::all();
    return view('stories', ['stories' => $stories]);
});

Route::get('/noticias2', function () {
    return view('stories2');
});



Route::get('/votes', function () {
    $users = User::all();
    return view('votes', ['users' => $users]);
});


Route::get('/users', function () {
    $users = User::all();
    return view('users', ['users' => $users]);
});
