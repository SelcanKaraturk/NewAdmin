<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LanguageController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('',[DashboardController::class,'index']);


    Route::get('control/subcategory/{id}',[DashboardController::class,'subcategory'])->name('control.subcategory');
    Route::get('control/create/category/{id?}',[DashboardController::class,'created'])->name('control.created');
    Route::get('control/back/{id}',[DashboardController::class,'back'])->name('control.back');
    Route::resource('control', DashboardController::class)->except('create');

    Route::get('lang/value', [LanguageController::class,'value'])->name('lang.value');
    Route::post('lang/value', [LanguageController::class,'update_value'])->name('lang.value.update');
    Route::resource('lang', LanguageController::class);

});


