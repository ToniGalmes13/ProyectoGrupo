<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller2;

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
    return view('inicio');
});
Route::get('/excursiones', function () {
    return view('excursiones');
});
Route::get('/sobrenosotros', function () {
    return view('sobrenosotros');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::post('/formForm', [Controller2::class, 'store']);