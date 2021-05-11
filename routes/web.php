<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;

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


Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/jquerymask', 'PagesController@jQueryMask');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');






Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


   
Route::get('/', [AdminController::class,'index'])->name('admin');

Route::get("/change-profile",[AdminController::class,'changeProfile']);
Route::post("/change-profile",[AdminController::class,'changeProfileSubmit']);
Route::get("/password-reset",[AdminController::class,'passwordRreset']);
Route::post("/password-reset",[AdminController::class,'passwordRresetSubmit']);



Auth::routes(['verify' => true,'register' => false]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
