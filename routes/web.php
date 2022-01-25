<?php

use App\Http\Controllers\BudgetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('budget', [BudgetController::class, 'index'])->name('budget');

require __DIR__.'/auth.php';
