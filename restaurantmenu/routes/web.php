<?php

use App\Http\Controllers\ProfileController;
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

// routes/web.php

use App\Http\Controllers\CustomHomeController;

Route::get('/', [CustomHomeController::class, 'index'])->name('home');


Route::get('/contact-us', function () {
    return view('contact-us');
});


use App\Http\Controllers\EventsController;
Route::get('/events', [EventsController::class,'index'])->name('events');






Route::get('/test', function () {
    return view('test');
});





?>


