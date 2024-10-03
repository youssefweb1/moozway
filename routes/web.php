<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

// homecontroller
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/project', [HomeController::class, 'project'])->name('project');


use App\Http\Controllers\ContactUsController;

Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');







// routes/web.php
Route::get('lang/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'ar'])) {
        session(['locale' => $lang]);
    }
    return redirect()->back();
})->name('switch.language');
