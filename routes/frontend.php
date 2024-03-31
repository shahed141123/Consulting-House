<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\CLient\BiddingController;
use App\Http\Controllers\Admin\SubscriptionController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/contact-us/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/{id}/filtering', [HomeController::class, 'customFilter'])->name('custom.filter');
Route::get('/blogs/all', [HomeController::class, 'allBlog'])->name('all.blog');
Route::get('/blog/{id}', [HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/industry-watch/all', [HomeController::class, 'allIndustryWatch'])->name('all.industry-watch');
Route::get('/industry-watch/{id}', [HomeController::class, 'industrywatchDetails'])->name('industry-watch.details');

Route::get('/payment', [HomeController::class, 'payment'])->name('payment');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');

Route::get('/subscribe/plans', [SubscriptionController::class, 'showSubscriptionForm'])->name('subscribe');
Route::get('/subscribe/{id}', [SubscriptionController::class, 'subscribe'])->name('subscribe.post');
Route::post('subscription', [SubscriptionController::class, 'subscriptionPayment'])->name("subscription.create");
Route::post('/cancel-subscription', [SubscriptionController::class, 'cancelSubscription'])->name('cancel-subscription');


Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/franchise', [HomeController::class, 'franchise'])->name('franchise');
Route::get('/investor', [HomeController::class, 'investor'])->name('investor');


Route::get('/profile-details/{id}', [HomeController::class, 'profileDetails'])->name('profile.details');

Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms-condition', [HomeController::class, 'termsCondition'])->name('terms-condition');
Route::get('/consultant-profile/add', [ClientController::class, 'consultantProfile'])->name('add.consultant');

Route::get('/bidding', [BiddingController::class, 'index'])->name('bidding.index');


