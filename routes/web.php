<?php

use App\Http\Livewire\Admin\{
    Dashboard,
    Category,
    Task
};
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('admin.dashboard');
Route::get('/categories', Category::class)->name('admin.categories');
Route::get('/tasks', Task::class)->name('admin.tasks');
