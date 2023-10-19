<?php

use App\Http\Controllers\Backend\InformationController;
use App\Http\Controllers\Backend\MetaDataController;
use App\Http\Controllers\Backend\PDFController;
use App\Http\Controllers\Backend\PortfolioImageController;
use App\Http\Controllers\Backend\ProjectsCategoryController;
use App\Http\Controllers\Backend\ProjectsController;
use App\Http\Controllers\Backend\TestimonialsController;
use App\Http\Controllers\Frontend\Template2Controller;
use App\Models\Information;
use App\Models\MetaData;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/', [Template2Controller::class,'index'])->name('template2.home');
Route::get('/project_details/{id}', [Template2Controller::class,'projectDetails'])->name('template2.projectDetails');




// template 2

Route::get('/template1', function () {
    return view('frontend.Template1.pages.index');
})->name('template1.home');

Route::get('/services', function () {
    return view('frontend.Template1.pages.services');
})->name('template1.services');

Route::get('/portfolio', function () {
    return view('frontend.Template1.pages.portfolio');
})->name('template1.portfolio');

Route::get('/about', function () {
    return view('frontend.Template1.pages.about');
})->name('template1.about');

Route::get('/contact', function () {
    return view('frontend.Template1.pages.contact');
})->name('template1.contact');

Route::get('/blog', function () {
    return view('frontend.Template1.pages.blog');
})->name('template1.blog');


Route::group([
    // url prefix
  'prefix' => LaravelLocalization::setLocale(),
  'middleware' => [
              'auth:web','localeCookieRedirect', 'localizationRedirect', 'localeViewPath'
  ],

], function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard.index');
    })->name('dashboard');
    

    Route::group([],function () {
        Route::get('/information',[InformationController::class,'index'])->name('information');
        Route::get('/add_information',[InformationController::class,'add'])->name('information.add');
        Route::post('/store_information',[InformationController::class,'store'])->name('information.store');
        Route::get('/edit_information/{id}',[InformationController::class,'edit'])->name('information.edit');
        Route::put('/update_information/{id}',[InformationController::class,'update'])->name('information.update');
    });

    Route::group([],function () {
        Route::get('/categories',[ProjectsCategoryController::class,'index'])->name('categories');
        Route::get('/add_category',[ProjectsCategoryController::class,'add'])->name('categories.add');
        Route::post('/store_category',[ProjectsCategoryController::class,'store'])->name('categories.store');
        Route::get('/edit_category/{id}',[ProjectsCategoryController::class,'edit'])->name('categories.edit');
        Route::put('/update_category/{id}',[ProjectsCategoryController::class,'update'])->name('categories.update');
    });

    Route::group([],function () {
        Route::get('/projects',[ProjectsController::class,'index'])->name('projects');
        Route::get('/add_project',[ProjectsController::class,'add'])->name('projects.add');
        Route::post('/store_project',[ProjectsController::class,'store'])->name('projects.store');
        Route::get('/edit_project/{id}',[ProjectsController::class,'edit'])->name('projects.edit');
        Route::put('/update_project/{id}',[ProjectsController::class,'update'])->name('projects.update');
    });

    Route::group([],function () {
        Route::get('/testimonials',[TestimonialsController::class,'index'])->name('testimonials');
        Route::get('/add_testimonial',[TestimonialsController::class,'add'])->name('testimonials.add');
        Route::post('/store_testimonial',[TestimonialsController::class,'store'])->name('testimonials.store');
        Route::get('/edit_testimonial/{id}',[TestimonialsController::class,'edit'])->name('testimonials.edit');
        Route::put('/update_testimonial/{id}',[TestimonialsController::class,'update'])->name('testimonials.update');
    });


    Route::group([],function () {
        Route::get('/metaData',[MetaDataController::class,'index'])->name('metaData');
        Route::get('/add_metaData',[MetaDataController::class,'add'])->name('metaData.add');
        Route::post('/store_metaData',[MetaDataController::class,'store'])->name('metaData.store');
        Route::get('/edit_metaData/{id}',[MetaDataController::class,'edit'])->name('metaData.edit');
        Route::put('/update_metaData/{id}',[MetaDataController::class,'update'])->name('metaData.update');
    });

    Route::group([],function () {
        Route::get('/portfolioImages',[PortfolioImageController::class,'index'])->name('portfolioImages');
        Route::get('/add_portfolioImage',[PortfolioImageController::class,'add'])->name('portfolioImages.add');
        Route::post('/store_portfolioImage',[PortfolioImageController::class,'store'])->name('portfolioImages.store');
        Route::get('/edit_portfolioImage/{id}',[PortfolioImageController::class,'edit'])->name('portfolioImages.edit');
        Route::put('/update_portfolioImage/{id}',[PortfolioImageController::class,'update'])->name('portfolioImages.update');
    });

    Route::get('/pdfs', [PDFController::class,'index'])->name('PDFs');
    Route::get('/add_pdf', [PDFController::class,'add'])->name('PDFs.add');
    Route::post('/upload-pdf', [PDFController::class,'store'])->name('PDFs.store');


    
});