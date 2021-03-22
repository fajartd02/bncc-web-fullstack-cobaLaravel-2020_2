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
/*
Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/welcome', 'AuthController@req');
*/

Route::get('/', function(){
    return view('table');
});

Route::get('/data-tables',function(){
    return view('data-tables');
});

?>