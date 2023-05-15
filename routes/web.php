<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/register-company', function () {
    return view('register_company');
});
Route::get('/client-area', function () {
    return view('client_area');
});
Route::get('/register-tester', function () {
    return view('register_area');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/what-we-do', function () {
    return view('what_we_do');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
