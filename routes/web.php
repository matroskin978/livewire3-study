<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
})->name('home');*/

Route::get('/', \App\Livewire\User\UserList::class)->name('home');
Route::get('/create-user', \App\Livewire\User\UserCreate::class)->name('user-create');
