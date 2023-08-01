<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\SubCategoryController;






Route::get('/', [frontController::class,'home'])->name('home');


Route::get('/about-us', [frontController::class,'about'])->name('about');

Route::get('/contact-page', [frontController::class,'contact'])->name('contact');

Route::get('/service-page',[frontController::class,'service'])->name('service');

Route::get('/send-me-details', UserInfoController::class)->name('sendmedetails');

Route::resource('/category', CategoryController::Class);

Route::resource('/subcategory', SubCategoryController::Class);


