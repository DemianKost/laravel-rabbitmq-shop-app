<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\TestJob;

Route::get('/', function () {
    TestJob::dispatch(['test']);
    
    return view('welcome');
});
