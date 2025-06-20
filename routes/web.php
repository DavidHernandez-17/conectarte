<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
  Route::get('/inicio', function () {
    return view('dashboard');
  })->name('dashboard');

  Route::get('/perfil', \App\Livewire\Profile\Index::class)->name('profile.index');
});
