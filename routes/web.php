<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
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
Route::get('/ocean-freight', function () {
    return view('ocean');
});
Route::get('/air-freight', function () {
    return view('air');
});
Route::get('/consolidation', function () {
    return view('consolidation');
});
Route::get('/p.o.management', function () {
    return view('pomanagement');
});
Route::get('/warehousing', function () {
    return view('warehousing');
});
Route::get('/inland-tracking', function () {
    return view('inland');
});
Route::get('/cargo-express', function () {
    return view('cargo-express');
});
Route::get('/project-shipment', function () {
    return view('project-shipment');
});
Route::get('/custom-brokerage', function () {
    return view('custom-brokerage');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/specialized', function () {
    return view('Specialized');
});
Route::get('/air-freight/air-export', function () {
    return view('air-export');
});
Route::get('/air-freight/air-import', function () {
    return view('air-import');
});
Route::get('/ocean-freight/sea-import', function () {
    return view('sea-import');
});
Route::get('/ocean-freight/sea-export', function () {
    return view('sea-export');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/specialized/door-delivery', function () {
    return view('door');
});

Route::get('/specialized/Pharmaceutical', function () {
    return view('Pharmaceutical');
});
Route::get('/specialized/seafood', function () {
    return view('seafood');
});
Route::get('/specialized/dggoods', function () {
    return view('dggoods');
});
Route::get('/gellary', function () {
    return view('gellary');
});
Route::get('/executive', function () {
    return view('executive');
});
Route::get('/timeline', function () {
    return view('timeline');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/careers', function () {
    return view('careers');
});
Route::get('/news', function () {
    return view('news');
});

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
//     Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
// });

// Route::group(['prefix' =>'admin','middleware'=> 'auth'],function(){
//     Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
   

// });






Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
