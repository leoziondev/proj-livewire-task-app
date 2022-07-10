<?php

use App\Http\Livewire\Admin\{
    Dashboard,
    Category
};
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('admin.dashboard');
Route::get('/categories', Category::class)->name('admin.categories');
