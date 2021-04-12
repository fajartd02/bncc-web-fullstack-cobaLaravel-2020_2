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

// Tugas 12
// Route::get('/', 'HomeController@home');

// Route::get('/register', 'AuthController@register');

// Route::post('/welcome', 'AuthController@welcome');

// //Tugas 13
// Route::get('/', function(){
//     return view('task13.taskTable');
// });

// Route::get('/data-table', function(){
//     return view('task13.dataTable');
// });

// Task 15
Route::GET('/pertanyaan', 'PertanyaanController@index');
Route::GET('/pertanyaan/create', 'PertanyaanController@create');
Route::POST('/pertanyaan', 'PertanyaanController@store');
Route::GET('/pertanyaan/{id}', 'PertanyaanController@show');
Route::GET('/pertanyaan/edit/{id}','PertanyaanController@edit');
Route::POST('/pertanyaan/{id}','PertanyaanController@update');
Route::GET('/pertanyaan/delete/{id}','PertanyaanController@destroy');

Route::resource('/pertanyaan', 'PertanyaanController');
// Route::resource([
//     'photos' => PhotoController::Mahasiswa,
//     'posts' => PostController::Mahasiswa,
// ]);