<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\AdminsController;

Route::controller(AdminsController::class)->group(function(){
    Route::get('dashboard','index')->name('admins.index');
});

