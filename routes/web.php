<?php

use App\Http\Controllers\SalesPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', SalesPageController::class)->name('sales');
