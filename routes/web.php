<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/teste', [TesteController::class, 'index']);

require __DIR__.'/auth.php';
