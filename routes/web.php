<?php

use Illuminate\Support\Facades\Route;

Route::view('/','index');


Route::prefix('appointments')->group(function () {
    Route::view('/device-type','appointments.device-type');
});
