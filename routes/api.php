<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//user végpontok (csoportosítás fontos)
Route::get('/users', [UserController::class, 'index']); //kérés típusa(get stb), az útvonalat mi adjuk meg, melyik kontrollerben melyik függvény hajtja végre a kérést
Route::get('/users/{id}', [UserController::class, 'show']); 
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']); 
Route::delete('/users/{id}', [UserController::class, 'destroy']); 


//book végpontok 
Route::get('/books', [UserController::class, 'index']); 

//a getes kérések böngészőben is tesztelhetők