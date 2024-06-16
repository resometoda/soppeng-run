<?php

declare(strict_types=1);

use App\Livewire\Frontend\Index;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', Index::class)->name('front');
