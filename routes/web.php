<?php

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

Route::get('/', function() {
    return view('posts/top');
});

Route::get('/create_schedule', function() {
    return view('posts/create_schedule');
});

Route::get('/add_task', function() {
    return view('posts/add_task');
});

Route::get('/create_sheet', function() {
    return view('posts/create_sheet');
});

Route::get('/edit_sheet', function() {
    return view('posts/edit_sheet');
});

Route::get('/edit_task', function() {
    return view('posts/edit_task');
});

Route::get('/login', function() {
    return view('posts/login');
});

Route::get('/schedule', function() {
    return view('posts/schedule');
});
