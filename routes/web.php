<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::livewire('/', 'home')->name('home');

Route::livewire('/login', 'login')->layout('layouts.plain')->name('login');
Route::livewire('/register', 'register')->layout('layouts.plain')->name('register');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::livewire('/dashboard', 'dashboard')->layout('layouts.admin')->name('dashboard');
    Route::livewire('/posts', 'post-list')->layout('layouts.admin')->name('posts.index');
    Route::livewire('/posts/create', 'create-post-form')->layout('layouts.admin')->name('posts.create');
    Route::livewire('/posts/{post}/edit', 'edit-post-form')->layout('layouts.admin')->name('posts.edit');
});
