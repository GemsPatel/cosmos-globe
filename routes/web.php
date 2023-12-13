<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CmsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CronController;
use App\Http\Controllers\GlobleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScraperController;

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "will clear the all cached!";
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('category/{slug}', [BlogController::class, 'getCategoryWiseBlogs'])->name('getCategoryWiseBlogs');
Route::get('{slug?}', [BlogController::class, 'getBlogDetails']);


Route::get('generateMaintanance', [CronController::class, 'maintananceInstall']);
Route::get('generateHome', [CronController::class, 'flatInstall']);
Route::get('generateHomeMaintanance', [CronController::class, 'flatMaintananceInstall']);
Route::get('report/{id}', [CronController::class, 'reportView']);

Route::get('scraper', [ScraperController::class, 'index']);

Route::get('business-visa',[CmsController::class,'businessVisa'])->name('businessVisa');
Route::get('contact-us',[CmsController::class,'contactUs'])->name('contactUs');
Route::get('about-us',[CmsController::class,'aboutUs'])->name('aboutUs');
Route::get('gallery',[CmsController::class,'gallery'])->name('gallery');
Route::get('faqs',[CmsController::class,'faqs'])->name('faqs');


Route::get('country/canada',[GlobleController::class,'CountryCanada'])->name('country.canada');
