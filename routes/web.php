<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\MainController;
use App\Http\Controllers\Admin\CategoriesControler;
use App\Http\Controllers\Admin\TagsController;

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


// Index route
Route::get('/', [MainController::class, 'index']);

//admin Route
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function (){
    Route::get('dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::resource('categories', CategoriesControler::class);
    Route::resource('tags', TagsController::class);
});


//
//Route::get('/admin/dashboard', [MainController::class, 'dashboard'] )
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');


require __DIR__.'/auth.php';
