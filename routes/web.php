<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\FrontendController;
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

Route ::get('/',[FrontendController:: class ,'index']);
Route ::get('/add',[FrontendController:: class ,'add']);
Route ::post('/insert',[FrontendController:: class ,'insert']);

Route ::get('/list',[FrontendController:: class ,'list']);
Route::get('/delete/{id}',[FrontendController::class,'delete']);
Route::get('/edit/{id}',[FrontendController::class,'edit']);
Route::put('/Update-data/{id}',[FrontendController::class,'update']);





