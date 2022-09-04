<?php


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



use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('StudentList',[App\Http\Controllers\TestController::class,'Index']);
Route::get('edit-employees/{id}',[App\Http\Controllers\TestController::class,'show']);
Route::post('edit-employees/{id}',[App\Http\Controllers\TestController::class,'edit']);
Route::get('delete/{id}',[App\Http\Controllers\TestController::class,'destroy']);
Route::post('create',[App\Http\Controllers\TestController::class,'insert']);


Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');











