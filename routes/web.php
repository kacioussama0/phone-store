<?php

use Illuminate\Support\Facades\Route;

Route::view('/','index');


Route::prefix('appointments')->group(function () {

    Route::get('/brand-type',[App\Http\Controllers\SiteController::class,'brandType']);
    Route::get('/brand-type/{brandId}',[App\Http\Controllers\SiteController::class,'deviceType']);
    Route::get('/brand-type/{brandId}/device-type/{typeId}',[App\Http\Controllers\SiteController::class,'deviceModel']);

});


Route::view('/Dashboard', 'dashboard');
Route::view('/Shipping', 'shipping');
Route::view('/Discount', 'discount');

Route::prefix('Products')->group(function () {
    Route::redirect('/', '/Products/List');
    Route::view('List', 'products/list');
    Route::view('Detail', 'products/detail');
});

Route::prefix('Orders')->group(function () {
    Route::redirect('/', '/Orders/List');
    Route::view('List', 'orders/list');
    Route::view('Detail', 'orders/detail');
});

Route::prefix('Customers')->group(function () {
    Route::redirect('/', '/Customers/List');
    Route::view('List', 'customers/list');
    Route::view('Detail', 'customers/detail');
});
Route::prefix('Storefront')->group(function () {
    Route::redirect('/', '/Storefront/Home');
    Route::view('Home', 'storefront/home');
    Route::view('Filters', 'storefront/filters');
    Route::view('Categories', 'storefront/categories');
    Route::view('Detail', 'storefront/detail');
    Route::view('Cart', 'storefront/cart');
    Route::view('Checkout', 'storefront/checkout');
    Route::view('Invoice', 'storefront/invoice');
});

Route::prefix('Settings')->group(function () {
    Route::view('/', 'settings/index');
    Route::view('General', 'settings/general');
});



Route::prefix('admin')->group(function () {
   Route::resource('brands', \App\Http\Controllers\BrandController::class);
   Route::resource('devices', \App\Http\Controllers\DeviceController::class);
   Route::resource('types', \App\Http\Controllers\TypeController::class);
   Route::resource('issues', \App\Http\Controllers\IssueController::class);
   Route::resource('appointments', \App\Http\Controllers\AppointmentController::class);
});


//Route::get('devices/download-images', [\App\Http\Controllers\DeviceController::class, 'downloadDevicesImage']);
