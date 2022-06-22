<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Farmer;

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
Route::post('register' , [Farmer::class,'register']);
Route::post('login' , [Farmer::class,'login']);

Route::post('addeggs' , [Farmer::class,'addEggs']);
Route::post('addfeeds' , [Farmer::class,'addFeeds']);
Route::post('addflock' , [Farmer::class,'addFlock']);
Route::post('addtransactions' , [Farmer::class,'addTransactions']);

Route::get('geteggs' , [Farmer::class,'getEggs']);
Route::get('getfeeds' , [Farmer::class,'getFeeds']);
Route::get('getflock' , [Farmer::class,'getFlock']);
Route::get('gettransactions' , [Farmer::class,'getTransactions']);
