<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// use GuzzleHttp\Psr7\Request; 
use Illuminate\Http\Request;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
// Route::get('/nope','UserController@noFunction');
Route::get('/user',[UserController::class, 'index']);
Route::get('/hope','NewCon@index');
Route::get('/todos',[TodoController::class,'index']);
Route::get('/todos/create',[TodoController::class,'create']);

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/upload',function(Request $request){
// dd(request()->all());
// dd($request->file('image'));

// save into storages
$request->image->store('image','public');
return 'uploaded';
});

Route::post('/upload',[UserController::class, 'uploadAvatar']);
