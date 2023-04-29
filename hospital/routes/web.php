<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\DonationController;

use App\Http\Controllers\ProductsController;

use App\Http\Controllers\PayPalController;

use App\Http\Controllers\DoctorController;

Auth::routes();


// Home Controller Routes

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::get('/news',[HomeController::class,'news']);

Route::get('/contact-us',[HomeController::class,'contactus']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/download-file', function () {
    $filePath = storage_path('app/public/example.pdf');
    return response()->download($filePath);
});

// Admin Controller Routes 

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/update-appointments/{id}',[HomeController::class,'updateAppointss']);

Route::put('/editAppoints/{id}',[HomeController::class,'editAppoints']);

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

// End Admin Controller



// Contact Us Form Routes

Route::get('contact-us', [PostController::class, 'index']);

Route::post('contact-us-form', [PostController::class, 'store']);

Route::get('/show-contact-us',[PostController::class,'showContact']);

Route::get('/deletepost/{id}',[PostController::class,'deletepost']);



// Donation Controller and View

Route::get('/add-donations',[DonationController::class,'addDonation']);

Route::post('/uploadDonations',[DonationController::class,'uploadDonations']);

Route::get('/show-donations',[DonationController::class,'showDonations']);

Route::get('/donate',[ProductsController::class,'index']);

Route::post('/checkout-form',[DonationController::class,'checkoutForm']);



// Doctor View Dashboard
Route::get('/add_user_visits',[DoctorController::class,'adduserdata']);

Route::post('/upload_user_visits',[DoctorController::class,'uploadUserData']);

Route::get('/show-user-visits',[DoctorController::class,'showVisits']);

Route::get('/deleteUserVisits/{id}',[DoctorController::class,'deleteUserVisits']);

Route::get('/updateUserVisits/{id}',[DoctorController::class,'updateUserVisits']);

Route::put('/editUserVisits/{id}',[DoctorController::class,'editUserVisits']);

Route::get('/appoints',[DoctorController::class,'appoints']);


Route::get('/doctorVisits',[DoctorController::class,'showUserVisit']);


















// Add Donation To Cart

Route::get('cart', [ProductsController::class, 'cart'])->name('cart');

Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');

Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');

Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');



// PayPal Routes for transactions

Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');

Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');

Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');

Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');