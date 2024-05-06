<?php

use App\Livewire\Blog;
use App\Livewire\Store;
use App\Livewire\Program;
use App\Livewire\BlogPost;
use App\Livewire\Services;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/store', Store::class)->name('store');
Route::get('/blog', Blog::class)->name('blog');

Route::get('/blog/{slug}', BlogPost::class);


Route::get('/foo', function () {
    Artisan::call('storage:link');
});
