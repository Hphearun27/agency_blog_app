<?php

use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;


Route::get('front-home', function (){
    return view('front-home');
});
Route ::get( uri: '/', action: [FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about']);

