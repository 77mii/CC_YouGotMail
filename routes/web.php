<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MailingListController;

// // Route to display the subscription form
// Route::get('/subscribe', [MailingListController::class, 'create'])->name('subscribe.form');

// // Route to handle the form submission
// Route::post('/subscribe', [MailingListController::class, 'store'])->name('subscribe.store');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('/send-email', [MailController::class, 'SendEmail'])->name('send-email');

// Route to display the subscription form on the landing page
Route::get('/', [MailingListController::class, 'create'])->name('subscribe.form');

// Route to handle the form submission from the landing page
Route::post('/', [MailingListController::class, 'store'])->name('subscribe.store');

// Your other email route
Route::post('/send-email', [MailController::class, 'SendEmail'])->name('send-email');

// The old welcome route is no longer needed
// Route::get('/', function () {
//     return view('welcome');
// });
