<?php

use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Route;
use JobMetric\Pax\Http\Controllers\PaxController;

/*
|--------------------------------------------------------------------------
| Laravel Media Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Pax package
|
*/

// media
Route::prefix('pax')->name('pax.')->namespace('JobMetric\Pax\Http\Controllers')->group(function () {
    Route::middleware([
        SubstituteBindings::class
    ])->group(function () {
        Route::get('/', [PaxController::class, 'index'])->name('index');
    });
});
