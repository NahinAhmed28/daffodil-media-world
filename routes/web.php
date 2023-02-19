<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {

Route::resource('about', AboutController::class);
Route::resource('service', ServiceController::class);
Route::resource('expertise', ExpertiseController::class);
Route::resource('mission', MissionController::class);
Route::resource('contact', ContactController::class);
Route::resource('organization', OrganizationController::class);
Route::resource('vision', VisionController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('hero', HeroController::class);
Route::resource('plan', PlanController::class);
Route::resource('member', MemberController::class);
Route::resource('product', ProductController::class);
});

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('public');
Route::group(['prefix'=>'public','as'=>'public.'], function(){
    Route::get('/about', [App\Http\Controllers\FrontEndController::class, 'about'])->name('about');
    Route::get('/service', [App\Http\Controllers\FrontEndController::class, 'service'])->name('service');
    Route::get('/product', [App\Http\Controllers\FrontEndController::class, 'product'])->name('product');
    Route::get('/expertise', [App\Http\Controllers\FrontEndController::class, 'expertise'])->name('expertise');
    Route::get('/mission', [App\Http\Controllers\FrontEndController::class, 'mission'])->name('mission');
    Route::get('/contact', [App\Http\Controllers\FrontEndController::class, 'contact'])->name('contact');
    Route::get('/organization', [App\Http\Controllers\FrontEndController::class, 'organization'])->name('organization');
    Route::get('/gallery', [App\Http\Controllers\FrontEndController::class, 'gallery'])->name('gallery');
    Route::post('/contactStore', [App\Http\Controllers\FrontEndController::class, 'contactStore'])->name('contactStore');
});
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

});
