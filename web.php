<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;


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

Route::get('/', [PageHomeController::class,'anasayfa'])->name('anasayfa');




Route::get('/moda', [PageController::class,'moda'])->name('moda');

Route::get('/elektronik', [PageController::class,'elektronik'])->name('elektronik');

Route::get('/aksesuar', [PageController::class,'aksesuar'])->name('aksesuar');




Route::get('/hesap', [PageController::class,'hesap'])->name('hesap');

Route::get('/iletisim', [PageController::class,'iletisim'])->name('iletisim');

Route::get('/sepet', [PageController::class,'cart'])->name('sepet');
