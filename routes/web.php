<?php

use App\Http\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('admin.dashboard');
