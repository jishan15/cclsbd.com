<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TimelineController;
use App\Http\Controllers\Admin\NewsroomController;
use App\Http\Controllers\Admin\NewsExecutiveController;
use App\Http\Controllers\Admin\NewsTimelineController;
use App\Http\Controllers\Admin\NewsTestimonalsController;

// use App\Models\Newsroom;
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
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/news', [App\Http\Controllers\WelcomeController::class, 'news']);
Route::get('/contact', [App\Http\Controllers\WelcomeController::class, 'contacts']);
Route::post('/contacts', [App\Http\Controllers\WelcomeController::class, 'contact'])->name('contact');
Route::get('/timeline', [App\Http\Controllers\WelcomeController::class, 'timelines']);
// Route::get('/newstimeline', [App\Http\Controllers\WelcomeController::class, 'newsTimeline']);
Route::get('/executive', [App\Http\Controllers\WelcomeController::class, 'executive']);
Route::get('/testimonials', [App\Http\Controllers\WelcomeController::class, 'testimonials']);
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
Route::get('/work', function () {
    return view('work');
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/dowonload', function () {
    return view('dowonload');
});
Route::get('/awards', function () {
    return view('awards');
});
Route::get('/carriers', function () {
    return view('carriers');
});
Route::get('/glossary', function () {
    return view('glossary');
});
Route::get('/approch', function () {
    return view('approch');
});
// Route::get('/contact', function () {
//     return view('contact');
// });
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
// Route::get('/executive', function () {
//     return view('executive');
// });
// Route::get('/timeline', function () {

//     return view('timeline');
// });
// Route::get('/testimonials', function () {
//     return view('testimonials');
// });
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/careers', function () {
    return view('careers');
});
// Route::get('/news', function () {
//     return view('news');
// });

Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
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
    //news route
    Route::get('/newsroom',[NewsroomController::class,'index'])->name('newsroom.index');
    Route::get('/newsroom/create',[NewsroomController::class,'create'])->name('newsroom.create');
    Route::post('/newsroom/store',[NewsroomController::class,'store'])->name('newsroom.store');
    Route::get('/newsroom/edit/{id}',[NewsroomController::class,'edit'])->name('newsroom.edit');
    Route::post('/newsroom/update/{id}',[NewsroomController::class,'update'])->name('newsroom.update');
    Route::delete('/newsroom/destroy/{id}',[NewsroomController::class,'destroy'])->name('newsroom.destroy');
    //contact route
    Route::get('/contacts',[ContactController::class,'index'])->name('contact.index');
    Route::post('/contacts/destroy/{id}',[ContactController::class,'destroy'])->name('contact.destroy');

    //Timeline route
    Route::get('/timelines',[TimelineController::class,'index'])->name('timeline.index');
    Route::get('/timelines/create',[TimelineController::class,'create'])->name('timeline.create');
    Route::post('/timelines/store',[TimelineController::class,'store'])->name('timeline.store');
    Route::get('/timelines/edit/{id}',[TimelineController::class,'edit'])->name('timeline.edit');
    Route::post('/timelines/update/{id}',[TimelineController::class,'update'])->name('timeline.update');
    Route::delete('/timelines/destroy/{id}',[TimelineController::class,'destroy'])->name('timeline.destroy');

    //news route
    Route::get('/executives',[NewsExecutiveController::class,'index'])->name('executive.index');
    Route::get('/executives/create',[NewsExecutiveController::class,'create'])->name('executive.create');
    Route::post('/executives/store',[NewsExecutiveController::class,'store'])->name('executive.store');
    Route::get('/executives/edit/{id}',[NewsExecutiveController::class,'edit'])->name('executive.edit');
    Route::post('/executives/update/{id}',[NewsExecutiveController::class,'update'])->name('executive.update');
    Route::delete('/executives/destroy/{id}',[NewsExecutiveController::class,'destroy'])->name('executive.destroy');
    
     //news route
     Route::get('/newstimeline',[NewsTimelineController::class,'index'])->name('newstimeline.index');
     Route::get('/newstimeline/create',[NewsTimelineController::class,'create'])->name('newstimeline.create');
     Route::post('/newstimeline/store',[NewsTimelineController::class,'store'])->name('newstimeline.store');
     Route::get('/newstimeline/edit/{id}',[NewsTimelineController::class,'edit'])->name('newstimeline.edit');
     Route::post('/newstimeline/update/{id}',[NewsTimelineController::class,'update'])->name('newstimeline.update');
     Route::delete('/newstimeline/destroy/{id}',[NewsTimelineController::class,'destroy'])->name('newstimeline.destroy');

     //news route
     Route::get('/newtestimonals',[NewsTestimonalsController::class,'index'])->name('newtestimonals.index');
     Route::get('/newtestimonals/create',[NewsTestimonalsController::class,'create'])->name('newtestimonals.create');
     Route::post('/newtestimonals/store',[NewsTestimonalsController::class,'store'])->name('newtestimonals.store');
     Route::get('/newtestimonals/edit/{id}',[NewsTestimonalsController::class,'edit'])->name('newtestimonals.edit');
     Route::post('/newtestimonals/update/{id}',[NewsTestimonalsController::class,'update'])->name('newtestimonals.update');
     Route::delete('/newtestimonals/destroy/{id}',[NewsTestimonalsController::class,'destroy'])->name('newtestimonals.destroy');
});
  






Auth::routes();


