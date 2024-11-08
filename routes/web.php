<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WorksheetController;

use App\Http\Controllers\SaveStateController;
use App\Http\Controllers\AddSheetController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('/', loginController::class)->names(['index' => 'login']);

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/worksheet', WorksheetController::class);
    Route::resource('/addSheet', AddSheetController::class);

    // SAVE STATE HANDLER
        Route::post('/update-account', [SaveStateController::class, 'saveTable'])->name('saveTable');
});






Route::post('/loginpost', [loginController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');