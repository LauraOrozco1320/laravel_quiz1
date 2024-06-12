<?php

use App\Http\Controllers\UserCopyController;
use Illuminate\Support\Facades\Route;

Route::get('/asociar',[UserCopyController::class,'index']);
Route::post('/store',[UserCopyController::class,'store'])->name('ejemplar.store');