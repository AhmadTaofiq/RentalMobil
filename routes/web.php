<?php

use App\Http\Controllers\cekcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

route::get('cek', [cekcontroller::class, 'index'])->name('check.cek');
route::get('cek/create', [cekcontroller::class, 'create'])->name('check.create');
route::post('cek', [cekcontroller::class, 'store'])->name('check.store');
