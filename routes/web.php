<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SendMailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
#Route::resource('products','ProductController');


Route::post('/SendMail/store',[SendMailController::class, 'store']);

Route::get('/SendMail',[SendMailController::class, 'index']);




/*Route::post('/SendMail',function(){

    return "test";
});*/

Route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('welcome');
});



