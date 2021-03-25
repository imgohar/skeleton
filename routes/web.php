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

Route::get('/', function(){
    return redirect("/admin");
});
// Route::post('/pin2',[AdminController::class,'index2'])->name('pin2');

// Demo routes
// Route::middleware(['phone_verify'])->group(function(){

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
    


   
    
    
    // Quick search dummy route to display html elements in search dropdown (header search)
    Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


    // ADMIN ROUTES

    Route::get('/admin', [AdminController::class,'index'])->name('admin');
    
    Route::get("/admin/change-profile",[AdminController::class,'changeProfile']);
    Route::post("/admin/change-profile",[AdminController::class,'changeProfileSubmit']);
    Route::get("/admin/password-reset",[AdminController::class,'passwordRreset']);
    Route::post("/admin/password-reset",[AdminController::class,'passwordRresetSubmit']);





    // USER ROUTES
    Route::get("/admin/all-users",[AdminController::class,'allUsers']);
    Route::get("/admin/user/delete/{id}",[AdminController::class,"deleteUser"]);
    
// });

Auth::routes(['verify' => true,'register' => false]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');




// Route::get('/', 'PlayerController@index')->name('customer')->middleware('customer');
// Route::get('/seller', 'ScoutController@index')->name('seller')->middleware('seller');