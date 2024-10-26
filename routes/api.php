<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//user végpontok (csoportosítás fontos)
Route::get('users', [UserController::class, 'index']); //kérés típusa(get stb), az útvonalat mi adjuk meg, melyik kontrollerben melyik függvény hajtja végre a kérést

//a getes kérések böngészőben is tesztelhetők