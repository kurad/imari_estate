<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HousePlanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactUsController;



Route::get('/', [PageController::class,'home'])->name('home');

Route::get('properties',[PageController::class,'index'])->name('properties.index');
Route::get('house_plan',[PageController::class,'house_plan'])->name('house_plan');
Route::get('product',[PageController::class,'product'])->name('product');

Route::get('property_details',[PageController::class,'property_details'])->name('property_details.show');



Route::get('admin_dashboard',[AdminController::class,'admin_dashboard'])->name('admin_dashboard');
Route::get('agent_dashboard',[AdminController::class,'agent_dashboard'])->name('agent_dashboard');

Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::put('/properties/{property}', [PropertyController::class, 'update'])->name('properties.update');

// Mark property as sold
Route::put('/properties/{property}/mark-as-sold', [PropertyController::class, 'markAsSold'])->name('properties.markAsSold');


Route::post('/house_plan', [HousePlanController::class, 'store'])->name('house_plan.store');
Route::put('/house_plan/{housePlan}', [HousePlanController::class, 'update'])->name('house_plan.update');



Route::get('/for_sale',[PageController::class,'for_sale'])->name('for_sale');
Route::get('/for_rent',[PageController::class,'for_rent'])->name('for_rent');
Route::get('/service',[PageController::class,'service'])->name('service');
Route::get('/contact_us',[PageController::class,'contact_us'])->name('contact_us');
Route::get('/about_us',[PageController::class,'about_us'])->name('about_us');
Route::get('/login',[PageController::class,'login'])->name('login');
Route::get('/register',[PageController::class,'register'])->name('register');






// subpages

Route::get('/house',[PageController::class,'house'])->name('house');
Route::get('/land',[PageController::class,'land'])->name('land');
Route::get('/apartment',[PageController::class,'apartment'])->name('apartment');
Route::get('/room',[PageController::class,'room'])->name('room');
Route::get('/villa',[PageController::class,'villa'])->name('villa');
Route::get('/airbnb',[PageController::class,'airbnb'])->name('airbnb');
Route::get('/short_saty',[PageController::class,'short_stay'])->name('short_stay');
Route::get('/studio_room',[PageController::class,'studio_room'])->name('studio_room');
Route::get('/plot',[PageController::class,'plot'])->name('plot');



Route::post('/register_user', [RegisterController::class, 'register'])->name('register.submit');


Route::post('/login_user', [RegisterController::class, 'login_user'])->name('login_user');
Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');
Route::get('/user/{id}/edit', [RegisterController::class, 'editUser'])->name('user.edit');
Route::put('/user/update/{id}', [RegisterController::class, 'update'])->name('user.update');

Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

Route::get('/property_details/{property}',[PropertyController::class,'show_property'])->name('property_details');


Route::get('/house_plans/{id}', [HousePlanController::class, 'show'])->name('house_plans.show');
