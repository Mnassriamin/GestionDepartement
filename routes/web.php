<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatController;
use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;

Route::get('/epreuve', [EpreuveController::class, 'index']);

Route::get('/addep', [EpreuveController::class, 'store']);

Route::get('/matiere',  [MatController::class, 'index']);

Route::get('/addmat', [MatController::class, 'store']);

Route::get('/res1',  [TestController::class, 'affiche1']);

Route::get('/res2',  [TestController::class, 'affiche2']);

Route::get('/formMat',  [MatController::class,'create']);

Route::post('/formMat', [MatController::class,'store']);

Route::get('/formEp',  [EpreuveController::class,'create']);

Route::post('/formEp', [EpreuveController::class,'store']);







