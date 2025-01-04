<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/Barangay-Management-System', [MainController::class,'mainController'])
->name('Main');
