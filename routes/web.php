<?php

use App\Http\Controllers\ToyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperienceController;
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

Route::get('/', [ExperienceController::class, 'mycv'])->name ('inicio');


Route::get ('/index', [ExperienceController::class, 'index'])->name('experiences.index');
Route::get ('/experience/{experience}', [ExperienceController::class, 'show'])->name('experiences.show');

Route::get ('/experiences/create', [ExperienceController::class, 'create'])->name('experiences.create');
Route::post ('/experiences', [ExperienceController::class, 'store'])->name('experiences.store');
/*
Route::get ('/experiences/create', function () {
    $a = 12;
    dd ($a);
})->name('experiences.create');
*/


Route::get ('/experience/{experience}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
Route::put ('/experience/{experience}', [ExperienceController::class, 'update'])->name('experiences.update');

Route::delete ('/experience/{experience}', [ExperienceController::class, 'destroy'])->name ('experiences.destroy');
/*

Route::get ('/toyindex', [ToyController::class, 'index'])->name('toyindex');

Route::get ('/toyshow/{toy}', [ToyController::class, 'show'])->name('toyshow');
Route::group (['middleware' => 'auth'], function () {
    Route::get ('/toycreate', [ToyController::class, 'create'])->name('toycreate');
    Route::post ('/toystore', [ToyController::class,'store'])->name('toystore');
    
    Route::get ('/toyedit/{toy}', [ToyController::class, 'edit'])->name('toyedit');
    Route::post ('/toyupdate/{toy}', [ToyController::class,'update'])->name('toyupdate');
    
    Route::post ('/toydestroy/{toy}', [ToyController::class,'destroy'])->name('toydestroy');
    
} );

Route::get ('/contactcreate', [ContactController::class, 'create'])->name('contactcreate');
Route::post ('/contactstore', [ContactController::class,'store'])->name('contactstore');
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
