<?php

use App\Livewire\Blog;
use App\Livewire\Program;
use App\Livewire\Services;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Livewire\Index::class);

Route::get('/program', Program::class)->name('program');

Route::get('services', Services::class)->name('services');


Route::get('/blog', Blog::class)->name('blog');


Route::get('/store', function () {
    return response('store page');
})->name('store');
