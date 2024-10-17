<?php

use Illuminate\Support\Facades\Route;
use JobMetric\Pax\Http\Controllers\PaxController;

/*
|--------------------------------------------------------------------------
| Laravel Pax Panel Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Pax panel package
|
*/

// route pax panel
Route::name('pax.')->namespace('JobMetric\Pax\Http\Controllers')->group(function () {
    Route::get('/', [PaxController::class, 'index'])->name('dashboard');
});
