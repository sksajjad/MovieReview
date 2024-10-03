<?php

use Illuminate\Support\Facades\Route;

Route::any('/home', [\App\Http\Controllers\movrev::class, 'home']);

Route::any('/homelist', [\App\Http\Controllers\movrev::class, 'list']);

Route::any('/listmanage', [\App\Http\Controllers\movrev::class, 'listmanage']);

Route::any('/login', [\App\Http\Controllers\movrev::class, 'login']);

Route::any('/signup', [\App\Http\Controllers\movrev::class, 'signup']);

Route::any('/logout', [\App\Http\Controllers\movrev::class, 'logout']);

Route::any('/ratings', [\App\Http\Controllers\movrev::class, 'ratings']);
