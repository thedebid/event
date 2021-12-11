<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Fontend Routes
Route::get('/',[App\Http\Controllers\MainController::class,'index'])->name('home');
Route::get('/venues',[App\Http\Controllers\VenueController::class,'index'])->name('venue');
Route::get('/services',function(){
    return view('service');
})->name('service');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/birthday',function(){
    return view('birthday');
})->name('birthday');

Route::get('/wedding',function(){
    return view('wedding');
})->name('wedding');

Route::get('/anniversary',function(){
    return view('anniversary');
})->name('anniversary');

Route::get('/book', [App\Http\Controllers\BookingController::class, 'index'])->name('booking');
Route::post('/book', [App\Http\Controllers\BookingController::class, 'store'])->name('savebooking');

//Backend Routes
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
//Event Routes
Route::get('/admin/event', [App\Http\Controllers\EventController::class, 'index'])->name('viewevent');
Route::get('/admin/event/add', [App\Http\Controllers\EventController::class, 'addEvent'])->name('addevent');
Route::post('/admin/event/add', [App\Http\Controllers\EventController::class, 'store'])->name('saveevent');
Route::get('/admin/event/delete/{id}', [App\Http\Controllers\EventController::class, 'destroy'])->name('deleteevent');
//User Routes
Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('viewuser');
Route::get('/admin/user/add', [App\Http\Controllers\UserController::class, 'addUser'])->name('adduser');
Route::post('/admin/user/add', [App\Http\Controllers\UserController::class, 'store'])->name('saveuser');
Route::get('/admin/user/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('deleteevent');

//Venue Routes
Route::get('/admin/venue', [App\Http\Controllers\BackendVenueController::class, 'bakendindex'])->name('viewvenue');
Route::get('/admin/venue/add', [App\Http\Controllers\BackendVenueController::class, 'addvenue'])->name('addvenue');
Route::post('/admin/venue/add', [App\Http\Controllers\BackendVenueController::class, 'store'])->name('savevenue');
Route::get('/admin/venue/delete/{id}', [App\Http\Controllers\BackendVenueController::class, 'destroy'])->name('deletevenue');


//Bookings Routes
Route::get('/admin/bookings', [App\Http\Controllers\BackendBookingController::class, 'bakendindex'])->name('viewbooking');
Route::get('/admin/bookings/reject/{id}', [App\Http\Controllers\BackendBookingController::class, 'reject'])->name('updatebooking');
Route::get('/admin/bookings/approve/{id}', [App\Http\Controllers\BackendBookingController::class, 'approve'])->name('updatebooking');