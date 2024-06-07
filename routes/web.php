<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/heros', [HeroController::class, 'index'])->name('heros');
Route::resource('users', UserController::class);
Route::resource('heros', HeroController::class);
Route::resource('skills', SkillController::class);
Route::resource('searches', SearchController::class);
Route::get('/searches', [SearchController::class, 'index'])->name('search.index');
Auth::routes();

