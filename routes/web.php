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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::livewire('/login', 'login')->layout('layouts.plain')->name('login');
Route::livewire('/register', 'register')->layout('layouts.plain')->name('register');

Route::group(['middleware' => 'auth'], function () {
    Route::livewire('/dashboard', 'dashboard')->name('dashboard');
});
