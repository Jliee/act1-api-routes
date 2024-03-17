<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// you found my activity, nice >:3

Route::get('/secret', function() {
    return "what's the password?";
});

Route::post('/who', function(){
    return "bruh wont work cuz post";
});

Route::get('/usercontroller', [UserController::class, 'index']);

Route::match(['put', 'patch', 'post'], '/matching', function(){
    return 'This route is for put, patch, and post http verb only';
});

Route::match(['get','put', 'patch', 'post'], '/withget', function(){
    return 'This route works because it now also matches with get';
});

Route::any('/updateUserInfo', function(){
    return "This route accepts any http verb";
});

Route::get('/email', function (Request $request){
    return $request->email;
});

Route::get('/user-email', function (Request $request){
    return $request->name . ' - ' . $request->email;
});

