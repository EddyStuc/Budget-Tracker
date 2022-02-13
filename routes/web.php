<?php

use App\Http\Controllers\BudgetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('budget', [BudgetController::class, 'index'])->middleware('auth')->name('budget');

require __DIR__ . '/auth.php';
