<?php
<<<<<<< HEAD

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
=======
use App\Models\Product;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
<<<<<<< HEAD
use App\Http\Controllers\ClienteController;
=======
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
>>>>>>> 83068897af9a5f76f60ba1c6043db917586a06f6

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

<<<<<<< HEAD
=======

>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
<<<<<<< HEAD
    Route::resource('/products', ProductController::class)->middleware('role:Administrator');
=======
    Route::resource('/products',ProductController::class)->middleware('role:Administrator');
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('clientes', ClienteController::class)->middleware('role:Administrator');;
});

require __DIR__.'/auth.php';
