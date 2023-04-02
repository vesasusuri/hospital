<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


Route::get('/home',[HomeController::class,'redirect']);

Auth::routes();

Route::get('/',[HomeController::class,'index']);

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::put('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/add_news',[AdminController::class,'addnews']);

Route::post('/upload_news',[AdminController::class,'uploadnews']);

Route::get('/show-news',[AdminController::class,'shownews']);

Route::get('/deletenews/{id}',[AdminController::class,'deletenews']);

Route::get('/update-news/{id}',[AdminController::class,'updatenews']);

Route::put('/editnews/{id}',[AdminController::class,'editnews']);













Route::get('/news',[HomeController::class,'news']);

Route::get('/contact-us',[HomeController::class,'contactus']);

