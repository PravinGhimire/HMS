<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomDetailsController;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|/
*/

Route::get('/', [PagesController::class, 'index']);
Route::get('/header', [PagesController::class, 'header']);
Route::get('/footer', [PagesController::class, 'footer']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/room', [PagesController::class, 'room']);
Route::get('{id}/rums/', [PagesController::class, 'rums'])->name('rums');
Route::post('{id}/rums/', [PagesController::class, 'rums'])->name('rums');
Route::get('/gallerys', [PagesController::class, 'gallerys']);
Route::get('/bookingview', [PagesController::class, 'bookingview'])->name('bookingview');



Route::middleware('auth')->group(function () {
    // Route::get('/',[PagesController::class,'index']);

    Route::get('/dashboard', [dashboardcontroller::class, 'index'])->name('dashboard');
    //rooms
    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
    Route::POST('/rooms/store', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('/rooms/{id}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::post('/rooms/{id}/update', [RoomController::class, 'update'])->name('rooms.update');
    Route::post('/rooms/delete', [RoomController::class, 'delete'])->name('rooms.delete');
    //users
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
    Route::post('/user/delete', [UserController::class, 'delete'])->name('user.delete');

    //Gallery
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/gallery/{gallery}/update', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('/gallery/delete', [GalleryController::class, 'delete'])->name('gallery.delete');
    //sliders
    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/{slider}/edit', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/{slider}/update', [SliderController::class, 'update'])->name('slider.update');
    Route::post('/slider/delete', [SliderController::class, 'delete'])->name('slider.delete');
    //roomdetails
    Route::get('/roomdetails', [RoomDetailsController::class, 'index'])->name('roomdetails.index');
    Route::get('/roomdetails/create', [RoomDetailsController::class, 'create'])->name('roomdetails.create');
    Route::post('/roomdetails/store', [RoomDetailsController::class, 'store'])->name('roomdetails.store');
    Route::get('/roomdetails/{roomdetails}/edit', [RoomDetailsController::class, 'edit'])->name('roomdetails.edit');
    Route::post('/roomdetails/{roomdetails}/update', [RoomDetailsController::class, 'update'])->name('roomdetails.update');
    Route::post('/roomdetails/delete', [RoomDetailsController::class, 'delete'])->name('roomdetails.delete');
    //bookingrecords
    Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
    Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
    Route::post('/booking/{id}/cancel', [BookingController::class, 'cancel'])->name('booking.cancel');
    Route::post('/booking/delete', [BookingController::class, 'delete'])->name('booking.delete');
    Route::get('/booking/{id}/edit', [BookingController::class, 'edit'])->name('booking.edit');
    Route::post('/booking/{id}', [BookingController::class, 'update'])->name('booking.update');


    // Feedback
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::post('/feedback/delete', [FeedbackController::class, 'delete'])->name('feedback.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


//costumer
// Route::namespace('Costumers')->name('costumer.')->group(function(){
//     Route::namespace('Auth')->group(function(){
// //loginroute
//  Route::get('login','AuthenticatedSessionController@index')->name('login');
//     });
// });
