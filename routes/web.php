<?php

use App\Http\Livewire\Coba;
use App\Http\Livewire\Pemohon;
use App\Http\Livewire\PemohonIzin;
use App\Http\Livewire\Pertanyaan;
use App\Http\Livewire\Portal;
use App\Http\Livewire\Post;
use App\Http\Livewire\Review;
use App\Http\Livewire\Star;
use App\Http\Livewire\Survey;
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
// Route::get('/', function () {
//     return view('portal');
// });
// Route::get('/pertanyaan', function () {
//     return view('pertanyaan');
// });
// Route::get('/form', function () {
//     return view('nonpemohon');
// });
Route::get('/', Portal::class)->name('livewire.portal');
// Route::get('/portal', Portal::class)->name('livewire.portal');
Route::get('/pertanyaan', Pertanyaan::class)->name('livewire.pertanyaan');
Route::get('/star', Star::class)->name('livewire.star');
Route::get('/survey', Survey::class)->name('livewire.survey');
// Route::get('/survey/{id}', Survey::class)->name('livewire.survey');
Route::get('/pemohon', Pemohon::class)->name('livewire.pemohon');
Route::get('/pemohon-izin', PemohonIzin::class)->name('livewire.pemohon-izin');
Route::get('/coba', Coba::class)->name('livewire.coba');
Route::get('/review', Review::class)->name('livewire.review');
Route::get('post', Post::class);