<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
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
Route::get('/basket', [CartController::class, 'index']);
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart']);
Route::patch('update-cart', [CartController::class, 'update']);
Route::get('remove-from-cart/{id}', [CartController::class, 'remove']);
Route::get('totalPrice/{id}/{total}', [CartController::class, 'totalPrice']);
Route::get('/authorization', [RegistrationController::class, 'create']);
Route::post('register', [RegistrationController::class, 'store']);
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);
Route::post('/updateUser', [SessionController::class, 'update']);
Route::post('/add-order', [CartController::class, 'addOrder']);

Route::get('/delivery', function () {
    return view('Delivery');
});
Route::get('/profile', [SessionController::class, 'profile']);

