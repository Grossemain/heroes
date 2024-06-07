<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/heros', [HeroController::class, 'index'])->name('heros');
Route::resource('users', UserController::class)->except('index','create','store');
Route::resource('heros', HeroController::class);
Route::resource('skills', SkillController::class);
Auth::routes();

