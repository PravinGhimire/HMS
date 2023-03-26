<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\signupcontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/room',[PagesController::class,'room']);
Route::get('/gallery',[PagesController::class,'gallery']);



Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[dashboardcontroller::class,'index'])->name('dashboard');
    Route::get('/rooms',[RoomController::class,'index'])->name('rooms.index');
    Route::get('/rooms/create',[RoomController::class,'create'])->name('rooms.create');
    Route::POST('/rooms/store',[RoomController::class,'store'])->name('rooms.store');

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//costumer
// Route::namespace('Costumers')->name('costumer.')->group(function(){
//     Route::namespace('Auth')->group(function(){
// //loginroute
//  Route::get('login','AuthenticatedSessionController@index')->name('login');
//     });
// });


