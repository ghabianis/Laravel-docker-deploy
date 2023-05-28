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

Route::get('/products', function () {
    $response = Http::get('https://tech.dev.ats-digital.com/api/products', [
        'size' => 20
    ]);
    
    $data = $response->json();
    
    return view('welcome', ['data' => $data]);
});

Route::get('/', function () {  
    return view('portfolio');
});

Route::post('/submit-form', [Controller::class, 'submit'])->name('submit-form');