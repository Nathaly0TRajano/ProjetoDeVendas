<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');

// Usuario tem que estar logado e ser um usuario do tipo admin
Route::get('admin/dashboard', Dashboard::class)->name('admin.dashboard')->middleware(['auth','user_type:admin']);
