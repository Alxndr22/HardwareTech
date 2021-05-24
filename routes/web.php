<?php

use App\Http\Controllers\Controller;
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
    return view('LandingDesktop')->with('pict', 'images/LandingBanner.jpg');
});
Route::get('/info', function () {
    return view('InfoPage')->with('pict', 'images/Contacts.jpg');
});

Route::get('product/{id}', [Controller::class, 'viewProduct']);
Route::get('container/{category}', [Controller::class, 'viewCategory']);

Route::get('/authorization', function () {
    return view('Authorization');
});
Route::get('/basket', function () {
    return view('Basket');
});


