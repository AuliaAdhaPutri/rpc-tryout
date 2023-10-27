<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login",
    ]);
});

Route::get('/tryout', function () {
    return view('tryout', [
        "title" => "Tryout",
    ]);
});

Route::get('/users', function () {
    return view('users', [
        "title" => "Users",
        "users" => User::all()
    ]);
});

// Route::get('/users', [UserController::class, 'index']);

Route::get('/results', function () {
    return view('results', [
        "title" => "Results",
    ]);
});

