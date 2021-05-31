<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SearchController;
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

Route::get('/', [Controller::class, 'index']);
Route::get('/info', function () {
    return view('InfoPage')->with('pict', 'images/Contacts.jpg')->with('slogan', ['top' => 'Контакти',
        'bottom' => 'Для будь-яких запитань, пропозицій і не тільки']);
});

Route::get('product/{id}', [Controller::class, 'viewProduct']);
Route::get('container/{category}', [Controller::class, 'viewCategory']);
Route::post('container/search', [SearchController::class, 'postSearch']);
Route::post('container/search/{category}', [SearchController::class, 'postSearchCategory']);

Route::get('/authorization', function () {
    return view('Authorization');
});
Route::get('/basket', function () {
    return view('Basket');
});
Route::get('/delivery', function () {
    return view('Delivery');
});
Route::get('/authorization2', function () {
    return view('Profile');
});

