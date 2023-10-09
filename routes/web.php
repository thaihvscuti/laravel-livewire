<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Contract\Index;
use Illuminate\Support\Facades\Route;
use App\Livewire\Contract\Create;
use App\Livewire\Contract\Update;

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
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contract', Index::class)->name('contract.index');
Route::get('/contract/create', Create::class)->name('contract.create');
Route::get('/contract/create', Create::class)->name('contract.create');
Route::get('/contract/edit/{id}', Update::class)->name('contract.edit');
