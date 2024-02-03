<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class,'index']);
Route::POST('/contacts/confirm',[ContactController::class,'confirm']);
Route::POST('/contacts',[ContactController::class,'store']);