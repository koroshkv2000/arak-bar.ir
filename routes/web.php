<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/truck-trailer-dimensions', 'pages.truck-trailer-dimensions')->name('truck.dimensions');
Route::get('sitemap.xml', [pageController::class, 'SiteMapXML']);
