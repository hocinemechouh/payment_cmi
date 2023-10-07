<?php

use App\Http\Controllers\PaymentController;
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




// post to pay to the pay function in the PaymentController

Route::post('/pay', [PaymentController::class, 'pay'])->name('pay');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
}); 


