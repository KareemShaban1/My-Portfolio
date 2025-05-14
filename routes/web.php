<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\InformationController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\MetaDataController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\PageInformationController;
use App\Http\Controllers\Backend\PDFController;
use App\Http\Controllers\Backend\PersonalExperienceController;
use App\Http\Controllers\Backend\PortfolioImageController;
use App\Http\Controllers\Backend\ProjectsCategoryController;
use App\Http\Controllers\Backend\ProjectsController;
use App\Http\Controllers\Backend\TemplateController;
use App\Http\Controllers\Backend\TemplateInformationController;
use App\Http\Controllers\Backend\TestimonialsController;
use App\Http\Controllers\Frontend\FrontTemplateController;
use App\Http\Controllers\Frontend\MailController;
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

Route::get('/', [FrontTemplateController::class,'index'])->name('template.home');
Route::get('/template1', [FrontTemplateController::class,'template1'])->name('template1.home');
Route::get('/template2', [FrontTemplateController::class,'template2'])->name('template2.home');
Route::get('/template3', [FrontTemplateController::class,'template3'])->name('template3.home');

Route::get('/project_details/{id}', [FrontTemplateController::class,'projectDetails'])->name('template2.projectDetails');


Route::get('/mail-success', function(){
    return view('emails.contact.success');
})->name('mailSuccess');


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
    
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    
    Route::post('/send-email', [MailController::class,'sendEmail'])->name('sendEmail');


    Route::group([],function () {
        Route::get('/information',[InformationController::class,'index'])->name('information');
        Route::get('/add_information',[InformationController::class,'add'])->name('information.add');
        Route::post('/store_information',[InformationController::class,'store'])->name('information.store');
        Route::get('/information/{id}/edit',[InformationController::class,'edit'])->name('information.edit');
        Route::put('/update_information/{id}',[InformationController::class,'update'])->name('information.update');
        Route::delete('/information/{id}',[InformationController::class,'destroy'])->name('information.delete');
    });

    Route::group([],function () {
        Route::get('/template_information',[TemplateInformationController::class,'index'])->name('templateInformation');
        Route::post('/store_template_information',[TemplateInformationController::class,'store'])->name('templateInformation.store');
        Route::get('/template_information/{id}/edit',[TemplateInformationController::class,'edit'])->name('templateInformation.edit');
        Route::put('/update_template_information/{id}',[TemplateInformationController::class,'update'])->name('templateInformation.update');
        Route::delete('/template_information/{id}',[TemplateInformationController::class,'destroy'])->name('templateInformation.delete');
    });

    Route::group([],function () {
        Route::get('/page_information',[PageInformationController::class,'index'])->name('pageInformation');
        Route::post('/store_page_information',[PageInformationController::class,'store'])->name('pageInformation.store');
        Route::get('/page_information/{id}/edit',[PageInformationController::class,'edit'])->name('pageInformation.edit');
        Route::put('/update_page_information/{id}',[PageInformationController::class,'update'])->name('pageInformation.update');
        Route::delete('/page_information/{id}',[PageInformationController::class,'destroy'])->name('pageInformation.delete');
    });

    Route::group([],function (): void {
        Route::get('/templates',[TemplateController::class,'index'])->name('templates');
        Route::post('/templates',[TemplateController::class,'store'])->name('templates.store');
        Route::get('/templates/{id}/edit',[TemplateController::class,'edit'])->name('templates.edit');
        Route::put('/templates/{id}',[TemplateController::class,'update'])->name('templates.update');
        Route::delete('/templates/{id}',[TemplateController::class,'destroy'])->name('templates.delete');
    });

    Route::group([],function () {
        Route::get('/pages',[PageController::class,'index'])->name('pages');
        Route::get('/pages/create',[PageController::class,'create'])->name('pages.create');
        Route::post('/store_page',[PageController::class,'store'])->name('pages.store');
        Route::get('/pages/{id}/edit',[PageController::class,'edit'])->name('pages.edit');
        Route::put('/update_page/{id}',[PageController::class,'update'])->name('pages.update');
        Route::delete('/pages/{id}',[PageController::class,'destroy'])->name('pages.delete');
    });

    Route::group([],function () {
        Route::get('/categories',[ProjectsCategoryController::class,'index'])->name('categories');
        Route::get('/add_category',[ProjectsCategoryController::class,'add'])->name('categories.add');
        Route::post('/store_category',[ProjectsCategoryController::class,'store'])->name('categories.store');
        Route::get('/categories/{id}/edit',[ProjectsCategoryController::class,'edit'])->name('categories.edit');
        Route::put('/update_category/{id}',[ProjectsCategoryController::class,'update'])->name('categories.update');
        Route::delete('/categories/{id}',[ProjectsCategoryController::class,'destroy'])->name('categories.delete');
    });

    Route::group([],function () {
        Route::get('/projects',[ProjectsController::class,'index'])->name('projects');
        Route::get('/add_project',[ProjectsController::class,'add'])->name('projects.add');
        Route::post('/store_project',[ProjectsController::class,'store'])->name('projects.store');
        Route::get('/projects/{id}/edit',[ProjectsController::class,'edit'])->name('projects.edit');
        Route::put('/update_project/{id}',[ProjectsController::class,'update'])->name('projects.update');
        Route::delete('/projects/{id}',[ProjectsController::class,'destroy'])->name('projects.delete');

    });

    Route::group([],function () {
        Route::get('/testimonials',[TestimonialsController::class,'index'])->name('testimonials');
        Route::get('/add_testimonial',[TestimonialsController::class,'add'])->name('testimonials.add');
        Route::post('/store_testimonial',[TestimonialsController::class,'store'])->name('testimonials.store');
        Route::get('/testimonials/{id}/edit',[TestimonialsController::class,'edit'])->name('testimonials.edit');
        Route::put('/update_testimonial/{id}',[TestimonialsController::class,'update'])->name('testimonials.update');
        Route::delete('/testimonials/{id}',[TestimonialsController::class,'destroy'])->name('testimonial.delete');

    });


    Route::group([],function () {
        Route::get('/metaData',[MetaDataController::class,'index'])->name('metaData');
        Route::get('/add_metaData',[MetaDataController::class,'add'])->name('metaData.add');
        Route::post('/store_metaData',[MetaDataController::class,'store'])->name('metaData.store');
        Route::get('/metaData/{id}/edit',[MetaDataController::class,'edit'])->name('metaData.edit');
        Route::put('/update_metaData/{id}',[MetaDataController::class,'update'])->name('metaData.update');
        Route::delete('/metaData/{id}',[MetaDataController::class,'destroy'])->name('metaData.delete');

    });

    Route::group([],function () {
        Route::get('/media',[MediaController::class,'index'])->name('media');
        Route::get('/media/create',[MediaController::class,'add'])->name('media.add');
        Route::post('/media',[MediaController::class,'store'])->name('media.store');
        Route::get('media/{id}/edit',[MediaController::class,'edit'])->name('media.edit');
        Route::post('/media/{id}',[MediaController::class,'update'])->name('media.update');
        Route::delete('/media/{id}',[MediaController::class,'destroy'])->name('media.delete');
    });

    Route::group([],function () {
        Route::get('/personalExperience',[PersonalExperienceController::class,'index'])->name('personalExperience');
        Route::get('/add_personalExperience',[PersonalExperienceController::class,'add'])->name('personalExperience.add');
        Route::post('/store_personalExperience',[PersonalExperienceController::class,'store'])->name('personalExperience.store');
        Route::get('/personalExperience/{id}/edit',[PersonalExperienceController::class,'edit'])->name('personalExperience.edit');
        Route::put('/update_personalExperience/{id}',[PersonalExperienceController::class,'update'])->name('personalExperience.update');
        Route::delete('/personalExperience/{id}',[PersonalExperienceController::class,'destroy'])->name('personalExperience.delete');

    });

    Route::get('/pdfs', [PDFController::class,'index'])->name('pdfs');
    Route::get('/pdfs/data', [PDFController::class,'data'])->name('pdfs.data');
    Route::get('/add_pdf', [PDFController::class,'add'])->name('pdfs.add');
    Route::post('/upload-pdf', [PDFController::class,'store'])->name('pdfs.store');
    Route::get('/pdfs/{id}/edit', [PDFController::class,'edit'])->name('pdfs.edit');
    Route::put('/pdfs/{id}', [PDFController::class,'update'])->name('pdfs.update');
    Route::delete('/pdfs/{id}', [PDFController::class,'destroy'])->name('pdfs.delete');

    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);


    
});