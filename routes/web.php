<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CronController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\Web\CountryController;
use App\Http\Controllers\Web\BusinessVisaController;

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "will clear the all cached!";
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('generateMaintanance', [CronController::class, 'maintananceInstall']);
Route::get('generateHome', [CronController::class, 'flatInstall']);
Route::get('generateHomeMaintanance', [CronController::class, 'flatMaintananceInstall']);
Route::get('report/{id}', [CronController::class, 'reportView']);

Route::get('scraper', [ScraperController::class, 'index']);

Route::get('business-visa',[BusinessVisaController::class,'index'])->name('businessVisa');
Route::get('country/canada',[CountryController::class,'index'])->name('country.canada');
