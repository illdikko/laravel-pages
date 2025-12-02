<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/', [ExampleController::class,"accueil"]);

Route::get('/', [ExampleController::class,"about"]);

