<?php

use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/users', [UserInfoController::class, 'index'])->name('user_info.index');

});

require __DIR__.'/auth.php';
