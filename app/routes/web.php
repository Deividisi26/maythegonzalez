<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\emailController;

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

Route::get('/', App\Http\Livewire\Front::class)->name('front');

Route::get( '/', [emailController::class, 'index'])->name('livewire.index');

Route::post( 'email/confirmacion', [emailController::class, 'store'])->name('form');