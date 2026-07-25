<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('/faq', 'pages.faq')->name('faq');
Route::get('sitemap.xml', [pageController::class, 'SiteMapXML']);
