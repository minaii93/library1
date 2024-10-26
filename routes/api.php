<?php

use App\Http\Controllers\Bookcontroller;
use App\Http\Controllers\UserController;
use App\Models\Book;
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

Route::get('/books',function (Request $request){
    return $request ->book();
})->middleware('auth:sanctum');


Route::get('/books', [Bookcontroller::class, 'index']); 
Route::get('/books/{book_id}', [BookController::class, 'show']); 
Route::post('/books', [Bookcontroller::class, 'store']);
Route::put('/books/{id}', [BookController::class, 'update']); 
Route::delete('/books/{id}', [BookController::class, 'destroy']); 

//a getes kérések böngészőben is tesztelhetők