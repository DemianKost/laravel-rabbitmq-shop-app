<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\StoreController as UserStoreController;

Route::prefix('auth')->as('auth:')->group( function() {
    Route::post('/', UserStoreController::class)->name('store');
});

// Authorized routes
Route::middleware('auth:sanctum')->group( function() {

});