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

Route::get('/', function () {

    //creo variabili
    $page_title = "Welcome to Laravel";
    $class_number = '72';

    //le invio alla view
    return view('welcome', compact('page_title', 'class_number'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/link', function () {
    $link = [
        'page_title' => 'Link classe 72',
        'description' => 'Lorem',
        'students' => [
            'Andrea',
            'Giordana',
            'Fra',
        ],
        'teachers' => [],
    ];
    return view('link', $link);
});
