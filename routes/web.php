<?php

use App\Http\Livewire\Pertanyaan;
use App\Http\Livewire\Portal;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('portal');
});
Route::get('/pertanyaan', function () {
    return view('pertanyaan');
});
Route::get('/form', function () {
    return view('nonpemohon');
});

Route::get('/portal', Portal::class)->name('livewire.portal');
Route::get('/pertanyaan', Pertanyaan::class)->name('livewire.pertanyaan');